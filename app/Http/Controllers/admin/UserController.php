<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function __construct()
    {
        $this->middleware('check.is.admin');
    }

    function viewAllUser(Request $request){
//        $users = User::all();
//        //dd($users);
//        return view('admin/user/index', ['users'=>$users]);

        $kw = $request->get('kw','');
        if(empty($kw)){
            $users = User::paginate(5);
        }
        else{
            $users = User::where('id','LIKE','%'.$kw.'%')
                ->orWhere('name','LIKE','%'.$kw.'%')
                ->paginate(5);
        }
        return view('admin/user/index', ['users'=>$users]);
    }
    function viewUserById(){
//        $users = User::find($id);
//        return view('admin/user/detail', ['$users'=> $users]);
    }
    function editUserById($id){

    }
    function deleteUserById($id){
        User::destroy($id);
        return redirect() ->back();
    }
}
