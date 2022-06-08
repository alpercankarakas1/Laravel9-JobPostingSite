<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public static function maincategorylist(){
        return Category::where('parent_id','=',0)->with('children')->get();
    }

    //
    public function index(){

        $sliderdata = Job::limit(4)->get();
        $homejoblisting = Job::limit(6)->get();
        $setting = Setting::first();

        return view('home.index',[
            'setting' => $setting,
            'sliderdata' => $sliderdata,
            'homejoblisting' => $homejoblisting
        ]);
    }

    public function about(){

        $setting = Setting::first();

        return view('home.about',[
            'setting' => $setting
        ]);
    }

    public function contact(){

        $setting = Setting::first();

        return view('home.contact',[
            'setting' => $setting
        ]);
    }

    public function references(){

        $setting = Setting::first();

        return view('home.references',[
            'setting' => $setting
        ]);
    }

    public function job($id){

        $data = Job::find($id);
        $images = DB::table('images')->where('job_id',$id)->get();
        return view('home.job',[
            'data' => $data,
            'images'=>$images
        ]);
    }

    public function categoryjobs($id){

        echo 'category jobs';
        exit();
        $data = Job::find($id);
        $images = DB::table('images')->where('job_id',$id)->get();
        return view('home.job',[
            'data' => $data,
            'images'=>$images
        ]);
    }

    public function test(){
        return view('home.test');
    }

    public function param($id,$number){
        //echo "Parameter 1: ", $id;
        //echo "<br>Parameter 2: ",$number;
        //echo "<br>Sum Parameters: ", $id + $number;
        return view('home.test2',
        [
            'id' => $id,
            'number'=>$number
        ]);
    }

    public function save(Request $request){
        //echo "Save Function";
        //echo "<br>First Name :",$_REQUEST["fname"];
        //echo "<br>Last Name :",$_REQUEST["lname"];
        return view('home.test3',
        [
            'fname' => $_REQUEST["fname"],
            'lname' => $_REQUEST['lname']
        ]);
    }
}
