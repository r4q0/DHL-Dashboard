<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MainController extends Controller
{

    public function scrapeDHL($tracking, $zipcode)
    {
        $url = "https://api-gw.dhlparcel.nl/track-trace?key=$tracking%2B$zipcode";
        $response = Http::get($url);
        return response()->json($response->json());
    }
}
