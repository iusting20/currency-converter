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
        $currencySite = $request->site;
        
        
        return $currency->convertCurrency($currencySite, $initialCurrency, $targetCurrency, $amount);
    }
}
