<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backendController;
use App\Http\Controllers\frontendController;
use App\Livewire\Back\Dashboard;

// Route::get('/', function () {
//     return view('construction');
// });

// Route::get('/home', function () {
//     return view('welcome');
// });


Route::get('/', [frontendController::class, 'home'])->name('home');


Route::prefix('ds-admin')->group(function(){
  Route::get('/', [backendController::class, 'login'])->name('login');
  Route::post('/', [backendController::class, 'checklogin']);
  Route::get('dashboard', Dashboard::class)->name('dashboard')->middleware('auth');
  Route::get('logout', [backendController::class, 'logout'])->name('logout');
});



