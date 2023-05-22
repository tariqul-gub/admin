<?php

use Illuminate\Support\Facades\Route;

Route::get('admin1', function () {
    return view('admin::tm1.master');
});
