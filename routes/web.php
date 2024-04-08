<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DhlController;
use App\Http\Controllers\RenderController;
use Illuminate\Http\Request;

Route::get('/test', function () {
    return DhlController::scrapeDHL('JJD000090254011014512771', '8011CJ');
});

Route::get('/order/{id}', function ($id) {
    return RenderController::renderOrder($id);
})->name('order');

Route::get('/', function () {
    return RenderController::renderDashboard();
})->name('welcome');

Route::get('/create', function () {
    return RenderController::renderCreate();
})->name('create');

Route::post('/create', function (Request $request) {
    return RenderController::create($request);
});

Route::get('/remove/{id}', function ($id) {
    return RenderController::removeOrder($id);
})->name('remove');
