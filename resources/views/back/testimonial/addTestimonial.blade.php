@extends('layouts.back')

@section('content')
    <div class="card m-5 shadow p-3 mb-5 bg-white rounded">
        <h5 class="card-header">Add Testimonial</h5>
        <form action="{{route('store.testimonial')}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- Firstname --}}
            <div class="d-flex flex-column m-3 form-group">
                <label for="firstname">Firstname</label>
                <input type="text" name="firstname" value="" class="form-control @error('firstname') is-invalid @enderror">
                @error('firstname')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                @enderror
            </div>
            {{-- Name --}}
            <div class="d-flex flex-column m-3 form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="" class="form-control @error('name') is-invalid @enderror">
                @error('name')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                @enderror
            </div>
            {{-- Avis --}}
            <div class="d-flex flex-column m-3 form-group">
                <label for="text">Avis</label>
                <input type="text" name="text" value="" class="form-control @error('text') is-invalid @enderror">
                @error('text')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                @enderror
            </div>
            {{-- Job --}}
            <div class="d-flex flex-column m-3 form-group">
                <label for="job">Job</label>
                <input type="text" name="job" value="" class="form-control @error('job') is-invalid @enderror">
                @error('job')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                @enderror
            </div>
            {{-- Img --}}
            <div class="d-flex flex-column m-3 form-group">
                <label for="img">Photo</label>
                <input type="file" name="img" value="" class="form-control @error('img') is-invalid @enderror">
                @error('img')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Add service</button>
        </form>
    </div>
@endsection