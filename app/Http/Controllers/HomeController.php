<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Person;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $req)
    {
        // $cccd = $req->session()->get('inforuser.username');
        $cccd = null;
        //lấy ra 15 bản ghi đầu tiên
        // $level = $req->session()->get('inforuser.level');
        $level = '1';
        if ($level == '1') {
            $person = Person::paginate(5);
            $cccd = $req->session()->get('inforuser.username');
            //lay gia tri cua cac thanh vien trong gia dinh
            $note = Person::select('note','fullname')
                ->where('CCCD', $cccd)
                ->get();
            foreach ($note as $n) {
                $note = $n->note;
                $fullname = $n->fullname;
            }
        } else {
            $cccd = $req->session()->get('inforuser.username');
            //lay gia tri cua cac thanh vien trong gia dinh
            $note = Person::select('note','fullname')
                ->where('CCCD', $cccd)
                ->get();
            foreach ($note as $n) {
                $note = $n->note;
                $fullname = $n->fullname;
            }
            $person = Person::where('note', $note)
                ->get();
            // $fullname = $person->fullname;
        }
        // get all 
        // $person = Person::all();
        // $person = Person::paginate(15)->fragment('person');
        // $person = Person::where('note', '1')->get();
        //return view('home', ['person' => $person, 'cccd' => $cccd, 'flagCheck' => '', 'message' => null,'fullname'=>$fullname]);
        return view('home', ['person' => $person, 'cccd' => $cccd, 'flagCheck' => '', 'message' => null,'fullname'=>null]);
    }
}
