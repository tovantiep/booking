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
    public function create()
    {
  
    } 
    public function store(Request $request)
    {
   
    }
    public function edit($id)
    {
       
    }
    public function update(Request $request, $id)
    {
    
    }
    public function delete($id)
    {
        
    }
}
