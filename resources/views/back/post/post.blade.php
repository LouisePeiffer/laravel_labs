@extends('layouts.back')

@section('content')
    @include('layouts.flash')
    <div class="card m-5 shadow p-3 mb-5 bg-white rounded">
        <div class="card m-5">
            <h5 class="card-header mb-3">Les articles : </h5>
            @foreach ($posts as $post)
                <div class="card p-3 m-3 shadow">
                    <h3>{{$post->title}}</h3>
                    <img src="../img/{{$post->img}}" alt="" width="400px">
                    <p>{{$post->text}}</p>
                    <p>{{$post->category->category}}</p>
                    <p>{{$post->user->name}}</p>
                    <div class="d-flex">
                        <a href="{{route('edit.post', $post)}}" class="btn btn-success">Edit</a>
                        <form method="POST" action="{{route('corbeille.post', $post)}}" >
                            @csrf
                            @method('PUT')
                            <button class="btn btn-warning" type="submit">Corbeille</button>
                        </form>
                    </div>
                </div>
            @endforeach
            <a href="{{route('create.post')}}" class="btn btn-primary m-3">Add Post</a>
        </div>
        <div class="card m-5">
            <h5 class="card-header mb-3">Les catégories : </h5>
            <div class="card p-3 m-3 shadow">
                @foreach ($categories as $category)
                    <div class="card m-3">
                        {{$category->category}}
                        <form method="POST" action="{{route('delete.category', $category)}}" >
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </div>
                @endforeach
                <a href="{{route('create.category')}}" class="btn btn-primary">Add Category</a>
            </div>
        </div>
        <div class="card m-5">
            <h5 class="card-header mb-3">Les tags : </h5>
            <div class="card p-3 m-3 shadow">
                @foreach ($tags as $tag)
                    <div class="card m-3">
                        {{$tag->tag}}
                        <form method="POST" action="{{route('delete.tag', $tag)}}" >
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </div>
                @endforeach
                <a href="{{route('create.tag')}}" class="btn btn-primary">Add Tag</a>
            </div>
        </div>
    </div>
@endsection