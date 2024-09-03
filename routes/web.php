<?php

use App\Http\Controllers\CriminalController;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\ArtController;
use App\Http\Controllers\AttributeController;
use App\Http\Controllers\FixController;
use App\Http\Controllers\CityAttributeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [FirstController::class, 'index']);

Route::controller(AuthController::class)->group(function (){
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function(){
    Route::get('dashboard', function(){
        return view('dashboard');
    })->name('dashboard');
    Route::controller(ViewController::class)->prefix('cities')->group(function(){
        Route::get('', 'index')->name('cities');
        Route::get('create', 'create')->name('cities.create');
        Route::post('store', 'store')->name('cities.store');
        Route::get('show/{id}', 'show')->name('cities.show');
        Route::get('edit/{id}', 'edit')->name('cities.edit');
        Route::put('edit/{id}', 'update')->name('cities.update');
        Route::delete('destroy/{id}', 'destroy')->name('cities.destroy');
    });

    Route::controller(AttributeController::class)->prefix('attributes')->group(function(){
        Route::get('', 'index')->name('attributes');
        Route::get('create', 'create')->name('attributes.create');
        Route::post('store', 'store')->name('attributes.store');
        Route::get('show/{id}', 'show')->name('attributes.show');
        Route::get('edit/{id}', 'edit')->name('attributes.edit');
        Route::put('edit/{id}', 'update')->name('attributes.update');
        Route::delete('destroy/{id}', 'destroy')->name('attributes.destroy');
    });

    Route::controller(CityAttributeController::class)->prefix('cityattributes')->group(function(){
        Route::get('', 'index')->name('cityattributes');
        Route::get('create', 'create')->name('cityattributes.create');
        Route::post('store', 'store')->name('cityattributes.store');
        Route::get('show/{id}', 'show')->name('cityattributes.show');
        Route::get('edit/{id}', 'edit')->name('cityattributes.edit');
        Route::put('edit/{id}', 'update')->name('cityattributes.update');
        Route::delete('destroy/{id}', 'destroy')->name('cityattributes.destroy');
    });

    Route::controller(LinkController::class)->prefix('links')->group(function(){
        Route::get('id/0', 'index')->name('links');
        Route::get('id/{id}', 'filter')->name('links.filter');
        Route::get('create', 'create')->name('links.create');
        Route::post('store', 'store')->name('links.store');
        Route::get('show/{id}', 'show')->name('links.show');
        Route::get('edit/{id}', 'edit')->name('links.edit');
        Route::put('edit/{id}', 'update')->name('links.update');
        Route::delete('destroy/{id}', 'destroy')->name('links.destroy');
    });

    Route::controller(ArtController::class)->prefix('arts')->group(function(){
        Route::get('id/0', 'index')->name('arts');
        Route::get('id/{id}', 'filter')->name('arts.filter');
        Route::get('create', 'create')->name('arts.create');
        Route::post('store', 'store')->name('arts.store');
        Route::get('show/{id}', 'show')->name('arts.show');
        Route::get('edit/{id}', 'edit')->name('arts.edit');
        Route::put('edit/{id}', 'update')->name('arts.update');
        Route::delete('destroy/{id}', 'destroy')->name('arts.destroy');
    });

    Route::controller(FixController::class)->prefix('fixes')->group(function(){
        Route::get('', 'index')->name('fixes');
        Route::get('create', 'create')->name('fixes.create');
        Route::post('store', 'store')->name('fixes.store');
        Route::get('show/{id}', 'show')->name('fixes.show');
        Route::get('edit/{id}', 'edit')->name('fixes.edit');
        Route::put('edit/{id}', 'update')->name('fixes.update');
        Route::get('show/{id}/createcity', 'createcity')->name('fixes.createcity');
        Route::post('show/{id}/storecity', 'storecity')->name('fixes.storecity');
        Route::get('show/{id}/editcity/{cityId}', 'editcity')->name('fixes.editcity');
        Route::put('show/{id}/editcity/{cityId}', 'updatecity')->name('fixes.updatecity');
        Route::delete('destroy/{id}', 'destroy')->name('fixes.destroy');
    });

    Route::controller(LevelController::class)->prefix('levels')->group(function(){
        Route::get('id/0', 'index')->name('levels');
        Route::get('id/{id}', 'filter')->name('levels.filter');
        Route::get('create', 'create')->name('levels.create');
        Route::post('store', 'store')->name('levels.store');
        Route::get('show/{id}', 'show')->name('levels.show');
        Route::get('edit/{id}', 'edit')->name('levels.edit');
        Route::put('edit/{id}', 'update')->name('levels.update');
        Route::delete('destroy/{id}', 'destroy')->name('levels.destroy');
    });

    Route::controller(CriminalController::class)->prefix('criminals')->group(function(){
        Route::get('', 'index')->name('criminals');
    });

    

});
