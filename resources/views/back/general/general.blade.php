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
                    <div class="card d-flex justify-content-around shadow p-3">
                        <div class="card-body">
                            <img src="../img/{{$image->name}}" alt="" width="180px">
                        </div>
                        @if ($image->active == 1)
                            <h5 class="mt-3"><b>1ère image</b></h5>      
                        @else         
                            <form method="POST" action="{{ route('firstImage', $image) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <button class="btn btn-warning mt-3" type="submit">Définir 1ère image</button>
                            </form>
                        @endif
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