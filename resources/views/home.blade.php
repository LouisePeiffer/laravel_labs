@extends('layouts.index')

@section('content')
    <div id="preloder">
        <div class="loader">
            <img src="img/{{$logos->name}}" style="height: 34px" alt="">
            <h2>Loading.....</h2>
        </div>
    </div>
    <!-- Header section -->
    <header class="header-section">
        <div class="logo">
            <img src="img/{{$logos->name}}" style="height: 34px" alt=""><!-- Logo -->
        </div>
        <!-- Navigation -->
        <div class="responsive"><i class="fa fa-bars"></i></div>
        <nav>
            <ul class="menu-list">
                <li class="active"><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('services')}}">Services</a></li>
                <li><a href="{{route('blog')}}">Blog</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
            </ul>
        </nav>
    </header>
    <!-- Header section end -->
    @include('partials.home.intro')
    @include('partials.home.about')
    @include('partials.home.testimonials')
    @include('partials.home.services')
    @include('partials.home.team')
    @include('partials.home.promotion')
    @include('partials.home.contact')
@endsection