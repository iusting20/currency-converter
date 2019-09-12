<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    public function convertCurrency($initialCurrency, $targetCurrency, $amount)  {

        // GET CONVERSIONS
        $contents = file_get_contents('http://www.floatrates.com/daily/'. strtolower($initialCurrency) .'.xml');
        $xml = simplexml_load_string($contents);
        $conversions = json_decode(json_encode($xml), true);
        $nrOfConversions = count($conversions['item']);
        $convertedAmount = null;


        // FIND TARGET CURRENCY    AND THEN    CONVERT AMOUNT
        for( $i = 0; $i < $nrOfConversions; $i++)   {

            if( $conversions['item'][$i]["targetCurrency"] == $targetCurrency ) {
                $exchangeRate = $conversions['item'][$i]['exchangeRate'];
                $convertedAmount = $amount * $exchangeRate;
                break;
            }
        }




        return $convertedAmount;
    }
}
