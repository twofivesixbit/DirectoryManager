@extends('layouts.app')

@section('content')
<h1>Users</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Username</th>
        <th scope="col">Display Name</th>
        <th scope="col">Description</th>
    </tr>
</thead>
<tbody>
    @foreach ($users as $user)
    <tr>
        <th><a class="text-black" href="#">{{ $user->getAccountName() }}</a></th>
        <td>{{ $user->getCommonName() }}</td>
        <td>{{ $user->getDescription() }}</td>
    </tr> 
    @endforeach
</tbody>
</table>
@endsection
