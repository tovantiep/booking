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
      Room::create([
            'category_id' => $request->category_id,
           'branch' => $request->branch,
            'people' => $request->people,
           'floor' => $request->floor,
            'number_room' => $request->number_room,
            'total_money' => $request->total_money,
            'image' => $image,
            'description' => $request->description,
       
       ]);
      return redirect()->route('admin.room.index')->with('success', 'Thêm thành công ');
    }
    public function edit($id)
    {
        $room = Room::find($id);
        $categories = Category::all();
        return view('admin.room.edit', compact('room', 'categories'));
    }
    public function update(UpdateRoomRequest $request, $id)
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
         $room = Room::find($id);
         $room->update([
           'category_id' => $request->category_id,
           'branch' => $request->branch,
            'people' => $request->people,
           'floor' => $request->floor,
            'number_room' => $request->number_room,
            'total_money' => $request->total_money,
            'image' => isset($image) ? $image : $room->image,
            'description' => $request->description,
         ]);
         return redirect()->route('admin.room.index', $id)->with('success', 'Update thành công ');
    }
    public function delete($id)
    {
        $room = Room::find($id);
        $room->delete();
        return redirect()->route('admin.room.index', $id)->with('success', 'Xóa thành công');
    }
}
