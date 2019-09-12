<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Currency;

class CurrencyController extends Controller
{

    public function convertCurrency(Request $request) {
        
        $currency = new Currency;

        $initialCurrency = $request->from;
        $targetCurrency = $request->to;
        $amount = $request->amount;

        
        return $currency->convertCurrency($initialCurrency, $targetCurrency, $amount);
    }
}
