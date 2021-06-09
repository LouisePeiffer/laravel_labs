@extends('layouts.back')

@section('content')
    <div class="card m-5 shadow p-3 mb-5 bg-white rounded">
        <form action="{{route('store.subject')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="subject">
            <button type="submit" class="btn btn-primary">Add subject</button>
        </form>
    </div>
@endsection