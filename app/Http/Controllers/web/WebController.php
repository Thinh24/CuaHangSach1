<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\publishers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{
    // Cac trang chung, xử lý chung bên này

    // GET: localhost/home
    function viewHome()
    {
        $products = Product::all();
//        dd($products);
        return view('web.home', ['products' => $products]);
    }

    // GET: localhost/login
    function viewLogin()
    {
        return view('web.login');
    }
    // POST: localhost/login
    // Xử lý việc đăng nhập: ko có giao diện
    function login(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');

        $rs = Auth::attempt(['email' => $email, 'password' => $password]);
        if ($rs == false) {
            return redirect('/home');
        } else {
            // DDăng nhập thành công
            // Xác đinh admin hay khach hàng?
            $user = Auth::user();
            if ($user->isAdmin == 1) {
                // Day la admin
                return redirect('/admin/home');
            } else {
                return redirect('/home');
            }
        }
    }

    function viewRegister()
    {
        return view('web.register');
    }

    function createRegister(Request $request)
    {
        $data = $request->all();
        $this->redirectTo = '/login';

        User::factory()->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'isAdmin' => false,
            'isActive' => false,
        ]);


        return redirect('/login');
    }


    // POST: localhost/logout
    function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    function viewProductDetail($id)
    {
        $publishers = publishers::all(['id', 'namePublishers']);
        $products = Product::find($id);
        return view('web.detail.detailProduct', ['products' => $products], ['publishers' => $publishers]);
    }

    function addToCart($id)
    {
//        session() -> flush();
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

//        echo "<pre>";
//        print_r(session()->get('cart'));
    }


    function viewCart()
    {
        $carts = session()->get('cart');
        return view('web.gioHang', compact('carts'));
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
