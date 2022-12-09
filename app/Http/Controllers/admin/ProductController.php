<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\hinhAnh;
use App\Models\nhaXuatBan;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function  __construct()
    {
        $this->middleware('check.is.admin');
    }

    function viewAllProducts(Request $request){
        $kw = $request->get('kw','');
        if(empty($kw)){
            $products = Product::paginate(2);
        }
        else{
            $products = Product::where('id','LIKE','%'.$kw.'%')
                ->orWhere('tenSanPham','LIKE','%'.$kw.'%')
                ->paginate(2);
        }
        return view('admin/product/index', ['products' => $products]);
    }

    function viewProductById($id){
        $products = Product::find($id);
        return view('admin/product/detail', ['products'=> $products]);
    }

    function viewCreateProduct(){
        $nhaXuatBan = nhaXuatBan::all();
        $hinhAnh = hinhAnh::all();
        return view('admin/product/create', ['nhaXuatBan'=>$nhaXuatBan],['hinhAnh'=>$hinhAnh]);

    }

    function createProduct(Request $request){
        $imageName = time().".".$request->file('image')->extension();
        $request->file('image')->move(public_path('image'),$imageName);

        $product = new Product();
        $imageName = 'image/'.$imageName;

        $product->tenSanPham = $request->get('tenSach');
        $product->TacGia = $request->get('tenTacGia');
        $product->theLoai = $request->get('theLoai');
        $product->giaSanPham = $request->get('gia');
        $product->maISBN = $request->get('maISBN');
        $product->id_nha_xuat_ban = $request->get('nhaXuatBan');
        $product->moTa = $request->get('description');
        $product->id_hinh_anh = $request->get('hinhAnh');

        $product->save();
        return redirect('/admin/products');
    }

    function updateProductById($id){

    }

    function deleteProductById($id){
        Product::destroy($id);
        return redirect() ->back();
    }

}
