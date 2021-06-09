<?php

namespace App\Http\Controllers;

use App\Models\Discover;
use App\Models\Title;
use Illuminate\Http\Request;

class DiscoverController extends Controller
{
    // EDIT / UPDATE
    public function edit(Discover $discover) {
        $title = Title::find(1);
        return view('back.discover.editDiscover', compact('discover', 'title'));
    }
    public function update(Request $request, Discover $discover) {
        request()->validate([
            "description"=>["required"],
        ]);

        $discover->description = $request->description;
        $discover->save();
        return redirect()->route('back.discover')->with('success', 'Modifications enregistrées');
    }
    // // DESTROY
    // public function destroy(Discover $discover) {
    //     $discover->delete();
    //     return redirect()->with('success', 'Modifications enregistrées');
    // }
}
