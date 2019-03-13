<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Image;

class AjaxController extends Controller
{
    public function getStudentByEmail(Request $req) {
        $student = Student::where('email', $req->email)->first();
        $img = Image::where('id', $student['image_id'])->first();
        $student['image_url'] = $img['image_url'];
        return response()->json($student);
    }
}
