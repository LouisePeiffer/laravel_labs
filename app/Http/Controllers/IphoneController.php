<?php

namespace App\Http\Controllers;

use App\Models\Iphone;
use Illuminate\Http\Request;

class IphoneController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Iphone  $iphone
     * @return \Illuminate\Http\Response
     */
    public function show(Iphone $iphone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Iphone  $iphone
     * @return \Illuminate\Http\Response
     */
    public function edit(Iphone $iphone)
    {
        return view();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Iphone  $iphone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Iphone $iphone)
    {
        request()->validate([
            "icon" =>["required"],
            "title" =>["required"],
            "text" =>["required"],
        ]);

        $iphone->icon = $request->icon;
        $iphone->title = $request->title;
        $iphone->text = $request->text;

        $iphone->save();

        return redirect()->with('success', 'Modifications enregistrées');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Iphone  $iphone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Iphone $iphone)
    {
        $iphone->delete();
        return redirect()->with('success', 'Modifications enregistrées');
    }
}
