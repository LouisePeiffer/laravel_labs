@extends('layouts.back')

@section('content')
    @include('layouts.flash')
    <div class="card m-5 shadow p-3 mb-5 bg-white rounded">
        <h5 class="card-header mb-3">Update General</h5>
        <div class="card mb-3 p-2">
            <h5>Logo :</h5>
            <div class="card-body">
                <img src="../img/{{$logo->name}}" alt="" width="150px" class="shadow">
            </div>
            <div class="card-body">
                <a href="{{route('edit.logo', $logo)}}" class="btn btn-success">Edit</a>
            </div>
        </div>
        <div class="card mb-3 p-2">
            <h5>Carousel :</h5>
            <div class="d-flex m-2 justify-content-around">
                @foreach ($images as $image)    
                    <div class="card d-flex justify-content-around shadow">
                        <div class="card-body">
                            <img src="../img/{{$image->name}}" alt="" width="180px">
                        </div>
                        <div class="card-body d-flex justify-content-around">
                            <a href="{{route('edit.image', $image)}}" class="btn btn-success">Edit</a>
                            <form method="POST" action="{{route('delete.image', $image)}}" >
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <a href="{{route('create.image')}}" class="btn btn-primary">Add image</a>
    </div>
@endsection