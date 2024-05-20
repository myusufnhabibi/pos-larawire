<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Profile;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('login');
});

Route::middleware('auth')->group(function () {
    Route::get("/home", Home::class)->name("home");
    Route::get("/profile", Profile::class)->name("profile");
    Route::get("/logout", Login::class)->name("logout");
});

Route::middleware('guest')->group(function () {
    Route::get("/login", Login::class)->name("login");
});
