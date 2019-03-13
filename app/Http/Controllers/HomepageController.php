<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode; 
use Auth;
use App\Student;
use App\Image;

class HomepageController extends Controller
{
    public function homepage() {
        $student = Student::where('id', Auth::user()->student_id )->first();
        $img = Image::where('id', $student['image_id'])->first();
        $student['image_url'] = $img['image_url'];
        return view('student.home',['data' => $student]);
    }

    
}
