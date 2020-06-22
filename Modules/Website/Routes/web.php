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

    //website homepage route
    Route::get('/home', 'WebsiteController@websiteHomePage')->name('websiteHomePage');

    //website application page routes
    Route::get('/host-organisation-application/', 'WebsiteController@hostOrganisationApplicationPage')->name('hostOrganisationApplicationPage');
    Route::get('/intern-application/', 'WebsiteController@internApplicationPage')->name('internApplicationPage');

    //website application confirmation page routes
    Route::get('/host-organisation-application-confirmation/{id}/', 'WebsiteController@hostOrganisationApplicationConfirmationPage')->name('hostOrganisationApplicationConfirmationPage');
    Route::get('/intern-application-confirmation/{id}/', 'WebsiteController@internApplicationConfirmationPage')->name('internApplicationConfirmationPage');

    //website terms and conditions page route
    Route::get('/terms-and-conditions', 'WebsiteController@termsAndConditions')->name('termsAndConditionsPage');

    //website about page route
    Route::get('/about', 'WebsiteController@aboutPage')->name('aboutPage');

    //website contact page route
    Route::get('/contact', 'WebsiteController@contactPage')->name('contactPage');

    //website youth leader page route
    Route::get('/youth-leader', 'WebsiteController@youthLeadersPage')->name('youthLeadersPage');

    //website alumni page route
    Route::get('/alumni', 'WebsiteController@alumniPage')->name('alumniPage');

    Route::post('/store-client-for-updates', 'WebsiteController@storeNewClientForUpdates')->name('storeNewClientForUpdates');

});


