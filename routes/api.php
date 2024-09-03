<?php

use App\Http\Controllers\CityController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/getcity', [CityController::class, 'getcity']);
Route::get('/getusercity', [CityController::class, 'getusercity']);
Route::get('/getFood', [CityController::class, 'getFood']);
Route::get('/getHouses', [CityController::class, 'getHouses']);
Route::get('/getClothe', [CityController::class, 'getClothe']);
Route::get('/getHistory', [CityController::class, 'getHistory']);
Route::get('/getDestination', [CityController::class, 'getDestination']);
Route::get('/getNew', [CityController::class, 'getNew']);
Route::get('/getTown', [CityController::class, 'getTown']);
Route::get('/getArt', [CityController::class, 'getArt']);
Route::get('/getSong', [CityController::class, 'getSong']);
Route::get('/getLink', [CityController::class, 'getLink']);
Route::get('/getLevel', [CityController::class, 'getLevel']);
Route::get('/getFix', [CityController::class, 'getFix']);
Route::get('/getScenario', [CityController::class, 'getScenario']);
Route::get('/getCriminal', [CityController::class, 'getCriminal']);
Route::get('/getReligion', [CityController::class, 'getReligion']);
Route::get('/getAttribute', [CityController::class, 'getAttribute']);
Route::get('/getCityAttribute', [CityController::class, 'getCityAttribute']);
