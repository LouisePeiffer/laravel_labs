@extends('layouts.back')

@section('content')
    @include('layouts.flash')
    <div class="card m-5 shadow p-3 mb-5 bg-white rounded">
        @if (Auth::user()->genre_id == 1)
            <h5 class="card-header"> Bienvenue {{Auth::user()->firstname}}, vous êtes connectée!</h5>
        @elseif (Auth::user()->genre_id == 2)
            <h5 class="card-header"> Bienvenue {{Auth::user()->firstname}}, vous êtes connecté!</h5>
        @else
            <h5 class="card-header"> Bienvenue {{Auth::user()->firstname}}, vous êtes connecté.e!</h5>
        @endif
        <div class="card-body d-flex flex-column align-items-center">
            <img src="../img/{{Auth::user()->img}}" alt="" width="150px" class="rounded mb-3 shadow">
            <h5 class="card-title">Name : {{Auth::user()->firstname}} {{Auth::user()->name}}</h5>
            <p class="card-text">Age : {{Auth::user()->age}} ans</p>
            <p class="card-text">Genre : {{Auth::user()->genre->name}}</p>
            <p class="card-text">Job : {{Auth::user()->job->job}}</p>
            <p class="card-text">Role : {{Auth::user()->role->role}}</p>
            <a href="{{route('edit.user', Auth::id())}}" class="btn btn-primary">Update Profile</a>
        </div>
    </div>
@endsection