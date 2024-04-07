<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RenderController;
use Illuminate\Http\Request;

use function Termwind\render;


Route::get('/', function () {
    return RenderController::renderDashboard();
});

Route::get('/create', function () {
    return RenderController::renderCreate();
})->name('create');

Route::post('/create', function (Request $request) {
    return RenderController::create($request);
});

