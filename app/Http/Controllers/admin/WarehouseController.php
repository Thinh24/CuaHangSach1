<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Warehouse;
use App\Models\WarehouseDetail;
use App\Models\User;
use App\Models\Storages;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WarehouseController extends Controller
{
    public function  __construct()
    {
        $this->middleware('check.is.admin');
    }

    function viewWarehouse(Request $request){
        $warehouses = Warehouse::all();
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

    function createWarehouse(Request $request ){
        $warehouse = new warehouse();
        $warehouse->id_users = $request->get('user');
        $warehouse->id_storage = $request->get('storage');
        $warehouse->save();
//
//        $warehouseIds = DB::table('warehouses')
//        ->join('warehouse_details','warehouses.id','=','warehouse_details.id_warehouses')
//        ->select('warehouses.id')
//        ->where('warehouse.id','=',$warehouse->id)
//        ->get();
//
//
//        foreach ($warehouseIds as $warehouseId){
//            $warehouseDetail = new WarehouseDetail();
//            $warehouseDetail -> id_warehouse = $warehouseId;
//           $warehouseDetail-> save();
//           dd($warehouseDetail);
//        }
        return redirect('/admin/warehouses');
//            ,['users'=>$users],['storages' => $storages]);
    }

}
