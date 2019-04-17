<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Banner;
use App\Feedback;
use App\Event;
use App\Service;


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

    //feedback
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

    public function storeEvent(Request $request){
        // dd($request->all());
        $imageName = $request->event_image->getClientOriginalName();

        DB::table('events')->insert([
            'event_title' => $request->event_title,
            'event_description' => $request->event_description,
            'event_image' => $imageName
        ]);
        
        return back()->with('success', 'Event created successfully!');
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
    }

    //service
    public function services(){
        $services = Service::all();

        return view('admin.service', [ 'services' => $services ]);
    }

    public function editService($id) {

        $service = Service::where('id', $id)->first();

        return view('admin.editService', [ 'service' => $service ]);
    }

    // public function storeService(Request $request){

    // }

    public function showService($id) {
        $service = Service::where('id', $id)->first();

        return view('admin.showService', [ 'service' => $service ]);
    }

}
