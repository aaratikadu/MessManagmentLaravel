<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Attendance;

class AttendanceController extends Controller
{
    public function create(Request $req) {
        date_default_timezone_set("Asia/Bangkok");
        $cr_time = date('H-i-s');
        $cr_date = date('Y-m-d');
         
        if (Attendance::where('student_id' , $req->student_id)->where( 'at_date' , $cr_date)->exists() ) {
           $at_data = Attendance::where('student_id' , $req->student_id)->where( 'at_date' , $cr_date)->first();
           if ($at_data['day_limit'] == 2) {
               return back()->with('info', 'Today no more plates available for this student.');
           } else if($at_data['day_limit'] == 1) {
                Attendance::where('student_id' , $req->student_id)->where( 'at_date' , $cr_date)
                ->update(['day_limit' => 2]);
                return back()->with('success', 'this is todays last plate');
           }
        } else {
            $at = new Attendance();
            $at->student_id = $req->student_id;
            $at->at_date = $cr_date;
            $at->at_time = $cr_time;
            $at->save();
            return back()->with('success', '1 Plate ramains for today');
        }
        
    }
}
