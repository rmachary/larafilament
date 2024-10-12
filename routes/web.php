<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/academic', [PageController::class, 'accademic'])->name('accademic');  // Double-check spelling
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/publication', [PageController::class, 'publication'])->name('publication');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/donation', [PageController::class, 'donation'])->name('donation');


Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
Route::post('/news', [NewsController::class, 'store'])->name('news.store');
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');

Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
