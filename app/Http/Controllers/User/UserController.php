<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
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
      return view('user.room.list');
    }
}
