<?php

namespace App\Http\Controllers;

use App\Models\Discover;
use Illuminate\Http\Request;

class DiscoverController extends Controller
{
    // EDIT / UPDATE
    public function edit() {
        return view();
    }
    public function update(Request $request, Discover $discover) {
        request()->validate([
            "description"=>["required"],
        ]);

        $discover->description = $request->description;
        $discover->save();
        return redirect()->with('success', 'Modifications enregistrées');
    }
    // // DESTROY
    // public function destroy(Discover $discover) {
    //     $discover->delete();
    //     return redirect()->with('success', 'Modifications enregistrées');
    // }
}
