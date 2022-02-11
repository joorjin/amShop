<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {

    return view('blog-list');
});


Route::any('test',[TestController::class,'test']);
