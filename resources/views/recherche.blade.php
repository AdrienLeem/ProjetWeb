@extends('layouts.app')

@section('content')
<?php
  function str_truncate($text, $length){
    if(strlen($text) <= $length) return $text;
    return trim(substr($text, 0, $length));
  }
?>
@foreach ($produit as $p)
<div class="d-flex justify-content-center">
  <div class="card" style="width: 40rem;">
    <div class="card-body">
      <div class="media position-relative">
        <div class="media-body">
          <h5 class="mt-0">{{ $p->nom }}</h5>
          <?php
            $text = $p->descriptif;
            echo str_truncate($text, 80).'...';
          ?>
          <p>{{ $p->prix }}€</p>
          <a href="/recherche/produit?id={{ $p->id }}" class="stretched-link">Vers l'article</a>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
@endforeach
@endsection
