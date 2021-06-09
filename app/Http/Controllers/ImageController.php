<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
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
        return view('back.general.addImage');
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
            "name" => ["required"],
        ]);
        
        $image = new Image();
        // Storage via input File
        $request->file('name')->storePublicly('img/', 'public');

        // DB
        // $portfolio->image = $request->image;
        $image->name = $request->file('name')->hashName();
        $image->save();
        return redirect()->route('back.general')->with('success', 'Vos modifications ont été enregistrées.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        return view('back.general.editImage', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        request()->validate([
            "name" => ["required"],
        ]);

        if ($request->file('name') != null) {
            // STORAGE
            // Storage::disk('public')->delete('img/' . $image->name);
            $request->file('name')->storePublicly('img/', 'public');
            // DB
            $image->name = $request->file('name')->hashName();
        }
        $image->save();
        return redirect()->route('back.general')->with('success', 'Vos modifications ont été enregistrées.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        Storage::disk('public')->delete('img/'.$image->name);
        $image->delete();
        return redirect()->route('back.general')->with('success', 'Vos modifications ont été enregistrées.');
    }
}
