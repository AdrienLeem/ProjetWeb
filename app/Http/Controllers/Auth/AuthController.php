<?php
// Controller pour la partie d'authentification - DD
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;

class AuthController extends Controller
{
    public function register() // Vue pour l'inscription
    {

        return view('auth.register');
    }

    public function storeUser(Request $request)
    {
        $request->validate([ // Conditions pour que le formulaire accepte les données
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('home'); // route vers la page personnel du client
    }

    public function login()
    {

        return view('auth.login'); // Route vers la page d'authentification
    }

    public function authenticate(Request $request) // Formulaire d'authentification si déjà inscrit
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password'); // Route vers la page personnel en ayant déjà un compte auparavant

        if (Auth::attempt($credentials)) {
            return redirect()->intended('home');
        }

        return redirect('login')->with('error', 'Combinaison login/mot de passe incorrecte'); // Erreur en cas de saisie incorrecte
    }

    public function logout() { // Controller pour la deconnexion
        Auth::logout();

        return redirect('login');
    }

    public function home() // Route pour la page d'accueil
    {
        return view('home');
    }
}
