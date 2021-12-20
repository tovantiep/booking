<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
       $categories = Category::all();
        return view('admin.category.list', compact('categories'));
    }
    public function create()
    {
        return view('admin.category.create');
    } 
    public function store(Request $request)
    {
      $category = new Category();
      $category->name = $request->name;
      $category->save();
      return redirect()->route('admin.category.index')->with('success', 'Thêm thành công ');
    }
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }
    public function update(Request $request, $id)
    {
      $category = Category::find($id);
      $category->update([
        'name' => $request->name
      ]);
      return redirect()->route('admin.category.index',$id)->with('success', 'Sửa thành công');
    }
    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('admin.category.index', $id)->with('success', 'Xóa thành công');
    }
}
