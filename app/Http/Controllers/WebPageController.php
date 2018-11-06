<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class WebPageController extends Controller
{
    public function index()
    {
        return view("pages.index");
    }
    public function home()
    {
        $title = "Home Page";
        $description = "This is our Home Web Page";
        // return view("pages.home",compact('title'));
        return view("pages.home")->with('title',$title);
    }
    public function aboutus()
    {
        $title = "About Us";
        $description = "This is our Home Web Page";
        // return view("pages.home",compact('title'));
        return view("pages.aboutus")->with('title',$title);    }
    public function contactus()
    {
        $title = "Contact us";
        $description = "This is our Home Web Page";
        // return view("pages.home",compact('title'));
        return view("pages.contactus")->with('title',$title);    }
    public function ourteam()
    {
        $users = User::all();
        $myarray= array();
        $i = 0;
        foreach($users as $user)
        {
            $myarray[$i] = $user['name'];
            $i++;
        }
        $data = array(
            'title' => "Our Contributers",
            'description' => "People who has been contributing till now",
            'team' => $myarray
        );

        return view("pages.ourteam")->with('data',$data);    }
}