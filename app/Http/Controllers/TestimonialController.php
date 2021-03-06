<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
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
        $testimonials = Testimonial::all();
        return view('back.testimonial.addTestimonial', compact('testimonials'));
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
            "firstname" =>["required"],
            "name" =>["required"],
            "text" =>["required","min:100","max:200"],
            "job" =>["required"],
            "img" =>["required"],
        ]);

        $testimonial = new Testimonial();
        
        // Storage via input File
        $request->file('img')->storePublicly('img/', 'public');
        
        $testimonial->firstname = $request->firstname;
        $testimonial->name = $request->name;
        $testimonial->text = $request->text;
        $testimonial->job = $request->job;
        $testimonial->img = $request->file('img')->hashName();
        $testimonial->save();

        return redirect()->route('back.testimonial')->with('success', 'Services enregistrés');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        request()->validate([
            "firstname" =>["required"],
            "name" =>["required"],
            "text" =>["required"],
            "job" =>["required"],
            "img" =>["required"],
        ]);

        $testimonial->firstname = $request->firstname;
        $testimonial->name = $request->name;
        $testimonial->text = $request->text;
        $testimonial->job = $request->job;
        $testimonial->img = $request->img;
        $testimonial->save();

        return redirect()->with('success', 'Services enregistrés');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->back()->with('success', 'Modifications enregistrées');
    }
}
