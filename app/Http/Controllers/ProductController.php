<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Spatie\LaravelIgnition\Exceptions\ViewExceptionWithSolution;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard(){
        $title = 'Dashboard';
        return view('backend.dashboard', compact('title'));
    }
    public function index(Request $request)
    {
        $title = 'Quản lý sản phẩm';
        $products = Product::all();
        if($request->post()){
            $products = DB::table('products')->where('id', 'like', '%'.$request->search_product.'%');
        }
        return view('backend.product.index', compact('title', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(ProductRequest $request)
    {
        $title = 'Thêm sản phẩm';
        $categories = Category::all();
        if($request->post()){
            $params = $request->post();
            unset($params['_token']);
            // dd($params)
            // DB::table('posts')->insert($params); cách 1
            if($request->hasFile('image') && $request->file('image')->isValid()){
                $request->image = uploadFile('hinh', $request->file('image'));
            }
            $product =new Product();
            $product->name = $request->name;
            $product->image = $request->image;
            $product->price = $request->price;
            $product->description = $request->description;
            $product->quantity = $request->quantity;
            $product->category = $request->category;
           $product->discount = $request->discount;
        //    dd($product);
            $product->save();
            
            if ($product->save()) {
                Session::flash('success', "Thêm thành công");
                return redirect()->route('search_product');
            } else {
                Session::flash('error', "Thêm Lỗi");
            }  
        }
        return view('backend.product.add', compact('title', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     */
    // public function show(Product $product)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Product $product)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function edit(ProductRequest $request, $id)
    {
        $title = 'Sửa sản phẩm';
        $categories = Category::all();
        $product = Product::find($id);
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $request->image = uploadFile('hinh', $request->file('image'));
        }
        if($request->isMethod('post')){
            $update = Product::where('id', $id)->update($request->except('_token'));
            if($update){
                Session::flash('success', "Sửa thành công");
                return redirect()->route('search_product');
            }
            else {
                Session::flash('error', "Sửa không thành công");
            }
        }
        return view('backend.product.edit', compact('title', 'product', 'categories'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if($id) {
            $destroy = Product::where('id', $id)->delete();
        }
        if($destroy) {
            Session::flash('success', 'Xóa thành công');
            return redirect()->route('search_product');
        }
        else {
            Session::flash('error', 'Xóa không thành công');
        }
        return;
    }
}
