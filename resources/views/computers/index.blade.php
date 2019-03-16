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
    </tr> 
    @endforeach
</tbody>
</table>
@endsection
