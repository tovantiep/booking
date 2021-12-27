<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\Room\CreateRoomRequest;
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
                $file->move('image/post', $image);
            }
      }
      $room = new Room();
      $room->category_id = $request->category_id;
      $room->branch = $request->branch;
      $room->people = $request->people;
      $room->floor = $request->floor;
      $room->number_room = $request->number_room;
      $room->total_money = $request->total_money;
      $room->image = $image;
      $room->description = $request->description;
      $room->save();
      return redirect()->route('admin.room.index')->with('success', 'Thêm thành công ');
    }
}
