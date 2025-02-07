<?php

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
Auth::routes();

// Homepage
Route::get('/', [PagesController::class, 'home'])->name('pages.home');

// Public Routes
Route::post('kontakt', [PagesController::class, 'contact'])->name('pages.contact');

// This must be at the end to avoid conflicts
Route::get('{page}', [PagesController::class, 'show'])->name('pages.show');


Route::get('/preview/{slug}', function (Request $request, $slug) {
    $page = Page::where('slug', $slug)->firstOrNew();

    return view('pages.show', ['page' => $page]);
})->name('preview.page');
