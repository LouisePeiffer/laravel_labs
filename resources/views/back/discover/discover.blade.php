@extends('layouts.back')

@section('content')
    @include('layouts.flash')
    <div class="card m-5 shadow p-3 mb-5 bg-white rounded">
        <h5 class="card-header mb-3">Update Discover</h5>
        <div class="card p-2 m-2 shadow">
            <h5>Modifier le titre: </h5>
            <p>{{$titles[0]->title}}</p>
            <a href="{{route('edit.title', $titles[0])}}" class="btn btn-success mb-2">Edit</a>
        </div>
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
        <div class="card p-2 m-2 shadow">
            <h5>Lien de la vidéo Youtube :</h5>
            <p>{{$video->link}}</p>
            <a href="{{route('edit.video', $video)}}" class="btn btn-success mb-2">Edit</a>
        </div>
    </div>
@endsection