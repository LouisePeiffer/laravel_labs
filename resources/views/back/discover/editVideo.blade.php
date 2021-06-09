@extends('layouts.back')

@section('content')
    <div class="card m-5 shadow p-3 mb-5 bg-white rounded">
        <h5 class="card-header">Update Video</h5>
        <form action="{{route('update.video', $video)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="d-flex flex-column m-3">
                <label for="description">Video link</label>
                <input type="text" name="link" value="{{$video->link}}" class="form-control @error('link') is-invalid @enderror">
                @error('link')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                @enderror
                <button type="submit" class="btn btn-primary mt-2">Update video link</button>
            </div>
        </form>
    </div>
@endsection