<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StateController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
   Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');
   Route::get('/forms',[AdminController::class,'forms'])->name('forms');

   Route::get('/forms/country/add',[AdminController::class,'country_add'])->name('country.add');
   Route::post('/forms/country/add',[AdminController::class,'country_save'])->name('country.save');

   Route::get('/country/manage',[AdminController::class,'country_manage'])->name('country.manage');

   Route::get('/country/edit/{id}',[AdminController::class,'country_edit'])->name('country.edit');
   Route::post('/country/edit/{id}',[AdminController::class,'country_update'])->name('country.update');

   Route::post('/country/delete/{id}',[AdminController::class,'country_delete'])->name('country.delete');
   Route::get('/country/status/{id}',[AdminController::class,'country_status'])->name('country.status');


   Route::get('/state/add',[StateController::class,'state_add'])->name('state.add');
   Route::post('/state/add/save',[StateController::class,'state_save'])->name('state.save');

   Route::get('/state/manage',[StateController::class,'state_manage'])->name('state.manage');

   Route::get('/state/edit/{id}',[StateController::class,'state_edit'])->name('state.edit');
   Route::post('/state/edit/{id}',[StateController::class,'state_update'])->name('state.update');

   Route::post('/state/delete/{id}',[StateController::class,'state_delete'])->name('state.delete');

   Route::get('/state/status/{id}',[StateController::class,'state_status'])->name('state.status');


   Route::get('/city/add',[CityController::class,'city_add'])->name('city.add');
   Route::post('/city/add/save',[CityController::class,'city_save'])->name('city.save');


   Route::get('/city/manage',[CityController::class,'city_manage'])->name('city.manage');

   Route::get('/city/edit/{id}',[CityController::class,'city_edit'])->name('city.edit');
   Route::post('/city/edit/{id}',[CityController::class,'city_update'])->name('city.update');

   Route::post('/city/delete/{id}',[CityController::class,'city_delete'])->name('city.delete');
   Route::get('/city/status/{id}',[CityController::class,'city_status'])->name('city.status');


   Route::get('/user/add',[UserController::class,'user_add'])->name('user.add');
   Route::post('/user/save',[UserController::class,'user_save'])->name('user.save');
    Route::get('/user/manage',[UserController::class,'user_manage'])->name('user.manage');
    Route::get('/user/edit/{id}',[UserController::class,'user_edit'])->name('user.edit');
    Route::post('/user/edit/{id}',[UserController::class,'user_update'])->name('user.update');
    Route::post('/user/delete/{id}',[UserController::class,'user_delete'])->name('user.delete');

});
