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
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
            "amount" => 100 * 150,
            "currency" => "inr",
            "source" => $request->stripeToken,
            "description" => "paiement test." 
    ]);

    Session::flash('success', 'Le paiement a bien été effectué');
      
    return back();
    }
}
