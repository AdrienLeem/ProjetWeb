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

    public function editProfil() {
        return view('editProfile');
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

        return view('produit');
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

        Produit::create([
            'nom' => $_POST['nom'],
            'descriptif' => $_POST['descriptif'],
            'prix' => $_POST['prix'],
            'stock' => $_POST['stock']
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
