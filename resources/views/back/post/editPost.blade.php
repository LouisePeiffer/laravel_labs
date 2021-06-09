@extends('layouts.back')

@section('content')
    <div class="card m-5 shadow p-3 mb-5 bg-white rounded">
        <h5 class="card-header">Update Post</h5>
        <form action="{{route('update.post', $post)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            {{-- Title --}}
            <div class="d-flex flex-column m-3 form-group">
                <label for="title">Title</label>
                <input type="text" name="title" value="{{$post->title}}" class="form-control @error('title') is-invalid @enderror">
                @error('title')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                @enderror
            </div>
            {{-- Text --}}
            <div class="d-flex flex-column m-3 form-group">
                <label for="text">Text</label>
                <textarea name="text" id="text" cols="30" rows="10" class="form-control @error('text') is-invalid @enderror">{{$post->text}}</textarea>
                @error('text')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                @enderror
            </div>
            {{-- Image --}}
            <div class="d-flex flex-column m-3 form-group">
                <label for="img">Image</label>
                <input type="file" name="img" value="{{$post->img}}" class="form-control @error('img') is-invalid @enderror">
                @error('img')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                @enderror
            </div>
            {{-- Catégorie --}}
            <div class="d-flex flex-column m-3 form-group">
                <label for="category_id">Catégorie</label>
                <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->category}}</option>
                    @endforeach
                </select>
                @error('category_id')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                @enderror
            </div>
            {{-- Tags --}}
            <div class="d-flex flex-column m-3 form-group">
                <label for="taglist[]" value="{{$tags}}">Tags</label>
                <div>
                    @foreach ($tags as $tag)
                        <div>
                            <input type="checkbox" name="taglist[]" value="{{$tag->id}}"
                            @foreach ($tagposts as $tagpost)
                                @if ($tagpost->tag_id == $tag->id)
                                    checked
                                @endif
                            @endforeach
                            >
                            <label for="taglist[]">{{$tag->tag}}</label>
                        </div>
                    @endforeach
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Update service</button>
        </form>
    </div>
@endsection