@extends('layouts.app')

@section('content')
<div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Produit</th>
                <th>Descriptif</th>
                <th>Prix</th>
                <th>Stock</th>
            </tr>
        </thead>
        @foreach ($produit as $p)
        <tbody>
            <tr>
                <td>{{ $p->id }}</td>
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
<a class="btn btn-primary" href="/fournisseur/produit/add" role="button">Ajouter un produit</a>
@endsection