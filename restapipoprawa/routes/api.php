<?php

use App\Http\Controllers\PeopleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/Gorski/305361/people', [PeopleController::class, 'index']);
Route::post('/Gorski/305361/people', [PeopleController::class, 'create']);
Route::get('/Gorski/305361/people/{people}', [PeopleController::class, 'show']);
Route::delete('/Gorski/305361/people', [PeopleController::class, 'delete']);
Route::put('/Gorski/305361/people/{people}', [PeopleController::class, 'update']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
