<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function index()
    {
        $err = "Hệ thống đang có lỗi";
        return view('errorpage',['error',$err]);
    }
}
