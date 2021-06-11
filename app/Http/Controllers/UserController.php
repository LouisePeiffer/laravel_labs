<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Job;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit (User $user) {
        $roles = Role::all();
        $jobs = Job::all();
        $genres = Genre::all();
        return view('back.profil.editProfil', compact('roles', 'jobs','genres', 'user'));
    }
    public function update (Request $request, User $user) {
        request()->validate([
            "firstname" =>["required"],
            "name" =>["required"],
            "age" =>["required"],
            // "img" =>["required"],
            // "role_id" =>["required"],
            "job_id" =>["required"],
            "genre_id" =>["required"],
        ]);

        $request->file('img')->storePublicly('img/', 'public');
        $user->img = $request->file('img')->hashName();

        $user->firstname = $request->firstname;
        $user->name = $request->name;
        $user->age = $request->age;
        // $user->img = $request->img;
        $user->role_id = 4;
        $user->job_id = $request->job_id;
        $user->genre_id = $request->genre_id;
        $user->description = $request->description;
        // $user->testimonial_id = "";
        $user->save();
        return redirect()->route('back.dashboard')->with('success', 'Modifications enregistrées');
    }
    public function destroy (User $user) {
        $this->authorize('admin');
        $user->delete();
        return redirect()->back()->with('success', 'Modifications enregistrées');
    }


    //  PAR l'ADMIN
    public function editRole (User $user) {
        $roles = Role::all();
        $jobs = Job::all();
        $genres = Genre::all();
        return view('back.validate.editRoleUser', compact('roles', 'jobs','genres', 'user'));
    }
    public function updateRole (Request $request, User $user) {
        request()->validate([
            "firstname" =>["required"],
            "name" =>["required"],
            "age" =>["required"],
            // "img" =>["required"],
            "role_id" =>["required"],
            "job_id" =>["required"],
            "genre_id" =>["required"],
        ]);

        $request->file('img')->storePublicly('img/', 'public');
        $user->img = $request->file('img')->hashName();

        $user->firstname = $request->firstname;
        $user->name = $request->name;
        $user->age = $request->age;
        // $user->img = $request->img;
        $user->role_id = $request->role_id;
        $user->job_id = $request->job_id;
        $user->genre_id = $request->genre_id;
        $user->description = $request->description;
        // $user->testimonial_id = "";
        $user->save();
        return redirect()->back()->with('success', 'Données modifiées');
    }
}
