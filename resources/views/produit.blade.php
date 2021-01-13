@extends('layouts.app')

@section('content')
<div>
    <div class="d-flex justify-content-center">
        <h1>Tous vos produits</h1>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Produit</th>
                <th scope="col">Descriptif</th>
                <th scope="col">Prix</th>
                <th scope="col">Stock</th>
            </tr>
        </thead>
        @foreach ($produit as $p)
        <tbody>
            <tr>
                <td>{{ $p->nom }}</td>
                <td>{{ $p->descriptif }}</td>
                <td>{{ $p->prix }}</td>
                <td>{{ $p->stock }}</td>
                <td><a class="btn" href="/fournisseur/produit/edit?id={{ $p->id }}" role="button">Editer</a></td>
                <td><a class="btn" href="/fournisseur/produit/delete?id={{ $p->id }}" role="button">Supprimer</a></td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
<div class="d-flex justify-content-center">
    <a class="btn btn-primary" href="/fournisseur/produit/add" role="button">Ajouter un produit</a>
</div>
@endsection