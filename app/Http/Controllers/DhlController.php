<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class DhlController extends Controller
{

    public static function scrapeDHL($tracking, $zipcode)
    {
        $url = "https://api-gw.dhlparcel.nl/track-trace?key=$tracking%2B$zipcode";
        $raw = Http::get($url);
        $clean = json_decode($raw, true);

        $data = [
            'packageType' => $clean[0]['packageType'],
            'weight' => $clean[0]['weight'],
            'receiver' => [
                'name' => $clean[0]['receiver']['name'],
                'street' => $clean[0]['receiver']['address']['street'],
                'houseNumber' => $clean[0]['receiver']['address']['houseNumber'],
            ],
            'destination' => [
                'type' => $clean[0]['lastKnownDestination']['type'],
                'name' => $clean[0]['lastKnownDestination']['name'],
                'city' => $clean[0]['lastKnownDestination']['address']['city'],
                'street' => $clean[0]['lastKnownDestination']['address']['street'],
                'houseNumber' => $clean[0]['lastKnownDestination']['address']['houseNumber'],
            ],
        ];

        foreach ($clean[0]['events'] as $event) {
            $data['events'][] = [
                'category' => $event['category'],
                'timestamp' => Carbon::parse($event['timestamp'])->diffForHumans(),
                'status' => $event['status'],
            ];
        }
        $data['status'] = $data['events'][count($data['events']) - 1]['status'];
        $data['category '] = $data['events'][count($data['events']) - 1]['category'];
        $data['timestamp'] = Carbon::parse($data['events'][count($data['events']) - 1]['timestamp'])->diffForHumans();

        return response()->json($data);
    }
}
