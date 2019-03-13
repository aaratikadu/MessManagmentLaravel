<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;

class HomepageController extends Controller
{

    public function home() {
        return view('admin.home');
    }
    public function requests() {
        $students = Student::where('status', 0 )->get();
        return view('admin.requests', ['students' => $students]);
    }

    public function qrscan() {
        return view('admin.qrScanner');
    }
}
