<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function query()
    {
        $url = 'https://services.runescape.com/m=itemdb_rs/api/catalogue/items.json?category=3&alpha=rune&page=1';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Access-Control-Allow-Origin: *',
            'Accept: */*'
        ));
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }
}
