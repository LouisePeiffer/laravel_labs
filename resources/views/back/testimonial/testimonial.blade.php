@extends('layouts.back')

@section('content')
    @include('layouts.flash')
    <div class="card m-5 shadow p-3 mb-5 bg-white rounded">
        <h5 class="card-header mb-3">Les témoignages des clients :</h5>
        {{-- EDIT TITLE CLIENT --}}
        <div class="card m-5 shadow p-3 mb-5 bg-white rounded">
            <h5 for="description">Title Client :</h5>
            <form action="{{route('update.title', $titles[1])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="d-flex flex-column m-3 form-group">
                    <small class="form-text text-muted">Put between () the part of the text you want highlighted</small>
                    <input type="text" name="title" value="{{$titles[1]->title}}" class="form-control @error('title') is-invalid @enderror">
                    @error('title')
                            <span class="invalid-feedback">
                                <strong>{{$message}}</strong>
                            </span>
                    @enderror
                    <button type="submit" class="btn btn-primary mt-2">Update title</button>
                </div>
            </form>
        </div>
        @foreach ($testimonials as $testimonial)
            <div class="card shadow p-3 m-3">
                <img src="../img/{{$testimonial->img}}" alt="" width="60px">
                <br>
                <p>Firstname : {{$testimonial->firstname}}</p>
                <p>Name : {{$testimonial->name}}</p>
                <p>Avis : {{$testimonial->text}}</p>
                <p>Job : {{$testimonial->job}}</p>
                <form method="POST" action="{{route('delete.testimonial', $testimonial)}}" >
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </div>
        @endforeach
        <a href="{{route('create.testimonial')}}" class="btn btn-primary m-3">Add testimonial</a>
    </div>
@endsection