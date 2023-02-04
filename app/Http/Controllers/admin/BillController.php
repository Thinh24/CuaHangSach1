<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\BillDetail;
use App\Models\Payment;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BillController extends Controller
{
    function addToCart($id)
    {
        $products = Product::find($id);
        $cart = session()->get('cart');
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $cart[$id]['quantity'] + 1;
        } else {
            $cart[$id] = [
                'id' => $products->id,
                'price' => $products->price,
                'quantity' => 1,
                'image' => $products->image
            ];
        }
        session()->put('cart', $cart);
        return response()->json([
            'code' => 200,
            'mes' => 'success'
        ], 200);
    }

    function viewCart(Request $request)
    {
        $kw = $request->get('kw','');
        if(empty($kw)) {
            $payments = Payment::all();
            $carts = session()->get('cart');
            return view('web.gioHang', compact('carts'), ['payments' => $payments],);
        }
        else{
                $products = Product::where('id','LIKE',$kw)
                    ->orWhere('nameProduct','LIKE','%'.$kw.'%')
                    ->paginate(8);
                return view('web/bodyallsp', ['products' => $products]);
            }

    }

    function updateCart(Request $request)
    {
        if ($request->id && $request->quantity) {
            $carts = session()->get('cart');
            $carts[$request->id]['quantity'] = $request->quantity;
            session()->put('cart', $carts);
            $carts = session()->get('cart');

            $cartComponent = view('web.components.cart_component', compact('carts'))->render();
            return response()->json(['cart_component' => $cartComponent, 'code' => 200], 200);
        }
    }

    function deleteCart(Request $request)
    {
        if ($request->id) {
            $carts = session()->get('cart');
            unset($carts[$request->id]);
            session()->put('cart', $carts);
            $carts = session()->get('cart');

            $cartComponent = view('web.components.cart_component', compact('carts'))->render();
            return response()->json(['cart_component' => $cartComponent, 'code' => 200], 200);
        }
    }

    function viewAllBill()
    {
        $bills = DB::table('bills')
            ->join('users', 'bills.id_users', '=', 'users.id')
            ->join('payments', 'bills.id_payment', '=', 'payments.id')
            ->select('bills.*', 'users.name', 'payments.paymentName')
            ->get();

        return view('/admin/bill/index', ['bills' => $bills]);
    }

    function viewBillById($id){
        $bills = Bill::find($id);
        $users = User::all(['id','name']);

        return view('admin/bill/detail', ['bills'=> $bills], ['users'=>$users]);
    }


    function updateBillById(Request $request, $id)
    {
        $bills = Bill::find($id);
        $bills->status = $request->get('status');
        $bills ->save();
        return redirect('/admin/orders');
    }

    function createBill(Request $request)
    {
        $bill = new Bill();
        $bill->name = $request->get('name');
        $bill->phone = $request->get('phone');
        $bill->address = $request->get('address');;
        $bill->note = $request->get('note');
        $bill->id_users = $request->get('nameUser');
        $bill->id_payment = $request->get('pttt');
        $bill->status = $request->get('status');;
        $bill->save();
        $bill_id = $bill->id;
        $cart_item = $request->session()->get('cart');
        foreach ($cart_item as $bill_details) {
            $billDetails = new BillDetail();
            $billDetails->id_bill = $bill_id;
            $billDetails->id_products = $bill_details['id'];
            $billDetails->quantity = $bill_details['quantity'];
            $billDetails->price = $bill_details['price'] * $bill_details['quantity'];
            $billDetails->save();
        }
        $request->session()->forget('cart');
        return redirect('/home');
    }




}
