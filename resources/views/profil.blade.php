@extends('layouts.app')

@section('content')
<div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
            </tr>
        </thead>  
        @foreach ($user as $u)
        <tbody>
            <tr>
                <td>{{ $u->id }}</td>
                <td>{{ $u->username }}</td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endsection
