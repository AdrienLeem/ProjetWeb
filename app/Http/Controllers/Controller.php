<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Produit;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function profil() {
        $id = Auth::id();
        $user = User::where('id', $id)
                    ->get();

        return view('profil', [
            'user' => $user
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
        $produit = Produit::where('id', $id)
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
            'id_user' => $id
            ]);

        return redirect('/fournisseur/produit');
    }

    public function editProduit() {
        if (Auth::user()->fournisseur == 0) {
            return redirect('/');
        }

        return view('editProduit');
    }
}
