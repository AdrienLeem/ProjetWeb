@extends('layouts.app')

@section('content')
@foreach ($produit as $p)
<div class="media position-relative">
  <div class="media-body">
    <h5 class="mt-0">{{ $p->nom }}</h5>
    <p>{{ $p->descriptif }}</p>
    <p>{{ $p->prix }}</p>
    <a href="/recherche/produit?id={{ $p->id }}" class="stretched-link">Vers l'article</a>
  </div>
</div>
@endforeach
@endsection
