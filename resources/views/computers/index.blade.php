@extends('layouts.app')

@section('content')
<h1>Computers</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Host Name</th>
        <th scope="col">Operating System</th>
        <th scope="col">Description</th>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
</thead>
<tbody>
    @foreach ($computers as $computer)
    <tr>
        <th><a class="text-black" href="#">{{ $computer->getDnsHostName() }}</a></th>
        <td>{{ $computer->getOperatingSystem() }} {{ $computer->getOperatingSystemVersion() }}</td>
        <td>{{ $computer->getDescription() }}</td>
        <td>
            <a class="btn" href="rdp://{{ $computer->getDnsHostName() }}">Remote</a>
        </td>
        <td>
            <form method="post" action="{{ route('computers.destroy') }}?computer={{ $computer->getDnsHostName() }}">
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
