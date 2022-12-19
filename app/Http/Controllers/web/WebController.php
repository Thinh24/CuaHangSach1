<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{
    // Cac trang chung, xử lý chung bên này

    // GET: localhost/home
    function viewHome(){
        $products = Product::all();
//        dd($products);
        return view('web.home',['products' => $products]);
    }

    // GET: localhost/login
    function viewLogin(){
        return view('web.login');
    }
    // POST: localhost/login
    // Xử lý việc đăng nhập: ko có giao diện
    function login(Request $request){
        $email= $request->get('email');
        $password = $request->get('password');

        $rs = Auth::attempt(['email'=>$email,'password'=>$password]);
        if($rs == false){
            return redirect()->back();
        }
        else{
            // DDăng nhập thành công
            // Xác đinh admin hay khach hàng?
            $user = Auth::user();
            if($user->isAdmin == 1){
                // Day la admin
                return redirect('/admin/home');
            }
            else{
                return redirect('/home');
            }
        }
    }
    function viewRegister(){
        return view('web.register');
    }
    function createRegister(Request $request){
        $data = $request->all();
        $this -> redirectTo = '/login';

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
    function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
