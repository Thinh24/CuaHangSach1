<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Warehouse;
use App\Models\WarehouseDetail;
use App\Models\User;
use App\Models\Storages;

use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    public function  __construct()
    {
        $this->middleware('check.is.admin');
    }

    function viewWarehouse(Request $request){
        $kw = $request->get('kw','');
        if(empty($kw)){
            $warehouses = Warehouse::paginate(5);
        }
        else{
            $warehouses = Warehouse::where('id','LIKE','%'.$kw.'%')
                ->orWhere('ngayNhap','LIKE','%'.$kw.'%')
                ->paginate(5);
        }
        return view('admin/warehouse/index', ['warehouses' => $warehouses]);
    }

    function viewCreateWarehouse(){
        $users = User::all();
        $storages = Storages::all();
        return view('admin/warehouse/create',['users' => $users],['storages' => $storages]);
    }

    function createWarehouse(Request $request){
        $warehouses = new warehouse();
        $users = User::all();
        $storages = Storages::all();
//        $warehouses->id = $request->get('id');
        $warehouses->created_at = $request->get('date');
        $warehouses->id_users = $request->get('user');
        $warehouses->id_storage = $request->get('storage');
        $warehouses->save();
        return redirect('/admin/warehouse',['users'=>$users],['storages' => $storages]);
    }

    function viewWarehouseById($id){
        $warehouses = Warehouse::find($id);
        return view('admin/warehouse/detail', ['warehouses'=> $warehouses]);
    }
}
