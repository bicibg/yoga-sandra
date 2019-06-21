<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/','PagesController@home')->name('pages.home');


Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::resource('pages', 'PagesController');
    Route::get('admin','PagesController@index')->name('pages.index');
});

Route::get('{page}','PagesController@show')->name('pages.show');
Route::post('kontakt', 'PagesController@contact')->name('pages.contact');

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});
