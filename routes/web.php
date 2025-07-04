<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard;
use App\Livewire\ViewAnalasy;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/viewanalasy/{id}',ViewAnalasy::class )->name('viewanalasy');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', Dashboard::class )->name('dashboard');
});
