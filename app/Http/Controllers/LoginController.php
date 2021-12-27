<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        $message = null;
        $cccd = null;
        
        return view('login', ['message' => $message, 'cccd' => $cccd]);
    }
    public function checkLogin(Request $request)
    {
        try {
            // $err = array();
        $username = $request->input('username');
        $password = $request->input('password');
        if (is_null($username) && is_null($password)) {
            $err = 'hãy nhập tài khoản và mật khẩu!';
            return view('login', ['message' => $err, 'cccd' => $username]);
        }
        if (is_null($username)) {
            $err = 'hãy nhập tài khoản!';
            return view('login', ['message' => $err, 'cccd' => $username]);
        }
        if (is_null($password)) {
            $err = 'Hãy nhập mật khẩu!';
            return view('login', ['message' => $err, 'cccd' => $username]);
        } else {
            //set level cho user
            // $level = User::where('username',$username)->level;
            $level = User::select('level')
                          ->where('username',$username)
                          ->get();
            //chuyen doi string khi get data tu DB
            foreach ($level as $n) 
            {
                  $level = $n->level;
            }
            $login = [
                'username' => $request->username,
                'password' => $request->password,
                'level' => $level
            ];
            if (Auth::attempt($login)) {
                session()->put('inforuser',$login);
                return redirect('home');
            } else {
                return view('login', ['message' => 'Bạn nhập sai tài khoản hoặc mật khẩu', 'cccd' => $username]);
            }
        }
        } catch (\Throwable $th) {
            return view('error',['message'=>" Hệ thống đang có lỗi!"]);
        }
        
        // return redirect('/home');
        // $user = User::where
    }
}
