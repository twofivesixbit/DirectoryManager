@extends('layouts.app')

@section('content')
<h1>Groups</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">GroupName</th>
        <th scope="col">Managed By</th>
        <th scope="col">Description</th>
    </tr>
</thead>
<tbody>
    @foreach ($groups as $group)
    <tr>
        <th><a class="text-black" href="#">{{ $group->getCommonName() }}</a></th>
        <td>{{ $group->getAttribute('managedby', 0) }}</td>
        <td>{{ $group->getDescription() }}</td>
    </tr> 
    @endforeach
</tbody>
</table>
@endsection
