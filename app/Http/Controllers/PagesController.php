<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('template.home');
    }

    public function about(){
        return view('template.partials.about');
    }

    public function portfolio(){
        return view('template.partials.portfolio');
    }

    public function testimonials(){
        return view('template.partials.testimonials');
    }

    public function contact(){
        return view('template.partials.contact');
    }

    // public function welcome(){
    //     $course = "Laravel Course";
    //     $title = "Beginners";
    //     // return view('welcome');

    //     //* How to pass single variable
    //     return view('welcome',compact('course'));
    //     return view('welcome')-> with('title', $title);
    // }

    public function welcome(){
        $data = array(
            'framework' => "Laravel",
            'title' =>"Beginners",
            'architecture'=> ['Model','View','Controller']
        );

        return view('welcome')-> with($data);
    }
}
