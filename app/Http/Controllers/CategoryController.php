<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $title = 'Quản lý danh mục';
        $categories = Category::all();
        if($request->post()){
            $categories = DB::table('categories')->where('id', 'like', '%'.$request->search_category.'%');
        }
        return view('backend.category.index', compact('title', 'categories'));
    }

    
    public function create(CategoryRequest $request)
    {
        $title = 'Thêm danh mục';
        if($request->post()) {
            $params = $request->post();
            unset($params['_token']);
            if($request->hasFile('image') && $request->file('image')->isValid()){
                $request->image = uploadFile('hinh', $request->file('image'));
            }
            $category = new Category();
            $category->name = $request->name;
            $category->description = $request->description;
            $category->image = $request->image;
            // dd($category);
            $category->save();
            if($category->save()) {
                Session::flash('success', 'Thêm thành công!');
                return redirect()->route('search_category');
            }
            else {
                Session::flash('error', 'Thêm không thành công!');
            }
        }
        return view('backend.category.add', compact('title'));
    }

    public function edit(CategoryRequest $request, $id)
    {
        $title = 'Sửa danh mục';
        $category = Category::find($id);
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $request->image = uploadFile('hinh', $request->file('image'));
        }
        if($request->isMethod('post')){
            $update = Category::where('id', $id)->update($request->except('_token'));
            if($update) {
                Session::flash('success', 'Sửa thành thành công');
                return redirect()->route('search_category');
            }
            else {
                Session::flash('error', 'Lỗi!');
            }
        }
        return view('backend.category.edit', compact('title', 'category'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if($id) {
            $destroy = Category::where('id', $id)->delete();
        }
        if($destroy) {
            Session::flash('success', 'Xóa thành công');
            return redirect()->route('search_category');
        }
        else {
            Session::flash('error', 'Xóa không thành công');
        }
        return;
    }
}
