<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        $message = null;
        $cccd = null;
        
        return view('login', ['message' => $message, 'cccd' => $cccd]);
    }
}
