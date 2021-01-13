@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center">
    <div class="card" style="width: 65rem;">
        <div class="card-body">
            <div class="d-flex justify-content-center"><h3>Votre profil vendeur</h3></div>
            @foreach ($user as $u)
            <h5 class="card-title">Solde actuel : {{ $u->solde }}€</h5>
            @endforeach
            <div class="d-flex justify-content-center"><a class="btn btn-primary" href="/fournisseur/produit" role="button">Mes produits</a></div>
        </div>
    </div>
</div>
@endsection