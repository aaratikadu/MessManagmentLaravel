<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;
use App\User;

class RequestController extends Controller
{
    public function delete($studentId) {
        Student::where('id', $studentId)->delete();
        return back()->with('success','Record Deleted');
    }

    public function approve($studentId) {
        Student::where('id', $studentId)->update(['status' => 1]);
        $student = Student::where('id', $studentId)->first();
        
        $user = new User();
        $user->name = $student['name'];
        $user->email = $student['email'];
        $user->password = bcrypt($student['passwd']);
        $user->student_id = $student['id'];
        $user->save();

        Student::where('id', $studentId)->update(['passwd' => '']);
        return back()->with('success','Student Approved');
    }
}
