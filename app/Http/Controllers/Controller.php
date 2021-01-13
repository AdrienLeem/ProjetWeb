<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Produit;
use App\Localisation;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function accueil() {
        $id = Auth::id();

        $localisation = Localisation::where('id_user', $id)
                    ->get();

        return view('accueil', [
            'localisation' => $localisation
        ]);
    }

    public function recherche() { 
        $produit = Produit::where('ville', $_POST['ville'])
                    ->Where('nom', 'like', '%' . $_POST['saisie'] . '%')->get();

        return view('recherche', [
            'produit' => $produit
        ]);
    }

    public function ficheProduit() {
        
        
        return view('ficheProduit');
    }

    public function profil() {
        $id = Auth::id();
        $user = User::where('id', $id)
                    ->get();

        $localisation = Localisation::where('id_user', $id)
                    ->get();

        return view('profil', [
            'user' => $user,
            'localisation' => $localisation
        ]);
    }

    public function showProfilForm() {
        $id = Auth::id();
        $user = User::where('id', $id)
                    ->get();
        
        return view('editProfile', [
            'user' => $user
        ]);
    }

    public function editProfil() {
        $id = Auth::id();
        $user = User::find($id);
        $user->username = $_POST['username'];
        $user->email = $_POST['email'];
        $user->save();

        return redirect('profil');
    }

    public function showLocaForm() {
        return view('addLoca');
    }

    public function addLoca() {
        $id = Auth::id();

        Localisation::create([
            'ville' => $_POST['ville'],
            'id_user' => $id
            ]);

        return redirect('/profil');
    }

    public function fournisseur() {
        if (Auth::user()->fournisseur == 0) {
            return redirect('/');
        }

        return view('fournisseur');
    }

    public function produit() {
        if (Auth::user()->fournisseur == 0) {
            return redirect('/');
        }

        $id = Auth::id();
        $produit = Produit::where('id_user', $id)
                    ->get();

        return view('produit', [
            'produit' => $produit
        ]);
    }

    public function showProduitForm() {
        if (Auth::user()->fournisseur == 0) {
            return redirect('/');
        }

        return view('addProduit');
    }

    public function addProduit() {
        if (Auth::user()->fournisseur == 0) {
            return redirect('/');
        }

        $id = Auth::id();

        Produit::create([
            'nom' => $_POST['nom'],
            'descriptif' => $_POST['descriptif'],
            'prix' => $_POST['prix'],
            'stock' => $_POST['stock'],
            'ville' => $_POST['ville'],
            'id_user' => $id
            ]);

        return redirect('/fournisseur/produit');
    }

    public function showEditProduitForm() {
        if (Auth::user()->fournisseur == 0) {
            return redirect('/');
        }

        $produit = Produit::where('id', $_GET['id'])
                    ->get();

        return view('editProduit', [
            'produit' => $produit
        ]);
    }

    public function editProduit() {
        $produit = Produit::find($_GET['id']);
        $produit->nom = $_POST['nom'];
        $produit->descriptif = $_POST['descriptif'];
        $produit->prix = $_POST['prix'];
        $produit->stock = $_POST['stock'];
        $produit->ville = $_POST['ville'];
        $produit->save();

        return redirect('/fournisseur/produit');
    }

    public function deleteProduit() {
        if (Auth::user()->fournisseur == 0) {
            return redirect('/');
        }

        Produit::findOrFail($_GET['id'])->delete();

        return redirect('/fournisseur/produit');
    }
}
