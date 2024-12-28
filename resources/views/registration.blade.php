@extends('layouts.mainLayout')
@section('content')
<!-- form -->
<form action="/registrationSubmit" method="post">
    @csrf
    <div class="my-3">
        <label for="text_name" class="form-label">Name</label>
        <input type="text" class="form-control bg-dark text-info" name="text_name" value="{{old('text_name')}}">

        {{--Show error--}}
        @error('text_name')
        <div class="text-danger">{{ $message }}</div>
        @enderror

    </div>

    <div class="mb-3">
        <label for="text_username" class="form-label">Username</label>
        <input type="text" class="form-control bg-dark text-info" name="text_username" value="{{old('text_username')}}">

        {{--Show error--}}
        @error('text_username')
        <div class="text-danger">{{ $message }}</div>
        @enderror

    </div>

    <div class="mb-3">
        <label for="text_password" class="form-label">Password</label>
        <input type="password" class="form-control bg-dark text-info" name="text_password" value="{{old('text_password')}}">

        {{--Show error--}}
        @error('text_password')
        <div class="text-danger">{{ $message }}</div>
        @enderror

    </div>

    <div class="mb-3">
        <label for="text_email" class="form-label">Email</label>
        <input type="text" class="form-control bg-dark text-info" name="text_email" value="{{old('text_email')}}">

        {{--Show error--}}
        @error('text_email')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        
    </div>

    <div class="mb-3 d-flex gap-2">
        <button type="submit" class="btn btn-secondary w-100">Register</button>
    </div>
</form>
@endsection