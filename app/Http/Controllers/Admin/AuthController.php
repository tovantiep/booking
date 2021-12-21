<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.login.index');
    }
    public function checkLogin(LoginRequest $request)
    {
        $remember = $request->has('remember');
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password], $remember)){
            return redirect()->route('admin.home');
        }
        return redirect()->route('auth.login')->with('error', 'Dang nhap that bai');
    }
    public function register()
    {
        return view('admin.register.index');
    }
    public function checkRegister(RegisterRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->role = $request->role;
        $user->save();
        return redirect()->route('auth.login');
    }
    public function logout()
    {
       Auth::logout();
       return redirect()->route('auth.login');
    }
}
