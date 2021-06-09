<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LogoController extends Controller
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
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function show(Logo $logo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function edit(Logo $logo)
    {
        return view('back.general.editLogo', compact('logo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Logo $logo)
    {
        request()->validate([
            "name" => ["required"],
        ]);

        if ($request->file('name') != null) {
            // STORAGE
            // Storage::disk('public')->delete('img/' . $logo->name);
            $request->file('name')->storePublicly('img/', 'public');
            // DB
            $logo->name = $request->file('name')->hashName();
        }
        $logo->save();
        return redirect()->route('back.general')->with('success', 'Vos modifications ont été enregistrées.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logo $logo)
    {
        Storage::disk('public')->delete('img/'.$logo->name);
        $logo->delete();
        return redirect()->route('back.general')->with('success', 'Vos modifications ont été enregistrées.');
    }
    // public function imgResize(Request $request)
    // {
    //     $this->validate($request, [
    //         'name' => 'required',
    //         'imgFile' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
    //     ]);

    //     $image = Storage::from('img/big-logo.png');
    //     $input['imagename'] = time().'.'.$image->extension();

    //     $filePath = public_path('/thumbnails');

    //     $img = Logo::make($image->path());
    //     $img->resize(110, 110, function ($const) {
    //         $const->aspectRatio();
    //     })->save($filePath.'/'.$input['imagename']);

    //     $filePath = public_path('/images');
    //     $image->move($filePath, $input['imagename']);

    //     return back()
    //         ->with('success','Image uploaded')
    //         ->with('fileName',$input['imagename']);
    // }
}
