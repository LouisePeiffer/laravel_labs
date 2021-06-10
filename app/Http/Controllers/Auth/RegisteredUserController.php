<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeSender;
use App\Models\Genre;
use App\Models\Job;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $genres = Genre::all();
        $jobs = Job::all();
        return view('auth.register', compact('genres', 'jobs'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'age' => 'required',
            'genre_id' => ["required"],
            'job_id' => ["required"],
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // $user = User::create([
        //     'firstname' => $request->firstname,
        //     'name' => $request->name,
        //     'age' => $request->age,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        //     'img' => 'anonyme.jpg',
        //     'job_id' => 8,
        //     'role_id' => 4,
        //     'genre' => 3,
        //     'img' => $request->img,
        // ]);

        $user = new User();

        $user->img = "anonyme.jpg";

        $user->firstname = $request->firstname;
        $user->name = $request->name;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->genre_id = $request->genre_id;
        $user->role_id = 4;
        $user->job_id = $request->job_id;
        $user->save();

        event(new Registered($user));

        Mail::to($request->email)->send(new WelcomeSender($request));
        
        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
