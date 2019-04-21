<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Banner;
use App\Service;
use App\Feedback;
use App\Instagram;
use App\Event;
use App\Contact;


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
        
        $contact = new Contact();

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $contact->save();

        return response()->json(['success' => 'data added successfully!']);
    }
}
