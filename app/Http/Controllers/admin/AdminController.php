<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\Product;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // GET localhost/admin/home
    function __construct()
    {
        $this->middleware('check.is.admin');
    }

    function viewHome(){
        $product_count = Product::count();
        $order_count = Bill::count();
        $orders  = Bill::where('status',0)->get();
        $new_user = User::count();
        if(request()->date_from && request()->date_to){
            $orders  = Bill::where('status',0)->whereBetween('created_at',[request()->date_from,request()->date_to])->get();
        }
        return view('admin.home',compact('product_count','order_count','orders','new_user'));
    }
}



