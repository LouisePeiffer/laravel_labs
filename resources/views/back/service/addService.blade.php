@extends('layouts.back')

@section('content')
    <div class="card m-5 shadow p-3 mb-5 bg-white rounded">
        <h5 class="card-header">Add service</h5>
        <form action="{{route('store.service')}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- Icon --}}
            <div class="d-flex flex-column m-3 form-group">
                <label for="icon_id">Icon</label>
                <select name="icon_id" id="icon_id" class="form-control @error('icon_id') is-invalid @enderror">
                    <option value="">---- Choose an icon ----</option>
                    @foreach ($services as $service)
                        <option value="{{$service->icon->id}}">{{$service->icon->name}}</option>
                    @endforeach
                </select>
                @error('icon_id')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                @enderror
            </div>
            {{-- Title --}}
            <div class="d-flex flex-column m-3 form-group">
                <label for="title">Title</label>
                <input type="text" name="title" value="{{$service->title}}" class="form-control @error('title') is-invalid @enderror">
                @error('title')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                @enderror
            </div>
            {{-- Text --}}
            <div class="d-flex flex-column m-3 form-group">
                <label for="text">Text</label>
                <input type="text" name="text" value="{{$service->text}}" class="form-control @error('text') is-invalid @enderror">
                @error('text')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Add service</button>
        </form>
    </div>
@endsection