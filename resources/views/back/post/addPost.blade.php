@extends('layouts.back')

@section('content')
    @include('layouts.flash')
    <div class="card m-5 shadow p-3 mb-5 bg-white rounded">
        <form action="{{route('store.post')}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- Title --}}
            <div class="d-flex flex-column m-3 form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror">
                @error('title')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                @enderror
            </div>
            {{-- Text --}}
            <div class="d-flex flex-column m-3 form-group">
                <label for="text">Text</label>
                <input type="text" name="text" class="form-control @error('text') is-invalid @enderror">
                @error('text')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                @enderror
            </div>
            {{-- Img --}}
            <div class="d-flex flex-column m-3 form-group">
                <label for="img">Img</label>
                <input type="file" name="img" class="form-control @error('img') is-invalid @enderror">
                @error('img')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                @enderror
            </div>
            {{-- Category --}}
            <div class="d-flex flex-column m-3 form-group">
                <label for="category_id">Category</label>
                <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                        <option value="">---- Choose a category ----</option>
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
                            <input type="checkbox" name="taglist[]" value="{{$tag->id}}">
                            <label for="taglist[]">{{$tag->tag}}</label>
                        </div>
                    @endforeach
                </div>
            </div>
        <button class="btn btn-primary" type="submit">Add post</button>
        </form>
    </div>
@endsection