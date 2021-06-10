@extends('layouts.back')

@section('content')
    <div class="card m-5 shadow p-3 mb-5 bg-white rounded">
        <div>
            @foreach ($profiles as $profile)
                <div class="card m-3 p-3">
                    <div class="d-flex">
                        <h5>Prénom : </h5>
                        <p>{{$profile->firstname}}</p>
                    </div>
                    <div class="d-flex">
                        <h5>Nom : </h5>
                        <p>{{$profile->name}}</p>
                    </div>
                    <div class="d-flex">
                        <h5>Email : </h5>
                        <p>{{$profile->email}}</p>
                    </div>
                    <div class="d-flex">
                        <h5>Role : </h5>
                        <p>{{$profile->role->role}}</p>
                    </div>
                    <div class="d-flex">
                        <a href="{{route('edit.profile', $profile)}}" class="btn btn-success">Edit</a>
                        <form method="POST" action="{{route('delete.profile', $profile)}}" >
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection