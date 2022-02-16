<?php

use Illuminate\Support\Facades\Route;
use app\http\controllers\testcontroller;
use app\http\controllers\writercontroller;


Route::get('/', function () {

    return view('blog-list');
});

Route::any('writerslogin',[writercontroller::class,'writerslogin']);
