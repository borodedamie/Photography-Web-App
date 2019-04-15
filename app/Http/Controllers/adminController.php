<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Banner;
use App\Feedback;
use App\Event;


class adminController extends Controller
{
    public function editBanner(){

        $banner = Banner::where('id', 1)->get();

        return view('admin.adminIndex', [ 'banner' => $banner]);
    }

    public function updateBanner(Request $request){

        DB::table('banners')->where('id', 1)->update([
            'company_name' => $request->company_name,
            'description' => $request->company_motto
        ]);

        return back()->with('success', 'banner updated successfully!');
    }

    // public function newFeedback(){

    // }

    public function feedback(){

        $feedbacks = Feedback::all();

        return view('admin.feedback', [ 'feedbacks' => $feedbacks ]);
    }

    //event functions

    public function event(){

        $events = Event::all();
        return view('admin.event', [ 'events' => $events ]);
    }

    public function newEvent() {
        return view('admin.newEvent');
    }

    public function showEvent($id){

        $event = Event::where('event_id', $id)->first();

        return view('admin.showEvent', ['event' => $event ]);
    }

    public function editEvent($id)
    {
        $event = Event::where('event_id', $id)->first();

        return view('admin.editEvent', [ 'event' => $event ]);
    }

    public function updateEvent($id, Request $request){
        
        $event = Event::where('event_id', $id)->first();
        $name = $request->file_input->getClientOriginalName();

        DB::table('events')->where('event_id', $id)->update([
            'event_title' => $request->event_title,
            'event_image' => $name,
            'event_description' => $request->event_description,
        ]);

        //since i am now getting the original name of the file and not the name from the server
        //i need to find a way to store the images
        //store it in public folder so i have enought time to study laravel storage

        $event->save();

        return back()->with('success', 'event updated successfully!');
        
    }

    public function deleteEvent($id) {
        $event = Event::where('event_id', $id)->first();

        $event->delete();

        //learn how to delete with AJAX!!

        // $sortedEvent = Event::all();

        // $array = ['sortedEvent' => $sortedEvent ];

        // $sorted = Arr::sort($array);

        // return $array;
    }

}
