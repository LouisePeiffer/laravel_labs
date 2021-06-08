@extends('layouts.back')

@section('content')
    <div>
        <h2>Logo :</h2>
        <img src="../img/{{$logo->name}}" alt="" width="200px">
        <form action="{{}}">
            <input type="file">
        </form>
    </div>
@endsection