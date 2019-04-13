<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Banner;
use App\Feedback;


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

    public function event(){
        
    }

}
