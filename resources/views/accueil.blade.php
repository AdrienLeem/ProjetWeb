@extends('layouts.app')

@section('content')
@auth
  <br>
  <div class="container">
    <form class="form-inline" action="/recherche" method="post">
      @csrf
      <fieldset>
        <div class="input-group">
          <div class="input-group-prepend">
            <select id="ville" name="ville" class="form-control">
              @foreach ($localisation as $l)
              <option value="{{ $l->ville }}">{{ $l->ville }}</option>
              @endforeach
            </select>
          </div>
          <input id="Saisie" name="saisie" type="text" class="form-control" aria-label="Saisie de mots clés" required="required">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit">Recherche</button>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
@endauth

@guest
	<br>
    <div class="d-flex justify-content-center"><h3>Bienvenue sur le site de LocaShop !</h3></div>
    <br>
    <div class="d-flex justify-content-center"><h5 class="card-title">Le site ou vous comblerez toutes vos envies</h5></div>
@endguest
@endsection