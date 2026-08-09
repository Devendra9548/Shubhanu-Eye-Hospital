<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backendController;
use App\Http\Controllers\frontendController;
use App\Livewire\Back\Dashboard;
use App\Livewire\Back\Blogs;
use App\Livewire\Back\BlogCategory;
use App\Livewire\Back\Messages;
use App\Livewire\Back\Profile;
use App\Livewire\Back\Settings;
use App\Livewire\Back\Users;

Route::get('/', [frontendController::class, 'home'])->name('home');
Route::get('about', [frontendController::class, 'about'])->name('about');
Route::get('contact-us', [frontendController::class, 'contact'])->name('contact');
Route::get('gallery', [frontendController::class, 'gallery'])->name('gallery');
Route::get('case-studies', [frontendController::class, 'casestudies'])->name('casestudies');
Route::get('blog', [frontendController::class, 'blogs'])->name('blogs');
Route::get('blog/{slug}', [frontendController::class, 'singleblog'])->name('singleblog');


Route::prefix('ds-admin')->group(function(){
  Route::get('/', [backendController::class, 'login'])->name('login');
  Route::post('/', [backendController::class, 'checklogin']);
  Route::get('dashboard', Dashboard::class)->name('dashboard')->middleware('auth');
  Route::get('blogs', Blogs::class)->name('admin.blogs')->middleware('auth');
  Route::get('blogs-category', BlogCategory::class)->name('admin.blogcategory')->middleware('auth');
  Route::get('messages', Messages::class)->name('admin.messages')->middleware('auth');
  Route::get('profile', Profile::class)->name('admin.profile')->middleware('auth');
  Route::get('settings', Settings::class)->name('admin.settings')->middleware('auth');
  Route::get('users', Users::class)->name('admin.users')->middleware('auth');
  Route::get('logout', [backendController::class, 'logout'])->name('logout');
});



