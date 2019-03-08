@extends('layouts.app')

@section('content')
<h1>Login</h1>

<form class="form" method="post" action="{{ route('login') }}">
    @csrf

    <div class="form-group">
        <label class="form-group-label" for="email">Domain Username</label>
        <input class="form-group-input" type="email" name="email" value="{{ old('email') }}" placeholder="username@domain.internal">
    </div>

    @if ($errors->has('email'))
        <div class="form-errors">
            {{ $errors->first('email') }}
        </div>
    @endif

    <div class="form-group">
        <label class="form-group-label" for="password">Password</label>
        <input class="form-group-input" type="password" name="password" value="{{ old('password') }}" placeholder="**************">
    </div>

    @if ($errors->has('password'))
        <div class="form-errors">
            {{ $errors->first('password') }}
        </div>
    @endif

    <div class="form-button-group">
        <button class="form-button" type="submit">
            Login
        </button>
    </div>
</form>
@endsection
