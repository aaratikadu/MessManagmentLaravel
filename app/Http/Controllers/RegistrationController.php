<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class RegistrationController extends Controller
{
    public function index(){
        return view('student.registration');


    }

    public function upload(Request $req){
        $path=$req->file('image')->store('upload');
        return view('student.registration');

    }
    
    public function create(Request $req){
       // return $req->all();
        $feed=new Student();
        $feed->name=$req->name;
        $feed->mobile=$req->mobile;
        $feed->email=$req->email;
        $feed->college_name=$req->college;
        $feed->branch=$req->branch;
        $feed->year=$req->year;
        $feed->dob=$req->dob;
        $feed->room_no=$req->roomno;
        $feed->local_address=$req->taddress;
        $feed->par_address=$req->paddress;
                if ($feed->save()) {
                    return back()->with('success','Registration Successfully');
        }
        return back()->with('error','Something went Wrong');

    }
}
