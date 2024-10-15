<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NewsletterController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/academic', [PageController::class, 'accademic'])->name('accademic');  // Double-check spelling
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/publication', [PageController::class, 'publication'])->name('publication');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/donation', [PageController::class, 'donation'])->name('donation');



Route::post('/news', [NewsController::class, 'store'])->name('news.store');
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');

Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');

});

require __DIR__.'/auth.php';
