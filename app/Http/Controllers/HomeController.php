<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Person;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $req)
    {
        $session = $req->session();
        // $cccd = null;
        //lấy ra 15 bản ghi đầu tiên
        // $level = '1';
        if ($session->has('inforuser.username')) {
            $level = $req->session()->get('inforuser.level');
            $cccd = $session->get('inforuser.username');
            //check ton tai user trong DB 
            $note = Person::select('note', 'fullname')
                ->where('CCCD', $cccd)
                ->get();
            if ($note->count() != 0) {
                //neu ton tai se lay thong tin 
                //check user la admin 
                if ($level == '1') {
                    foreach ($note as $n) {
                        //get thong tin rang buoc
                        $note = $n->note;
                        //Lay full name de hien thi len man hinh 
                        $fullname = $n->fullname;
                    }
                    $person = Person::paginate(15);
                    return view('pages.home', ['person' => $person, 'cccd' => $cccd, 'flagCheck' => '', 'message' => null, 'fullname' => $fullname]);
                } else {
                    //Khong phai la admin se thuc hien lay thong tin rang buoc cua ho gia ginh
                    foreach ($note as $n) {
                        //get thong tin rang buoc
                        $note = $n->note;
                        //Lay full name de hien thi len man hinh 
                        $fullname = $n->fullname;
                    }
                    $person = Person::where('note', $note)
                        ->get();
                    return view('pages.home', ['person' => $person, 'cccd' => $cccd, 'flagCheck' => '', 'message' => null, 'fullname' => $fullname]);
                }
            }
            //neu khong ton tai chuyen ve man hinh login 
            //Message: 
            else {
                return redirect('/');
            }
        }
        // get all 
        // $person = Person::all();
        // $person = Person::paginate(15)->fragment('person');
        // $person = Person::where('note', '1')->get();
        //return view('home', ['person' => $person, 'cccd' => $cccd, 'flagCheck' => '', 'message' => null,'fullname'=>$fullname]);
    }
}
