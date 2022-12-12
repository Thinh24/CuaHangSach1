<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\nhaXuatBan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NhaXuatBanController extends Controller
{
    public function  __construct()
    {
        $this->middleware('check.is.admin');
    }

    function viewAllNhaXuatBan(Request $request){
        $kw = $request->get('kw','');
        if(empty($kw)){
            $nha_xuat_bans = nhaXuatBan::paginate(5);
        }
        else{
            $nha_xuat_bans = nhaXuatBan::where('id','LIKE','%'.$kw.'%')
                ->orWhere('tenNhaXuatBan','LIKE','%'.$kw.'%')
                ->paginate(5);
        }
        return view('admin/NhaXuatBan/index', ['nha_xuat_bans' => $nha_xuat_bans]);
    }


    function viewCreateNhaXuatBan(){
        return view('admin/NhaXuatBan/create');

    }

    function createNhaXuatBan(Request $request){
        $nha_xuat_bans = new nhaXuatBan();
        $nha_xuat_bans->tenNhaXuatBan = $request->get('tenNhaXuatBan');
        $nha_xuat_bans->save();
        return redirect('/admin/NhaXuatBan');
    }

    function editNhaXuatBanById($id){
        $nha_xuat_bans = DB::table('nha_xuat_bans')->find($id);
        return view('admin/NhaXuatBan/edit', ['nha_xuat_bans'=>$nha_xuat_bans]);
    }
    function updateNhaXuatBanById(Request $request, $id){
        $nha_xuat_bans = new nhaXuatBan();
        $nha_xuat_bans->tenNhaXuatBan = $request->get('tenNhaXuatBan');

        DB::table('nha_xuat_bans')->where('id',$id)->update(
            ['tenNhaXuatBan'=>$nha_xuat_bans->tenNhaXuatBan]
        );
        return redirect("admin/NhaXuatBan");
    }

    function deleteNhaXuatBanById($id){
        nhaXuatBan::destroy($id);
        return redirect() ->back();
    }
}
