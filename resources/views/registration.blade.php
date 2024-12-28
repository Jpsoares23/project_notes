@extends('layouts.mainLayout')
@section('content')
<!-- form -->
<form action="/registrationSubmit" method="post">
    @csrf
    <div class="my-3">
        <label for="text_name" class="form-label">Name</label>
        <input type="text" class="form-control bg-dark text-info" name="text_name" required>
    </div>

    <div class="mb-3">
        <label for="text_username" class="form-label">Username</label>
        <input type="text" class="form-control bg-dark text-info" name="text_username" required>
    </div>

    <div class="mb-3">
        <label for="text_password" class="form-label">Password</label>
        <input type="password" class="form-control bg-dark text-info" name="text_password" required>
    </div>

    <div class="mb-3">
        <label for="text_email" class="form-label">Email</label>
        <input type="text" class="form-control bg-dark text-info" name="text_email" required>
    </div>

    <div class="mb-3 d-flex gap-2">
        <button type="submit" class="btn btn-secondary w-100">Register</button>
    </div>
</form>
@endsection