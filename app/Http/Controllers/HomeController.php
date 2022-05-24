<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){

        $sliderdata = Job::limit(4)->get();
        $homejoblisting = Job::limit(6)->get();

        return view('home.index',[
            'sliderdata' => $sliderdata,
            'homejoblisting' => $homejoblisting
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
