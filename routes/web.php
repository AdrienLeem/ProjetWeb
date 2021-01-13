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

Route::get('/', 'Controller@accueil')->name('accueil');

Route::post('/recherche', 'Controller@recherche')->name('recherche');

Route::get('/recherche/produit', 'Controller@ficheProduit')->name('ficheProduit');

Route::get('/profil', 'Controller@profil')->name('profil');

Route::get('/profil/edit', 'Controller@showProfilForm')->name('/profil/edit');

Route::post('/profil/edit', 'Controller@editProfil');

Route::get('/profil/addLoca', 'Controller@showLocaForm')->name('/profil/addLoca');

Route::post('/profil/addLoca', 'Controller@addLoca');

Route::get('/fournisseur', 'Controller@fournisseur')->name('fournisseur');

Route::get('/fournisseur/produit', 'Controller@produit')->name('produit');

Route::get('/fournisseur/produit/add', 'Controller@showProduitForm')->name('/fournisseur/produit/add');

Route::post('/fournisseur/produit/add', 'Controller@addProduit');

Route::get('/fournisseur/produit/edit', 'Controller@showEditProduitForm')->name('/fournisseur/produit/edit');

Route::post('/fournisseur/produit/edit', 'Controller@editProduit');

Route::get('/fournisseur/produit/delete', 'Controller@deleteProduit')->name('deleteProduit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
