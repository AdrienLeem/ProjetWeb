@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center">
    @foreach ($produit as $p)
    <form method="POST" action="/recherche/produit?id={{ $p->id }}">
        @csrf
        <div class="card" style="width: 40rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $p->nom }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $p->prix }}€</h6>
                @foreach ($fournisseur as $f)
                <h6 class="card-subtitle mb-2 text-muted">Vendeur : {{ $f->username }}</h6>
                @endforeach
                <p class="card-text">{{ $p->descriptif }}</p>

                @if ($p->stock >= 1)
                <h6 class="card-subtitle mb-2 text-muted" >En stock</h6>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Acheter') }}
                    </button>
                </div>
                @else
                <h6 class="card-subtitle mb-2 text-muted">Rupture de stock</h6>
                @endif
            </div>
        </div>
    </form>
    @endforeach
</div>
@endsection