@extends('layouts.back')

@section('content')
    <div class="card m-5 shadow p-3 mb-5 bg-white rounded">
        <h5>La corbeille :</h5>
        <div>
            @forelse ($posts as $post)
            <div>
                <h3>{{$post->title}}</h3>
                <img src="../img/{{$post->img}}" alt="" width="400px">
                <p>{{$post->text}}</p>
                <p>{{$post->category->category}}</p>
                <p>{{$post->user->name}}</p>
                <div class="">
                    <form action={{route('recup.post', $post->id)}} method="post">
                        @csrf
                        @method('PUT')
                        <button class="btn btn-success" type="submit">Récupérer</i></button>
                    </form>
                    <form method="post" action="{{route('delete.post.forreal', $post)}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </div>
            </div>
            @empty
                <p>Pas d'article dans la corbeille</p>
            @endforelse
        </div>
    </div>
@endsection