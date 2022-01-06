<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\Room\CreateRoomRequest;
use App\Http\Requests\Room\UpdateRoomRequest;
use App\Models\Category;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
       $rooms = Room::all();
        return view('admin.room.list', compact('rooms'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('admin.room.create', compact('categories'));
    } 
    public function store(CreateRoomRequest $request)
    { 
       $room = new Room();
        $room->category_id = $request->category_id;
        $room->branch = $request->branch;
        $room->people = $request->people;
        $room->floor = $request->floor;
        $room->number_room = $request->number_room;
        $room->total_money = $request->total_money;
        $room->description = $request->description;
        $get_image = $request->image;
        $path = 'admin/upload/';
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.', $get_name_image));
        $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image->move($path, $new_image);

        $room->image = $new_image;
        $room->save();
      return redirect()->route('admin.room.index')->with('success', 'Thêm thành công ');
    }
    public function edit($id)
    {
        $room = Room::findOrFail($id);
        $categories = Category::all();
        return view('admin.room.edit', compact('room', 'categories'));
    }
    public function update(UpdateRoomRequest $request, $id)
    {
        $room = Room::findOrFail($id);
        $room->category_id = $request->category_id;
        $room->branch = $request->branch;
        $room->people = $request->people;
        $room->floor = $request->floor;
        $room->number_room = $request->number_room;
        $room->total_money = $request->total_money;
        $room->description = $request->description;
        $get_image = $request->image;
        if ($get_image) {
            $path = 'admin/upload'.$room->image;
            if(file_exists($path)){
                unlink($path);
            }
            $path = 'admin/upload';
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0, 99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $room->image = $new_image;
        }
        $room->save();
         return redirect()->route('admin.room.index', $id)->with('success', 'Update thành công ');
    }
    public function delete($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();
        return redirect()->route('admin.room.index', $id)->with('success', 'Xóa thành công');
    }
}
