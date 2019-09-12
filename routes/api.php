<?php

use Illuminate\Http\Request;
use GuzzleHttp\GuzzleHttp;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/currency', function (Request $request) {
                                                            // 🌟 MOVE INTO SEPARATE MODEL !
    // INIT VARS
    $initialCurrency = $request->from;
    $targetCurrency = $request->to;
    $amount = $request->amount;
    $convertedAmount = null;


    // GET CONVERSIONS
    $contents = file_get_contents('http://www.floatrates.com/daily/'. strtolower($initialCurrency) .'.xml');
    $xml = simplexml_load_string($contents);
    $conversions = json_decode(json_encode($xml), true);
    $nrOfConversions = count($conversions['item']);


    // FIND TARGET CURRENCY    AND THEN    CONVERT AMOUNT
    for( $i = 0; $i < $nrOfConversions; $i++)   {
        
        if( $conversions['item'][$i]["targetCurrency"] == $targetCurrency ) {
            $exchangeRate = $conversions['item'][$i]['exchangeRate'];
            $convertedAmount = $amount * $exchangeRate;
            break;
        }
    }




    return $convertedAmount;
});
