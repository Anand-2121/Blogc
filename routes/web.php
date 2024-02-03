<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});



//group of routes for admin
Route::prefix('admin')->group(function(){

    Route::get('/dashboard',[App\Http\controllers\Admin\DashboardController::class,('index')]);

});
