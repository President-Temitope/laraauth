<?php

use Illuminate\Support\Facades\Route;

Route::middleware('web')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('register', function () {
            return view('custom-auth::register');
        })->name('register');
        Route::post('register', function (\Illuminate\Http\Request $request) {
            dd($request);
        })->name('register.attempt');
    });
});
