@extends('layouts.back')

@section('content')
    <div class="card m-5 shadow p-3 mb-5 bg-white rounded">
        <h5 class="card-header">Update Image</h5>
        <div class="card-body">
            <img src="/img/{{$image->name}}" alt="" width="200px" class="m-3">
            <form action="{{route('update.image', $image)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="file" name="name">
                <button class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection