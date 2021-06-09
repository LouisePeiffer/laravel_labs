@extends('layouts.back')

@section('content')
    <div class="card m-5 shadow p-3 mb-5 bg-white rounded">
        <h5 class="card-header">Update Title Discover</h5>
        <form action="{{route('update.title', $title)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="d-flex flex-column m-3 form-group">
                <label for="description">Title Discover</label>
                <small class="form-text text-muted">Put between () the part of the text you want highlighted</small>
                {{-- <p>Put between () the part of the text you want highlighted</p> --}}
                <input type="text" name="title" value="{{$title->title}}" class="form-control @error('title') is-invalid @enderror">
                @error('title')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                @enderror
                <button type="submit" class="btn btn-primary mt-2">Update title</button>
            </div>
        </form>
    </div>
@endsection