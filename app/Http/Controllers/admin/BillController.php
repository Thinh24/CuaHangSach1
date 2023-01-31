<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
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
                'name' => $products->name,
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
        return view('web.gioHang', compact('carts') ,['payments'=>$payments]);
    }

    function updateCart(Request $request)
    {
        if ($request->id && $request->quantity){
            $carts = session()->get('cart');
            $carts[$request->id]['quantity'] = $request->quantity;
            session()->put('cart', $carts);
            $carts = session()->get('cart');

            $cartComponent = view('web.components.cart_component', compact('carts'))->render();
            return response()->json(['cart_component'=>$cartComponent, 'code' => 200],200);
        }
    }
    function deleteCart(Request $request){
        if ($request->id){
            $carts = session()->get('cart');
            unset($carts[$request->id]);
            session()->put('cart', $carts);
            $carts = session()->get('cart');

            $cartComponent = view('web.components.cart_component', compact('carts'))->render();
            return response()->json(['cart_component'=>$cartComponent, 'code' => 200],200);
        }
    }
}
