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
        $image = array();
        if($file = $request->file('image')) {
            foreach($file as $file){
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'admin/upload/';
                $image_url = $image_full_name;
                $file->move($upload_path, $image_full_name);
                $image[] = $image_url; 
            }
        }
                Room::insert(
                    [
                    'category_id' => $request->category_id,
                    'people' => $request->people,
                    'floor' => $request->floor,
                    'number_room' => $request->number_room,
                    'total_money' => $request->total_money,
                    'description' => $request->description,
                    'number_room' => $request->number_room,
                    'number_room' => $request->number_room,
                    'image' => implode('|', $image),
                    ]
                );
       
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
        $image = array();
        if($file = $request->file('image')) {
            foreach($file as $file){
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'admin/upload/';
                $image_url = $image_full_name;
                $file->move($upload_path, $image_full_name);
                $image[] = $image_url; 
            }
        }
            $room->category_id = $request->category_id;
            $room->people = $request->people;
            $room->floor = $request->floor;
            $room->number_room = $request->number_room;
            $room->total_money = $request->total_money;
            $room->description = $request->description;
            $room->image = implode('|', $image);
        
        $room->save();
         return redirect()->route('admin.room.index', $id)->with('success', 'Update thành công ');
    }
    public function delete($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();
        return redirect()->route('admin.room.index', $id)->with('success', 'Xóa thành công');
    }
    public function detail($id)
    {
        $room = Room::findOrFail($id);
        $categories = Category::all();
        return view('admin.room.detail', compact('room', 'categories'));
    }
}
