<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MainController extends Controller
{

    private function scrapeDHL($tracking, $zipcode)
    {

        $url = "https://api-gw.dhlparcel.nl/track-trace?key=$tracking%2B$zipcode";
        
    }

}
