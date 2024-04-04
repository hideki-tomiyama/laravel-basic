<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\vendor;
use App\Http\Requests\ProductStoreRequest;

class ProductController extends Controller
{
    public function index() {
        //productsテーブルから全てのデータを取得し、変数$productsに代入
        $products = DB::table('products')->get();
        
        //変数$productsをproduct/index.blade.phpファイルに渡す
        return view('products.index',compact('products'));
    }

    public function show($id) {
        // URL'/products/{id}'の'{id}'部分と主キー（idカラム）の値が一致するデータをproductsテーブルから取得し、変数$productに代入する
        $product = Product::find($id);

        //変数$productをproducts/show.blade.phpファイルに引き渡す
        return view('products.show',compact('product'));
    }

    public function create() {
        $vendor_codes = Vendor::pluck('vendor_code');

        return view('products.create',compact('vendor_codes'));
    }

    public function store(ProductStoreRequest $request) {
        //フォームの入力内容を元に、テーブルにデータを追加する
        $product = new Product();
        $product->product_name = $request->input('product_name');
        $product->price = $request->input('price');
        $product->vendor_code = $request->input('vendor_code');
        
        //アップロードされたファイルが存在すれば実行する
        if ($request->hasfile('image')) {
           //アップロードされたファイル(name='image')をtorage/app/public/productsフォルダに保存し、戻り値（ファイルパス）を変数$image_pathに代入する
           $image_path = $request->file('image')->store('public/products');
           //ファイルパスからファイル名のみを取得し、productインスタンスのimage_nameプロパティに代入する
           $product->image_name = basename($image_path);
        }
        
        $product->save();

        //リダイレクトさせる
        return redirect("/products/{$product->id}"); 
    }
}
