<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
//use Auth;
class FeedbackController extends Controller
{
    public function index() {
        return view('student.feedback');
    }

    public function create( Request $req ) {
        //return $req->all();
        $feed = new Feedback();
        //$user_id = Auth::User()->id;
        $feed->user_id = 1;
        $feed->feedback = $req->feedback;

        
        if ($feed->save()) {
            return back()->with('success','Feedback successfully submited');
        } 

        return back()->with('error','Somthing went wrong');
    }
}
