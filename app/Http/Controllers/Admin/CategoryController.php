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
      if ($request->hasFile('image')) {
        $file = $request->file('image');
        $name_file = $file->getClientOriginalName();
        $extention = $file->getClientOriginalExtension();
        if(strcasecmp($extention, 'jpg') == 0
           || strcasecmp($extention, 'png') == 0
           || strcasecmp($extention, 'jpeg') == 0) {
               $image = Str::random(5)."_".$name_file;
               while(file_exists("image/post".$image)){
                   $image = Str::random(5)."_".$name_file;
               }
               $file->move('image/category', $image);
           }
     }
     Category::create([
      'name' => $request->name,
      'image' => $image 
     ]);
      return redirect()->route('admin.category.index')->with('success', 'Thêm thành công ');
    }
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }
    public function update(UpdateCategoryRequest $request, $id)
    {
      if ($request->hasFile('image')) {
        $file = $request->file('image');
        $name_file = $file->getClientOriginalName();
        $extention = $file->getClientOriginalExtension();
        if(strcasecmp($extention, 'jpg') == 0
           || strcasecmp($extention, 'png') == 0
           || strcasecmp($extention, 'jepg') == 0) {
               $image = Str::random(5)."_".$name_file;
               while(file_exists("image/post".$image)){
                   $image = Str::random(5)."_".$name_file;
               }
               $file->move('image/category', $image);
           }
     }
     $category = Category::find($id);
      $category->update([
        'name' => $request->name,
        'image' => isset($image) ? $image : $category->image,
      ]);
      return redirect()->route('admin.category.index', $id)->with('success', 'Sửa thành công');
    }
    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('admin.category.index', $id)->with('success', 'Xóa thành công');
    }
}
