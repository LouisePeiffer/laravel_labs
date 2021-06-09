@extends('layouts.back')

@section('content')
    <div class="card m-5 shadow p-3 mb-5 bg-white rounded">
        <h5 class="card-header mb-3">Hello contact</h5>
        <p class="fw-bold">Les sujets :</p>
        <div>
            @foreach ($subjects as $subject)
            <div class="d-flex align-items-center card p-3 m-3">
                <p>{{$subject->subject}}</p>
                <form method="POST" action="{{route('delete.subject', $subject)}}" class="m-1" >
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </div>
            @endforeach
        </div>
        <a href="{{route('create.subject')}}" class="btn btn-primary">Add subject</a>
    </div>
@endsection