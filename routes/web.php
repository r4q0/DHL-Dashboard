<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RenderController;
use Illuminate\Http\Request;

use function Termwind\render;

Route::get('/create', function () {
    return RenderController::renderCreate();
});

Route::post('/create', function (Request $request) {
    return RenderController::create($request);
});

