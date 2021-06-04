@extends('layouts.index')

@section('content')
    <div id="preloder">
        <div class="loader">
            <img src="/img/{{$logos->name}}" style="height: 34px" alt="">
            <h2>Loading.....</h2>
        </div>
    </div>
    @include('partials.blogpost.headerblogpost')
    @include('partials.blogpost.pageheader')
    @include('partials.blogpost.blogpost')
@endsection