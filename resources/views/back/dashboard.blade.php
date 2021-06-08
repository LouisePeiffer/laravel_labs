@extends('layouts.back')

@section('content')
    <div>
        Vous êtes connecté! {{Auth::user()->firstname}}
    </div>
@endsection