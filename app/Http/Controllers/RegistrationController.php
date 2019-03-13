<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Image;
use Validator;
class RegistrationController extends Controller
{
    public function index(){
        return view('student.registration');


    }

    public function upload(Request $req){

        $this->validate($req, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20480',
        ]); // This instruction validate the max size (2mb) and its extentions

        $imageName = time().'.'.$req->image->getClientOriginalExtension();

        $req->image->move(public_path('uploads'), $imageName);
        $image_url = url('uploads/'.$imageName);
        $img = new Image();
        $img->image_url = $image_url;
        $img->save();
        return back()
            ->with('success','You have successfully upload image.')
            ->with('image_id',$img->id)
            ->with('image_url',$image_url);
    
    }
    
    public function create(Request $req){
       // return $req->all();
        $student=new Student();
        $student->name = $req->name;
        $student->mobile = $req->mobile;
        $student->prn = $req->prn;
        $student->passwd = $req->password;
        $student->email = $req->email;
        $student->college_name = $req->college;
        $student->branch = $req->branch;
        $student->year = $req->year;
        $student->dob = $req->dob;
        $student->room_no = $req->roomno;
        $student->local_address = $req->taddress;
        $student->par_address = $req->paddress;
        $student->image_id = $req->image_id;
                if ($student->save()) {
                    return back()->with('success','Registration Successfully');
        }
        return back()->with('error','Something went Wrong');

    }
}
