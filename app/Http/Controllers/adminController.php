<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Banner;
use App\Feedback;
use App\Event;
use App\Service;
use Calendar;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class adminController extends Controller
{
    public function editBanner(){

        $banner = Banner::where('id', 1)->get();

        return view('admin.adminIndex', [ 'banner' => $banner]);
    }

    public function updateBanner(Request $request){

        DB::table('banners')->where('id', 1)->update([
            'company_name' => $request->company_name,
            'description' => $request->motto,
            'address' => $request->address,
            'city' => $request->city,
            'email' => $request->email_address,
            'phone_number' => $request->phone_number,
            'opening_closing_time' => $request->opening_closing_time
        ]);

        return back()->with('success', 'profile updated successfully!');
    }

    //feedback
    public function feedback(){

        $feedbacks = Feedback::all();

        return view('admin.feedback', [ 'feedbacks' => $feedbacks ]);
    }

    public function destroyFeedback($id)
    {
        Feedback::find($id)->delete($id);

        return response()->json([ 'success' => 'feedback deleted successfully!']);
    }


    //event functions

    public function calendar(){

        $events = Event::get();
        //return $events;
        
    	$event_list = [];
    	foreach ($events as $key => $event) {
    		$event_list[] = Calendar::event(
                $event->event_title,
                true,
                new \DateTime($event->start_date),
                new \DateTime($event->end_date.' +1 day')
            );
        }
        
        //return $event_list;
    	$calendar_details = Calendar::addEvents($event_list); 
 
        return view('admin.calendar', ['calendar_details' => $calendar_details] );
    }

    public function newEvent() {
        
        return view('admin.newEvent');
    }

    public function storeEvent(Request $request){
        
        $event = new Event();

        $event->event_title = $request->event_title;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;

        $event->save();

        return back()->with('success', 'Event added to calendar successfully!');
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

    public function updateService($id, Request $request){
        
        $service = Service::where('id', $id)->first();
        $imageName = $request->service_image->getClientOriginalName();

        // dd($imageName);

        DB::table('services')->where('id', $id)->update([
            'service_title' => $request->service_title,
            'service_description' => $request->service_description,
            'service_image' => $imageName,
        ]);

        $service->save();
        
        return back()->with('success', $request->service_title. ' '. 'added successfully!');
    }

    public function showService($id) {
        $service = Service::where('id', $id)->first();

        return view('admin.showService', [ 'service' => $service ]);
    }

}
