<?php

namespace App\Http\Controllers;

use App\Mail\ContactSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function store(Request $request) {
        Mail::to('labs@labs.com')->send(new ContactSender($request));
        return redirect()->back();
    }
}
