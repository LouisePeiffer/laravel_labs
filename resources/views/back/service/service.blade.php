@extends('layouts.back')

@section('content')
    @include('layouts.flash')
    <div class="card m-5 shadow p-3 mb-5 bg-white rounded">
        <h5 class="card-header mb-3">Changer les services</h5>
        <div class="container">
            <div class="card shadow p-3">
                <h5>Le titre :</h5>
                <p>{{$titles[2]->title}}</p>
                <a href="" class="btn btn-success">Edit</a>
            </div>
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