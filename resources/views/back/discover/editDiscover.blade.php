@extends('layouts.back')

@section('content')
    <div class="card m-5 shadow p-3 mb-5 bg-white rounded">
        <h5 class="card-header">Update Discover</h5>
        <form action="{{route('update.discover', $discover)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            {{-- Texte discover --}}
            <div class="d-flex flex-column m-3">
                <label for="description">Text {{$discover->id}}</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">{{$discover->description}}</textarea>
                @error('description')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                @enderror
                <button type="submit" class="btn btn-primary mt-2">Update text</button>
            </div>
        </form>
    </div>
@endsection