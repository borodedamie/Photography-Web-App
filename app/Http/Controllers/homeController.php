<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Banner;
use App\Service;
use App\Feedback;
use App\Instagram;
use App\Event;


class homeController extends Controller
{
    public function index(){

        $banner = Banner::where('id', 1)->get();
        $feedbacks = DB::table('feedbacks')->where('feedback_id', 1)->get();
        $events = Event::where('event_id', 1)->get();

        return view('home', ['banner' => $banner,
            'events' => $events,
            'feedbacks' => $feedbacks,
        ]);
    }

    public function storeContact(Request $request) {

        DB::table('contacts')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);

        return back();
    }
}
