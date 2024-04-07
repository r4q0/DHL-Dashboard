<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DhlController;
use App\Http\Controllers\RenderController;
use Illuminate\Http\Request;

Route::get('/test', function () {
    return DhlController::scrapeDHL('JJD000090254011014512771', '8011CJ');
});


Route::get('/', function () {
    return RenderController::renderDashboard();
});

Route::get('/create', function () {
    return RenderController::renderCreate();
})->name('create');

Route::post('/create', function (Request $request) {
    return RenderController::create($request);
});

