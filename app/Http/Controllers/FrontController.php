<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index () {
        return view('home');
    }
    public function services () {
        return view('front.service');
    }
    public function blog () {
        return view('front.blog');
    }
    public function contact () {
        return view('front.contact');
    }
}
