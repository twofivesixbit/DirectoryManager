@extends('layouts.app')

@section('content')
<h1>Create User</h1>

<form class="form" method="post" action="{{ route('users.store') }}">
    @csrf

    <div class="form-group">
        <label class="form-group-label" for="first_name">Name</label>
        <div class="form-group flex flex-row items-center justify-between p-2 md:w-7/10">
            <input class="form-group-input w-1/2" type="text" name="first_name" value="{{ old('first_name') }}" placeholder="John">
            <input class="form-group-input w-1/2" type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Smith">
        </div>
    </div>

    @if ($errors->has('first_name') or $errors->has('last_name'))
        <div class="form-errors">
            {{ $errors->first('first_name') }}
            {{ $errors->first('last_name') }}
        </div>
    @endif

    <div class="form-group">
        <label class="form-group-label" for="username">Username</label>
        <input class="form-group-input" type="text" name="username" value="{{ old('username') }}" placeholder="JSmith">
    </div>

    @if ($errors->has('username'))
        <div class="form-errors">
            {{ $errors->first('username') }}
        </div>
    @endif

    <div class="form-group">
        <label class="form-group-label" for="unit">Unit</label>
        <select class="form-group-select" name="unit">
            @foreach($units as $unit)
                <option value="{{ $unit->location }}">{{ $unit->name }}</option>
            @endforeach
        </select>
    </div>

    @if ($errors->has('unit'))
        <div class="form-errors">
            {{ $errors->first('unit') }}
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
        <button class="btn" type="submit">
            Create
        </button>
    </div>
</form>
@endsection
