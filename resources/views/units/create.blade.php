@extends('layouts.app')

@section('content')
<h1>Create Unit</h1>

<form class="form" method="post" action="{{ route('units.store') }}">
    @csrf

    <div class="form-group">
        <label class="form-group-label" for="name">Name</label>
        <input class="form-group-input" type="text" name="name" value="{{ old('name') }}" placeholder="Sales">
    </div>

    @if ($errors->has('name'))
        <div class="form-errors">
            {{ $errors->first('name') }}
        </div>
    @endif

    <div class="form-group">
        <label class="form-group-label" for="location">AD Location</label>
        <input class="form-group-input" type="text" name="location" value="{{ old('location') }}" placeholder="OU=something....">
    </div>

    @if ($errors->has('location'))
        <div class="form-errors">
            {{ $errors->first('location') }}
        </div>
    @endif

    <div class="form-button-group">
        <button class="btn" type="submit">
            Create
        </button>
    </div>
</form>
@endsection
