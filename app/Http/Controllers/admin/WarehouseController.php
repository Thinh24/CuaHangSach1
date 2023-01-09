<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Warehouse;
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

    function viewWarehouseById($id){
        $warehouses = Warehouse::find($id);
        return view('admin/warehouse/detail', ['warehouses'=> $warehouses]);
    }
}
