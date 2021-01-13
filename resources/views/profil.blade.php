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
    @foreach ($localisation as $l)
        <p>{{ $l->ville }}<p>
    @endforeach
</div>
<a class="btn btn-primary" href="/profil/addLoca" role="button">Ajouter une localisation</a>
<a class="btn btn-primary" href="/profil/edit" role="button">Editer le profil</a>
@endsection
