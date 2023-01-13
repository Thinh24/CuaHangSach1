<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Suppliers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuppliersController extends Controller
{
    public function  __construct()
    {
        $this->middleware('check.is.admin');
    }

    function viewAllNhaCungCap(Request $request){
        $kw = $request->get('kw','');
        if(empty($kw)){
            $suppliers = suppliers::paginate(5);
        }
        else{
            $suppliers = suppliers::where('id','LIKE','%'.$kw.'%')
                ->orWhere('name$suppliers','LIKE','%'.$kw.'%')
                ->paginate(5);
        }
        return view('admin/supplier/index', ['suppliers' => $suppliers]);
    }


    function viewCreateNhaCungCap(){
        return view('admin/supplier/create');

    }

    function createNhaCungCap(Request $request){
        $suppliers = new suppliers();
        $suppliers->nameSupplier = $request->get('nameSuppliers');
        $suppliers->address = $request->get('address');
        $suppliers->phone = $request->get('phone');
        $suppliers->save();
        return redirect('/admin/supplier');
    }

    function editNhaCungCapById($id){
        $suppliers = DB::table('$suppliers')->find($id);
        return view('admin/supplier/edit', ['suppliers'=>$suppliers]);
    }
    function updateNhaCungCapById(Request $request, $id){
        $suppliers = suppliers::all();
        $suppliers->nameSupplier = $request->get('nameSuppliers');
        $suppliers->address = $request->get('address');
        $suppliers->phone = $request->get('phone');
        $suppliers->save();
//
//        DB::table('supplier')->where('id',$id)->update(
//            ['nameSuppliers'=>$suppliers->nameSupplier,]
//        );
        return redirect("admin/supplier");
    }

    function deleteNhaXuatBanById($id){
        supplier::destroy($id);
        return redirect() ->back();
    }
}
