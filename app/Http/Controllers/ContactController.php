<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            "text" =>["required"],
            "titleAddress" =>["required"],
            "postcode" =>["required"],
            "text" =>["required"],
            "email" =>["required"],

        ]);

        $contact = new Contact();
        $contact->text = $request->text;
        $contact->titleAddress = $request->titleAddress;
        $contact->postcode = $request->postcode;
        $contact->telephone = $request->telephone;
        $contact->email = $request->email;

        $contact->save();

        return redirect()->with('success', 'Modifiactions enregistrées');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        request()->validate([
            "text" =>["required"],
            "titleAddress" =>["required"],
            "postcode" =>["required"],
            "text" =>["required"],
            "email" =>["required"],

        ]);

        $contact->text = $request->text;
        $contact->titleAddress = $request->titleAddress;
        $contact->postcode = $request->postcode;
        $contact->telephone = $request->telephone;
        $contact->email = $request->email;

        $contact->save();

        return redirect()->with('success', 'Modifiactions enregistrées');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->with('success', 'Modifiactions enregistrées');
    }
}
