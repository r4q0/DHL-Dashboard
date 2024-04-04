<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function () {
    $tracking = $_GET['tracking'];
    $zipcode = $_GET['zipcode'];
    return (new MainController)->scrapeDHL($tracking, $zipcode);
});
