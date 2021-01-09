@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Fiche produit') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('/fournisseur/produit/add') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="nom" type="nom" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="descriptif" class="col-md-4 col-form-label text-md-right">{{ __('Descriptif') }}</label>

                            <div class="col-md-6">
                                <input id="descriptif" type="descriptif" class="form-control @error('descriptif') is-invalid @enderror" name="descriptif">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prix" class="col-md-4 col-form-label text-md-right">{{ __('Prix') }}</label>

                            <div class="col-md-6">
                                <input id="prix" type="prix" class="form-control @error('prix') is-invalid @enderror" name="prix">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="stock" class="col-md-4 col-form-label text-md-right">{{ __('Stock') }}</label>

                            <div class="col-md-6">
                                <input id="stock" type="stock" class="form-control @error('stock') is-invalid @enderror" name="stock">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Ajouter') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
