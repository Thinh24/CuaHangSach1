<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\BillDetail;
use App\Models\Payment;
use App\Models\Product;
use Illuminate\Http\Request;

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

    function viewCart()
    {

        $payments = Payment::all();
        $carts = session()->get('cart');
        return view('web.gioHang', compact('carts'), ['payments' => $payments],);
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

    function createBill(Request $request)
    {

        session()->get('cart');
        /*
         * Vong lap: lay ra tung ban ghi trong cart
         * Trong moi lan lap: tu ban ghi cart_item -> tao ban ghi bill_details tuong ung
         */
        $bill = new Bill();
        $bill->id_users = $request->get('nameUser');
        $bill->id_payment = $request->get('pttt');
        $bill->status = $request->get('status');;
        $bill->save();

        $bill_id = $bill->id;

        $cart_item = $request->session()->get('cart');
//        dd($cart_item);
        foreach ($cart_item as $bill_details) {
            $billDetails = new BillDetail();

            $billDetails->id_bill = $bill_id;
            $billDetails->id_products = $bill_details['id'];
            $billDetails->price = $bill_details['price'];
            $billDetails->quantity = $bill_details['quantity'];
            $billDetails->save();

        }
        $request->session()->forget('cart');
        return redirect('/home');
    }
}
