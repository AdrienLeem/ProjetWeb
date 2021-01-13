@extends('layouts.app')

@section('content')
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
@endsection