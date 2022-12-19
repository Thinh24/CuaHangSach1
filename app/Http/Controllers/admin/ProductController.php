<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\CategoryDetail;
use App\Models\publishers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MongoDB\Driver\Session;

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
        $publishers = publishers::all();
        $categories = Categories::all();
        return view('admin/product/create', ['publishers'=>$publishers],['categories'=>$categories]);
    }

    function createProduct(Request $request){
            $imageName = time().".".$request->file('image')->extension();
            $request->file('image')->move(public_path('image'),$imageName);


            $product = new Product();
            $product->image = 'image/'.$imageName;
            $product->nameProduct = $request->get('tenSach');
            $product->author = $request->get('tenTacGia');
            $product->quantity = $request->get('soLuong');
            $product->price = $request->get('gia');
//            $product->id_categories = $request->get('theLoai');
            $product->ISBN = $request->get('maISBN');
            $product->id_publishers = $request->get('nhaXuatBan');
            $product->des = $request->get('description');
            $product->save();
            $product_id =  $product->id;

        $categoriesIds = $request ->get('theLoai');

        foreach ($categoriesIds as $categoryId){
            $categoryDetails  = new CategoryDetail();
            $categoryDetails->id_category = $categoryId;
            $categoryDetails->id_products = $product_id;
            $categoryDetails->save();
        }


        return redirect('/admin/products');
    }

    function editProductById($id){
        $product = DB::table('products')->find($id);
        $publishers = publishers::all();
        return view('admin/product/edit', ['product'=>$product],['publishers'=>$publishers]);
    }
    function updateProductById(Request $request, $id){
        $product = DB::table('products')->find($id);
        $imageName = time().".".$request->file('image')->extension();
        $request->file('image')->move(public_path('image'),$imageName);

//        $product = new Product();
        $product->image = 'image/'.$imageName;
        $product->nameProduct = $request->get('tenSach');
        $product->author = $request->get('tenTacGia');

//        $product->category = $request->get('theLoai');

        $product->quantity = $request->get('soLuong');
        $product->price = $request->get('gia');
        $product->ISBN = $request->get('maISBN');
        $product->id_publishers = $request->get('nhaXuatBan');
        $product->des = $request->get('description');


        DB::table('products')->where('id',$id)->update(
            ['nameProduct'=>$product->nameProduct, 'author'=>$product->author,'image'=>$product->image,
//                'category'=> $product->category ,
                'quantity'=>$product->quantity,'price'=>$product->price,'ISBN'=> $product->ISBN,
                'id_publishers'=> $product->id_publishers,'des'=>  $product->des]
        );
        return redirect('admin/products');
    }

    function deleteProductById($id){
        Product::destroy($id);
        return redirect() ->back();
    }

}
