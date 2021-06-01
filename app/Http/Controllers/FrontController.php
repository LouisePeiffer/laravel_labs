<?php

namespace App\Http\Controllers;

use App\Models\Discover;
use App\Models\Image;
use App\Models\Iphone;
use App\Models\Logo;
use App\Models\Map;
use App\Models\Service;
use App\Models\Video;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //  --------- HOME ---------
    public function index () {
        $video = Video::find(1); 
        $services3 = Service::all()->random(3);
        $services9 = Service::all()->random(9);
        $discovers = Discover::all();
        $images = Image::all();
        $logos = Logo::find(1);
        return view('home', compact('video', 'services3', 'services9', 'discovers', 'images',"logos"));
    }

    // --------- SERVICES ---------
    public function services () {
        // $services9recent = Service::all()->take(9);
        $services9recent = Service::paginate(6)->fragment('servicespaginate');
        $servicesdiscover = Service::all();
        $iphoneLeft = Iphone::where('id', '<', 4)->get();
        $iphoneRight = Iphone::where('id', '>', 3)->get();
        $logos = Logo::find(1);
        return view('front.service', compact('services9recent', 'servicesdiscover', 'iphoneLeft','iphoneRight',"logos"));
    }

    // --------- BLOG ---------
    public function blog () {
        $logos = Logo::find(1);
        return view('front.blog',compact("logos"));
    }

    // --------- CONTACT ---------
    public function contact () {
        $map = Map::find(1);
        $logos = Logo::find(1);
        return view('front.contact', compact('map',"logos"));
    }
}
