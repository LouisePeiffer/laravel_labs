@extends('layouts.back')

@section('content')
    @include('layouts.flash')
    <div class="card m-5 shadow p-3 mb-5 bg-white rounded">
        <h5 class="card-header mb-3">Changer les services</h5>
        <div class="container">
            {{-- EDIT TITLE SERVICE --}}
            <div class="card m-5 shadow p-3 mb-5 bg-white rounded">
                <h5 for="description">Title Discover :</h5>
                <form action="{{route('update.title', $titles[2])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="d-flex flex-column m-3 form-group">
                        <small class="form-text text-muted">Put between () the part of the text you want highlighted</small>
                        {{-- <p>Put between () the part of the text you want highlighted</p> --}}
                        <input type="text" name="title" value="{{$titles[2]->title}}" class="form-control @error('title') is-invalid @enderror">
                        @error('title')
                                <span class="invalid-feedback">
                                    <strong>{{$message}}</strong>
                                </span>
                        @enderror
                        <button type="submit" class="btn btn-primary mt-2">Update title</button>
                    </div>
                </form>
            </div>
            {{-- Les SERVICES --}}
            <div class="row justify-content-center shadow m-2 p-3">
                <h5>Les services :</h5>
                @foreach ($services as $service)    
                    <div class="card col-3 m-3 d-flex flex-column align-items-center p-3 shadow">
                        <i class="{{$service->icon->name}} fs-2"></i>
                        <h5>{{$service->title}}</h5>
                        <p>{{$service->text}}</p>
                        <div class="d-flex">
                            <a href="{{route('edit.service', $service)}}" class="btn btn-success">Edit</a>
                            <form method="POST" action="{{route('delete.service', $service)}}" >
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <a href="{{route('create.service')}}" class="btn btn-primary">Add service</a>
    </div>
@endsection