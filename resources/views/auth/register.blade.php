@extends('templates.main')

@section('content')
<h1>Register</h1>

<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="mb-3">
        <label for="first-name" class="form-label">First name</label>
        <input name="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" id="first-name" aria-describedby="first-name" value="{{ old('first_name') }}">
        @error('first_name')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="last-name" class="form-label">Last name</label>
        <input name="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" id="last-name" aria-describedby="last-name" value="{{ old('last_name') }}">
        @error('last_name')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input name="email" type="email" class="form-control  @error('email') is-invalid @enderror" id="email" aria-describedby="email" value="{{ old('email') }}">
        @error('email')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input name="password" type="password" class="form-control  @error('password') is-invalid @enderror" id="password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="password-confirmation" class="form-label">Password confirmation</label>
        <input name="password_confirmation" type="password" class="form-control" id="password-confirmation">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
