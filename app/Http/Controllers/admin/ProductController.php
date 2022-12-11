<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\nhaXuatBan;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function  __construct()
    {
        $this->middleware('check.is.admin');
    }

    function viewAllProducts(Request $request){
        $kw = $request->get('kw','');
        if(empty($kw)){
            $products = Product::paginate(5);
        }
        else{
            $products = Product::where('id','LIKE','%'.$kw.'%')
                ->orWhere('tenSanPham','LIKE','%'.$kw.'%')
                ->paginate(5);
        }
        return view('admin/product/index', ['products' => $products]);
    }

    function viewProductById($id){
        $products = Product::find($id);
        return view('admin/product/detail', ['products'=> $products]);
    }

    function viewCreateProduct(){
        $nhaXuatBan = nhaXuatBan::all();
        return view('admin/product/create', ['nhaXuatBan'=>$nhaXuatBan]);

    }

    function createProduct(Request $request){
        $imageName = time().".".$request->file('image')->extension();
        $request->file('image')->move(public_path('image'),$imageName);

        $product = new Product();
        $product->image = 'image/'.$imageName;
        $product->tenSanPham = $request->get('tenSach');
        $product->TacGia = $request->get('tenTacGia');
        $product->theLoai = $request->get('theLoai');
        $product->giaSanPham = $request->get('gia');
        $product->maISBN = $request->get('maISBN');
        $product->id_nha_xuat_ban = $request->get('nhaXuatBan');
        $product->moTa = $request->get('description');

        $product->save();
        return redirect('/admin/products');
    }

    function editProductById($id){
        $product = DB::table('products')->find($id);
        return view('admin/product/edit', ['product'=>$product]);
    }
    function updateProductById(Request $request, $id){
        $imageName = time().".".$request->file('image')->extension();
        $request->file('image')->move(public_path('image'),$imageName);

        $product = new Product();
        $product->image = 'image/'.$imageName;
        $product->tenSanPham = $request->get('tenSach');
        $product->tacGia = $request->get('tenTacGia');
        $product->theLoai = $request->get('theLoai');
        $product->giaSanPham = $request->get('gia');
        $product->maISBN = $request->get('maISBN');
        $product->id_nha_xuat_ban = $request->get('nhaXuatBan');
        $product->moTa = $request->get('description');

        DB::table('products')->where('id',$id)->update(
            ['tenSanPham'=>$product->tenSanPham, 'tacGia'=>$product->tacGia,'image'=>$product->image,
                'theLoai'=> $product->theLoai ,'giaSanPham'=>$product->giaSanPham,'maISBN'=> $product->maISBN,
                'id_nha_xuat_ban'=> $product->id_nha_xuat_ban,'moTa'=>  $product->moTa]
        );
        return redirect()->back();
    }

    function deleteProductById($id){
        Product::destroy($id);
        return redirect() ->back();
    }

}
