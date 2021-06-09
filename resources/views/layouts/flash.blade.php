{{-- MESSAGE SUCCESS --}}
@if ($message = Session::get('success'))
    <div class="alert alert-success alert block w-100">
        <strong>{{$message}}</strong>
    </div>
@endif

{{-- MESSAGE WARNING --}}
@if ($message = Session::get('warning'))
    <div class="alert alert-warning alert block w-50">
        <strong>{{$message}}</strong>
    </div>
@endif

{{-- MESSAGE DANGER --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
