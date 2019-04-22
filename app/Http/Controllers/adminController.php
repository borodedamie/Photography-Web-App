<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Banner;
use App\Feedback;
use App\Event;
use App\Service;
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

    public function event(){

        $events = Event::all();
        return view('admin.event', [ 'events' => $events ]);
    }

    public function newEvent() {
        return view('admin.newEvent');
    }

    public function storeEvent(Request $request){
        // dd($request->all());
        $image = $request->file('event_image');
        $imageName = $request->event_image->getClientOriginalName();
        $extension = $request->event_image->getClientOriginalExtension();

        Storage::disk('local')->put($imageName, File::get($image));

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
