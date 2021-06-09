@extends('layouts.back')

@section('content')
    @include('layouts.flash')
    <div class="card m-5 shadow p-3 mb-5 bg-white rounded">
        {{--  Update Title Discover --}}
        <h5 class="card-header mb-3">Update Discover</h5>
        <form action="{{route('update.title', $titles[0])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="d-flex flex-column m-3 form-group">
                <label for="description">Title Discover</label>
                <small class="form-text text-muted">Put between () the part of the text you want highlighted</small>
                {{-- <p>Put between () the part of the text you want highlighted</p> --}}
                <input type="text" name="title" value="{{$titles[0]->title}}" class="form-control @error('title') is-invalid @enderror">
                @error('title')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                @enderror
                <button type="submit" class="btn btn-primary mt-2">Update title</button>
            </div>
        </form>
        {{-- Titre gauche et droite --}}
        <div class="d-flex">
            @foreach ($discovers as $discover)
                <div class="d-flex flex-column p-2 m-2 card shadow">
                    @if ($discover->id == 1)
                        <h5>Titre gauche :</h5>
                    @else
                        <h5>Titre droite :</h5>
                    @endif
                    <p>{{$discover->description}}</p>
                    <a href="{{route('edit.discover', $discover->id)}}" class="btn btn-success mb-2">Edit</a>
                </div>
            @endforeach
        </div>
        {{-- Lien vidéo youtube --}}
        <div class="card p-2 m-2 shadow">
            <h5>Lien de la vidéo Youtube :</h5>
            <p>{{$video->link}}</p>
            <a href="{{route('edit.video', $video)}}" class="btn btn-success mb-2">Edit</a>
        </div>
    </div>
@endsection