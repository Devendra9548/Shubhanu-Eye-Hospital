<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backendController;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\InstagramController;
use App\Livewire\Back\Dashboard;
use App\Livewire\Back\Blogs;
use App\Livewire\Back\BlogCategory;
use App\Livewire\Back\Messages;
use App\Livewire\Back\Profile;
use App\Livewire\Back\Settings;
use App\Livewire\Back\Users;
use App\Models\Blog;
use Carbon\Carbon;

Route::get('/', [frontendController::class, 'home'])->name('home');
Route::get('about', [frontendController::class, 'about'])->name('about');
Route::get('contact-us', [frontendController::class, 'contact'])->name('contact');
Route::get('career', [frontendController::class, 'career'])->name('career');
Route::post('career', [frontendController::class, 'submitcareer']);
Route::post('booking', [frontendController::class, 'SubmitBooking']);
Route::post('submit-form', [frontendController::class, 'SubmitContact']);
Route::get('gallery', [frontendController::class, 'gallery'])->name('gallery');
Route::get('case-studies', [frontendController::class, 'casestudies'])->name('casestudies');
Route::get('privacy-policy', [frontendController::class, 'privacypolicy'])->name('privacypolicy');
Route::get('doctors', [frontendController::class, 'doctors'])->name('doctors');
Route::get('/doctors/{slug}', [frontendController::class, 'doctor'])->name('doctor.single');
Route::get('thank-you', [frontendController::class, 'thankyou'])->name('thankyou');
Route::get('terms-and-conditions', [frontendController::class, 'termsConditions'])->name('termsConditions');
Route::get('blog', [frontendController::class, 'blogs'])->name('blogs');
Route::get('blog/{slug}', [frontendController::class, 'singleblog'])->name('singleblog');
Route::get('/sitemap.xml', function () {
    $blogs = Blog::where('status', 1)->latest()->get();

    $staticLastmod = '2026-10-06T18:30:00+00:00';

    // [url, priority]
    $pages = [
        ['/',                    '1.0000'],
        ['/contact-us',          '0.8000'],
        ['/about',               '0.8000'],
        ['/gallery',             '0.8000'],
        ['/case-studies',        '0.8000'],
        ['/blog',                '0.8000'],
        ['/career',              '0.8000'],
        ['/terms-and-conditions','0.8000'],
        ['/privacy-policy',      '0.8000'],
    ];

    $xml  = '<' . '?xml version="1.0" encoding="UTF-8"?' . '>' . "\n\n";
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">' . "\n\n";

    foreach ($pages as [$path, $priority]) {
        $xml .= "  <url>\n";
        $xml .= '       <loc>' . e(url($path)) . "</loc>\n";
        $xml .= '       <lastmod>' . $staticLastmod . "</lastmod>\n";
        $xml .= '       <priority>' . $priority . "</priority>\n";
        $xml .= "  </url>\n";
    }

    foreach ($blogs as $blog) {
      try {
        $lastmod = $blog->updated_at
            ? Carbon::parse($blog->updated_at)->utc()->format('Y-m-d\TH:i:sP')
            : $staticLastmod;
    } catch (\Exception $e) {
        $lastmod = $staticLastmod;
    }

        $xml .= "  <url>\n";
        $xml .= '       <loc>' . e(url('/blog/' . $blog->slug)) . "</loc>\n";
        $xml .= '       <lastmod>' . $lastmod . "</lastmod>\n";
        $xml .= "       <priority>0.6000</priority>\n";
        $xml .= "  </url>\n";
    }

    $xml .= '</urlset>';

    return response($xml, 200)->header('Content-Type', 'application/xml');
});

Route::get('/instagram-feed', [InstagramController::class, 'feed'])
    ->name('instagram.feed');

Route::prefix('ds-admin')->group(function(){
  Route::get('/', [backendController::class, 'login'])->name('login');
  Route::post('/', [backendController::class, 'checklogin']);
  Route::get('dashboard', Dashboard::class)->name('dashboard')->middleware('auth');
  Route::get('blogs', Blogs::class)->name('admin.blogs')->middleware('auth');
  Route::get('blogs-category', BlogCategory::class)->name('admin.blogcategory')->middleware('auth');
  Route::post('add-blog-category', [backendController::class, 'addBlogCategory'])->middleware('auth');
  Route::post('delete-blog-category', [backendController::class, 'deleteBlogCategory'])->middleware('auth');
  Route::post('update-blog-category', [backendController::class, 'updateBlogCategory'])->middleware('auth');
  Route::get('messages', Messages::class)->name('admin.messages')->middleware('auth');
  Route::get('profile', Profile::class)->name('admin.profile')->middleware('auth');
  Route::get('settings', Settings::class)->name('admin.settings')->middleware('auth');
  Route::get('users', Users::class)->name('admin.users')->middleware('auth');
  Route::get('logout', [backendController::class, 'logout'])->name('logout');
  Route::post('add-blog', [backendController::class, 'addBlog']);
  Route::post('update-blog', [backendController::class, 'updateBlog']);
  Route::post('delete-blog', [backendController::class, 'deleteBlog']);
});



