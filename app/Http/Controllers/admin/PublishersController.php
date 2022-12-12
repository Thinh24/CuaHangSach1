<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\publishers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublishersController extends Controller
{
    public function  __construct()
    {
        $this->middleware('check.is.admin');
    }

    function viewAllNhaXuatBan(Request $request){
        $kw = $request->get('kw','');
        if(empty($kw)){
            $publishers = publishers::paginate(5);
        }
        else{
            $publishers = publishers::where('id','LIKE','%'.$kw.'%')
                ->orWhere('name$publishers','LIKE','%'.$kw.'%')
                ->paginate(5);
        }
        return view('admin/publishers/index', ['publishers' => $publishers]);
    }


    function viewCreateNhaXuatBan(){
        return view('admin/publishers/create');

    }

    function createNhaXuatBan(Request $request){
        $publishers = new publishers();
        $publishers->namePublishers = $request->get('namePublishers');
        $publishers->save();
        return redirect('/admin/publishers');
    }

    function editNhaXuatBanById($id){
        $publishers = DB::table('publishers')->find($id);
        return view('admin/publishers/edit', ['publishers'=>$publishers]);
    }
    function updateNhaXuatBanById(Request $request, $id){
        $publishers = publishers::all();
        $publishers->namePublishers = $request->get('namePublishers');

        DB::table('publishers')->where('id',$id)->update(
            ['namePublishers'=>$publishers->namePublishers]
        );
        return redirect("admin/publishers");
    }

    function deleteNhaXuatBanById($id){
        publishers::destroy($id);
        return redirect() ->back();
    }
}
