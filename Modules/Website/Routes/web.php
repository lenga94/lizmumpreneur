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

Route::prefix('website')->group(function() {
    Route::get('/coming-soon-page', 'WebsiteController@comingSoonPage')->name('comingSoonPage');
    Route::post('/store-client-for-updates', 'WebsiteController@storeNewClientForUpdates')->name('storeNewClientForUpdates');
    Route::get('/view-template', 'WebsiteController@viewTemplate')->name('viewTemplate');
});
