@extends('layouts.back')

@section('content')
    <div class="card m-5 shadow p-3 mb-5 bg-white rounded">
        <h5 class="card-header">Update Profile</h5>
        <div class="card-body">
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <form action="{{route('update.user', $user)}}" method="POST" enctype="multipart/form-data"> 
                @csrf
                @method('PUT')
                {{-- Firstname --}}
                <div class="form-group mb-4">
                    <label for="firstname">First name : </label>
                    <input type="text" name="firstname" id="firstname" value="{{$user->firstname}}" class="form-control @error('firstname') is-invalid @enderror">
                    @error('firstname')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                {{-- Name --}}
                <div class="form-group mb-4">
                    <label for="name">Name : </label>
                    <input type="text" name="name" id="name" value="{{$user->name}}" class="form-control  @error('name') is-invalid @enderror">
                    @error('name')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                {{-- Age --}}
                <div class="form-group mb-4">
                    <label for="age" >Age : </label>
                    <input type="number" name="age" id="age" value="{{$user->age}}" class="form-control @error('age') is-invalid @enderror">
                    @error('age')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                {{-- Image --}}
                <div class="form-group mb-4">
                    <label for="img">Image: </label>
                    <input type="file" name="img" id="img" value="{{$user->img}}" class="form-control @error('img') is-invalid @enderror"> 
                    @error('img')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                {{-- Job --}}
                <div class="form-group mb-4">
                    <label for="job_id">Job : </label>
                    <select name="job_id" id="job_id" class="form-control @error('job_id') is-invalid @enderror">
                        <option value="{{$user->job->id}}">{{$user->job->job}}</option>
                        @foreach ($jobs as $job)
                        @if ($job->id != $user->job_id)
                            <option value="{{$job->id}}">{{$job->job}}</option>
                        @endif
                        @endforeach
                    </select>
                    @error('job_id')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                {{-- Genre --}}
                <div class="form-group mb-4">
                    <label for="genre_id" name="genre_id">Genre : </label>
                    <select name="genre_id" id="genre_id" class="form-control @error('genre_id') is-invalid @enderror">
                        <option value="{{$user->genre->id}}">{{$user->genre->name}}</option>
                        @foreach ($genres as $genre)
                        @if ($genre->id != $user->genre_id)
                            <option value="{{$genre->id}}">{{$genre->name}}</option>
                        @endif
                        @endforeach
                    </select>
                    @error('genre_id')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                {{-- Description --}}
                <div class="form-group mb-4">
                    <label for="description">Description :</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{$user->description}}</textarea>
                </div>
                
                <button class="btn btn-primary" type="submit">Update</button>
            </form>
        </div>
    </div>
@endsection