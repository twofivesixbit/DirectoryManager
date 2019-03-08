@extends('layouts.app')

@section('content')
<div class="flex flex-row items-center justify-between">
    <h1>Users</h1>
    <div class="flex flex-row items-center">
        <a class="btn" href="{{ route('users.create') }}">Create</a>
    </div>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Username</th>
        <th scope="col">Display Name</th>
        <th scope="col">Description</th>
        <th scope="col">Status</th>
        <th scope="col"></th>
    </tr>
</thead>
<tbody>
    @foreach ($users as $user)
    <tr>
        <th><a class="text-black" href="#">{{ $user->getAccountName() }}</a></th>
        <td>{{ $user->getCommonName() }}</td>
        <td>{{ $user->getDescription() }}</td>
        <td>
            <form method="post" action="{{ route('users.destroy') }}?username={{ $user->getAccountName() }}">
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
