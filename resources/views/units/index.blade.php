@extends('layouts.app')

@section('content')
<div class="flex flex-row items-center justify-between">
    <h1>Units</h1>
    <div class="flex flex-row items-center">
        <a class="btn" href="{{ route('units.create') }}">Create</a>
    </div>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Location</th>
        <th scope="col"></th>
    </tr>
</thead>
<tbody>
    @foreach ($units as $unit)
    <tr>
        <th>{{ $unit->name }}</th>
        <td>{{ $unit->location }}</td>
        <td>
            <form method="post" action="{{ route('units.destroy', ['id' => $unit->id]) }}">
                @csrf
                <input type="hidden" name="_method" value="delete" />
                <button class="btn bg-red" type="submit">
                    Delete
                </button>
            </form>
        </td>
    </tr> 
    @endforeach
</tbody>
</table>
@endsection
