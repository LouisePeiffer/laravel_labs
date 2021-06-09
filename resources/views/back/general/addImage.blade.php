@extends('layouts.back')

@section('content')
    <div class="card m-5 shadow p-3 mb-5 bg-white rounded">
        <form action="{{route('store.image')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="name">
            <button type="submit" class="btn btn-primary">Add image</button>
        </form>
    </div>
@endsection