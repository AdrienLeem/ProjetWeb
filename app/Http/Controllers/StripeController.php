<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe;
use Session;

class StripeController extends Controller
{
    function handleGet(){
        return view('paiement');
    }

    function handlePost(Request $request){
        $id_user=Auth::id;
        $montant = Commande::where('id_user', $id_user)->orderBy('id', 'DESC')->take(1)->get();
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
            "amount" => 100 * $montant[0]['montant'],
            "currency" => "eur",
            "source" => $request->stripeToken,
            "description" => "paiement test." 
    ]);

    Session::flash('success', 'Le paiement a bien été effectué');
      
    return redirect('/paiementOK');
    }
}
