<?php

use Illuminate\Support\Facades\Route;

Route::get('/skills', function () {
    return view('pages.skills');
});
