<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use App\User;

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

    public function edit() {
        return view('edit');
    }

    public function fournisseur() {
        if (Auth::user()->fournisseur == 0) {
            return redirect('/home');
        }

        return view('fournisseur');
    }
}
