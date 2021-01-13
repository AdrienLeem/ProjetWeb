@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center">
    <div class="card" style="width: 65rem;">
        <div class="card-body">
            <div class="d-flex justify-content-center"><h3>Votre profil</h3></div>
            @foreach ($user as $u)
            <h5 class="card-title">Nom d'utilisateur : {{ $u->username }}</h5>
            <h5 class="card-title">Nom d'utilisateur : {{ $u->email }}</h5>
            @endforeach
            <div class="d-flex justify-content-center"><a class="btn btn-primary" href="/profil/edit" role="button">Editer le profil</a></div>
        </div>
    </div>
</div>
<br>
<div class="d-flex justify-content-center">
    <div class="card" style="width: 65rem;">
        <div class="card-body">
            <div class="d-flex justify-content-center"><h3>Vos lieux de référence</h3></div>
            <ul>
                @foreach ($localisation as $l)
                <li><h5 class="card-title">{{ $l->ville }}</h5></li>
                @endforeach
            </ul>
            <div class="d-flex justify-content-center"><a class="btn btn-primary" href="/profil/addLoca" role="button">Ajouter une localisation</a></div>
        </div>
    </div>
</div>
@endsection
