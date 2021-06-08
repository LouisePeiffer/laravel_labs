<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;

class BackController extends Controller
{
    public function dashboard () {
        return view('back.dashboard');
    }
    public function profil () {
        return view('back.profil');
    }
    public function general () {
        $logo = Logo::find(1);
        return view('back.general',compact('logo'));
    }
    public function service () {
        return view('back.service');
    }
    public function blog () {
        return view('back.blog');
    }
}
