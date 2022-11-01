<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;

class StripeController extends Controller
{
    public function stripe()
    {
        return view('stripe');
    }


    public function stripePost(Request $req)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Change::create([
            
            "amount"=>100 * 100,
            "currency"=>"usd",
            "source"=>$req->stripeToken,
            "description"=>"This payment is tested purpose"


        ]);

        Session::flash('success','Payment successful');

        return back();
    }
  


}
