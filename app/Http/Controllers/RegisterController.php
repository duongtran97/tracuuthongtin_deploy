<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Person;
use App\Models\Vaccine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        $vaccine = Vaccine::all();
        return view('register', ['message' => null, 'vaccine' => $vaccine]);
    }
    public function insert(Request $req)
    {
        //kiem tra ton tai cccd
        $cccd = $req->input('cccd');
        $person = Person::where('cccd', $cccd)
            ->get();
        if (count($person) != 0) {
            $message = "Đã tồn tại số căn cước công dân này, hãy đăng nhập vào hệ thống!";
            return view('login', ['message' => $message, 'cccd' => $cccd]);
        } else {
            try {
                DB::beginTransaction();
                //code transaction
                //thuc hien transaction insert db
                // $input = $req->input('sexual');
                // return view('test',['input'=>$input]);
                DB::table('person')->insert(
                    [
                        'fullname' => $req->input('fullname'),
                        'cccd' => $req->input('cccd'),
                        'birthday' => $req->input('birthday'),
                        'sexual' => $req->input('sexual'),
                        'phone' => $req->input('phone'),
                        'tenvaccine1' => $req->input('tenvaccine1'),
                        'ngaytiem' => $req->input('ngaytiem'),
                        'lovaccine1' => $req->input('lovaccine1'),
                        'cosotiem' => $req->input('cosotiem'),
                        'tenvaccine2' => $req->input('tenvaccine2'),
                        'ngaytiem2' => $req->input('ngaytiem2'),
                        'lovaccine2' => $req->input('lovaccine2'),
                        'cosotiem2' => $req->input('cosotiem2'),
                        'sothebhyt' => $req->input('sothebhyt'),
                        'masobhxh' => $req->input('masobhxh'),
                    ]
                );
                DB::table('users')->insert([
                    'username' => $req->input('cccd'),
                    'password' => Hash::make($req->input('cccd')),
                    'level' => '0'
                ]);
                DB::commit();
                return redirect('/home');
            } catch (\Throwable $th) {
                //throw $th;
                DB::rollBack();
                $input = "insert khong thanh cong";
                return redirect('/');
            }
        }
    }
}
