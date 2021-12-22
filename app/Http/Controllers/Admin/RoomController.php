<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
       $rooms = Room::all();
        return view('admin.room.list', compact('rooms'));
    }
    // public function create()
    // {
    //     return view('admin.category.create');
    // } 
    // public function store(CreateCategoryRequest $request)
    // {
    //   $category = new Category();
    //   $category->name = $request->name;
    //   $category->save();
    //   return redirect()->route('admin.category.index')->with('success', 'Thêm thành công ');
    // }
    // public function edit($id)
    // {
    //     $category = Category::find($id);
    //     return view('admin.category.edit', compact('category'));
    // }
    // public function update(UpdateCategoryRequest $request, $id)
    // {
    //   $category = Category::find($id);
    //   $category->update([
    //     'name' => $request->name
    //   ]);
    //   return redirect()->route('admin.category.index',$id)->with('success', 'Sửa thành công');
    // }
    // public function delete($id)
    // {
    //     $category = Category::find($id);
    //     $category->delete();
    //     return redirect()->route('admin.category.index', $id)->with('success', 'Xóa thành công');
    // }
}
