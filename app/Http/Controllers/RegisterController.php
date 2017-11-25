<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('auth/new/register');
    }
    //
    public function register(Request $request)
    {
        //dd($request);
        //验证
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required|min:5|max:100',
            'phone' => 'required|min:10|max:12',
            'password' => 'required',
        ]);
        //逻辑
        $username = $request['username'];
        $phone = $request['phone'];
        $email = $request['email'];
        $password = bcrypt($request['password']);
        $confirmed = 1;
        User::create(compact('username', 'phone', 'email', 'password', 'confirmed'));
        //渲染
        return redirect('/login');
    }

}
