@extends('layouts.back')

@section('content')
    <div class="card m-5 shadow p-3 mb-5 bg-white rounded">
        {{-- Membres à valider --}}
        @can('admin')
        <div>
            <h5 class="card-header mb-3">Membres à valider : </h5>
            <div>
                @forelse ($users as $user)
                    <p>{{$user->name}}</p>
                    <img src="../img/{{$user->img}}" alt="" width="60px">
                    <p>{{$user->description}}</p>
                    <form method="POST" action="{{route('validate.user', $user->id)}}">
                        @csrf
                        @method('PUT')
                        <button class="btn btn-success" type="submit">Validate</button>
                    </form>
                    <a href="{{route('edit.role', $user)}}" class="btn btn-primary">Edit</a>
                    <form action="{{route('delete.user', $user)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                @empty
                    <p>Pas de poste à valider</p>
                @endforelse
            </div>
        </div>
        @endcan
        {{-- Postes à valider --}}
        <div>
            <h5 class="card-header mb-3">Postes à valider : </h5>
            <div>
                @forelse ($posts as $post)
                    <p>{{$post->title}}</p>
                    <img src="../img/{{$post->img}}" alt="">
                    <p>{{$post->text}}</p>
                    <form method="POST" action="{{route('validate.post', $post->id)}}">
                        @csrf
                        @method('PUT')
                        <button class="btn btn-success" type="submit">Validate</button>
                    </form>
                @empty
                    <p>Pas de poste à valider</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection