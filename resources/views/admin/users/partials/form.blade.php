@csrf
<div class="mb-3">
    <label for="first-name" class="form-label">First name</label>
    <input name="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" id="first-name"
        aria-describedby="first-name" value="{{ old('first_name') }} @isset($user) {{ $user->first_name }} @endisset">
    @error('first_name')
    <span class="invalid-feedback" role="alert">
        {{ $message }}
    </span>
    @enderror
</div>
<div class="mb-3">
    <label for="last-name" class="form-label">Last name</label>
    <input name="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" id="last-name"
        aria-describedby="last-name" value="{{ old('last_name') }} @isset($user) {{ $user->last_name }} @endisset">
    @error('last_name')
    <span class="invalid-feedback" role="alert">
        {{ $message }}
    </span>
    @enderror
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input name="email" type="email" class="form-control  @error('email') is-invalid @enderror" id="email"
        aria-describedby="email" value="{{ old('email') }} @isset($user) {{ $user->email }} @endisset">
    @error('email')
    <span class="invalid-feedback" role="alert">
        {{ $message }}
    </span>
    @enderror
</div>

@isset($create)
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input name="password" type="password" class="form-control  @error('password') is-invalid @enderror" id="password">
        @error('password')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>
@endisset

<div class="mb-3">
    @foreach ( $roles as $role)

    <div class="form-check">
        <input id="{{ $role->name }}" class="form-check-input" name="roles[]" type="checkbox" value="{{ $role->id }}"
        @isset($user) @if(in_array($role->id, $user->roles->pluck('id')->toArray())) checked @endif @endisset>
        <label class="form-check-label" for="{{ $role->name }}">
            {{ $role->name }}
        </label>
    </div>

    @endforeach
</div>

<button type="submit" class="btn btn-primary">Submit</button>
