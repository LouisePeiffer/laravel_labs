<?php

namespace App\Http\Controllers;

use App\Models\Discover;
use App\Models\Image;
use App\Models\Logo;
use App\Models\Service;
use App\Models\Title;
use App\Models\Video;
use Illuminate\Http\Request;

class BackController extends Controller
{
    public function dashboard () {
        return view('back.dashboard');
    }
    // public function profil () {
    //     return view('back.profil.editProfil');
    // }
    public function general () {
        $logo = Logo::find(1);
        $images = Image::all();
        return view('back.general.general',compact('logo','images'));
    }
    public function discover () {
        $discovers = Discover::all();
        $titles = Title::all();
        $video = Video::find(1);
        return view('back.discover.discover',compact('discovers','titles','video'));
    }
    public function service () {
        $services = Service::all();
        $titles = Title::all();
        return view('back.service.service', compact('services', 'titles'));
    }
    public function blog () {
        return view('back.blog.blog');
    }
    // public function backblade () {
    //     $logo = Logo::all();
    //     return view('layouts.back', compact('logo'));
    // }
}
