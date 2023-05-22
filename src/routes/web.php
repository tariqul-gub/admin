<?php

use Illuminate\Support\Facades\Route;
use TariqulGub\Admin\Controllers\HomeController;


Route::get('home', [HomeController::class, 'home'])->name('admin.home');