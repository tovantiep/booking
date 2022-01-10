<?php

namespace App\Http\Controllers\Admin;
use  App\Http\Requests\Category\CreateCategoryRequest;
use Illuminate\Support\Str;
use  App\Http\Requests\Category\UpdateCategoryRequest;
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
    public function store(CreateCategoryRequest $request)
    {
     $category = new Category();
     $category->name = $request->name;
     $get_image = $request->image;
     $path = 'admin/upload';
     $get_name_image = $get_image->getClientOriginalName();
     $name_image = current(explode('.', $get_name_image));
     $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
     $get_image->move($path, $new_image);

     $category->image = $new_image;
     $category->save();
      return redirect()->route('admin.category.index')->with('success', 'Thêm thành công ');
    }
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }
    public function update(UpdateCategoryRequest $request, $id)
    {
     $category = Category::findOrFail($id);
     $category->name = $request->name;
     $get_image = $request->image;
        if ($get_image) {
            $path = 'admin/upload/'.$category->image;
            if(file_exists($path)){
                unlink($path);
            }
            $path = 'admin/upload/';
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0, 99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $category->image = $new_image;
        }
        $category->save();
      return redirect()->route('admin.category.index', $id)->with('success', 'Sửa thành công');
    }
    public function delete($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('admin.category.index', $id)->with('success', 'Xóa thành công');
    }
}
