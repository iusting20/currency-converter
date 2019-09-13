<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    public function convertCurrency($currencySite, $initialCurrency, $targetCurrency, $amount)  {

        $conversions = $this->_getConversions($currencySite, $initialCurrency);
        // return $conversions;

        $convertedAmount = null;
        $convertedAmount = $this->_getConvertedAmount($currencySite, $conversions, $targetCurrency, $amount);


        return $convertedAmount;
    }


    private function _getConversions($currencySite, $initialCurrency)   {
        // GET CONVERSIONS
        if( $currencySite == null ) {
            $conversionRateSite = config('currencyRateSites.floatrates');
        }   
        else    {
            $conversionRateSite = config('currencyRateSites.' . $currencySite);
        }

        $updatedXmlUrl = str_replace("gbp", strtolower($initialCurrency), $conversionRateSite);

        $contents = file_get_contents($updatedXmlUrl);
        $xml = simplexml_load_string($contents);
        $conversions = json_decode(json_encode($xml), true);


        return $conversions;
    }


    private function _getConvertedAmount($currencySite, $conversions, $targetCurrency, $amount)   {
        // FIND TARGET CURRENCY    AND THEN    CONVERT AMOUNT
        if($currencySite == 'floatrates')    {
            $nrOfConversions = count($conversions['item']);

            for( $i = 0; $i < $nrOfConversions; $i++)   {

                if( $conversions['item'][$i]["targetCurrency"] == $targetCurrency ) {
                    $exchangeRate = $conversions['item'][$i]['exchangeRate'];
                    $convertedAmount = $amount * $exchangeRate;
                    break;
                }
            }

            return $convertedAmount;
        }
        else if($currencySite == 'fxexchangerate')   {
            $nrOfConversions = count($conversions['channel']['item']);

            for( $i = 0; $i < $nrOfConversions; $i++)   {

                if( $this->_getCurrencySymbol( $conversions['channel']['item'][$i]["title"] ) == $targetCurrency ) {
                    $convertedAmount = $conversions['channel']['item'][$i]["description"];
                    break;
                }
            }

            return $convertedAmount;
        }

    }


    private function _getCurrencySymbol($string)  {
        
        $symbol = explode("/", $string);
        $symbol = $symbol[1];
        $symbol = explode("(", $symbol);
        $symbol = $symbol[1];
        $symbol = explode(")",$symbol);
        $symbol = $symbol[0];

        return $symbol;
    }
}
