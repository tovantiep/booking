<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Room;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        $categories = Category::all();
        return view('user.home.home', compact('categories'));
    }
    public function listRoom()
    {
      $rooms = Room::all();
      return view('user.room.list', compact('rooms'));
    }
}
