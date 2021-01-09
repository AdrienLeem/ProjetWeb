<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('accueil');
});

Route::get('/profil', 'Controller@profil')->name('profil');

Route::get('/profil/edit', 'Controller@editProfil')->name('editProfil');

Route::get('/fournisseur', 'Controller@fournisseur')->name('fournisseur');

Route::get('/fournisseur/produit', 'Controller@produit')->name('produit');

Route::get('/fournisseur/produit/add', 'Controller@addProduit')->name('addProduit');

Route::get('/fournisseur/produit/edit', 'Controller@editProduit')->name('editProduit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
