<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\SecureHeaders;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\UserAuthenticate;
use App\Http\Controllers\ClearController;

Route::middleware([SecureHeaders::class])->group(function () {

 // Route::get('/clear-cache', [ClearController::class, 'clear']);
    Route::controller(ClientController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('/vision', 'vision');
        Route::get('/teams', 'teams');
        Route::get('team/view/{id}', 'teamsview');
        Route::get('/ceqube', 'ceqube');
        Route::get('/venus', 'venus');
        Route::get('/funds', 'funds');
        Route::get('/investmentStrategy', 'investment');
        Route::get('/sector', 'sector');
        Route::get('/login', 'login');
        Route::get('/newspaper', 'newspaper');
        Route::post('/savecontact', 'contactsave');
        Route::get('/partner', 'partner');
        Route::get('/policy', 'policy');
        Route::get('/disclaimer', 'disclaimer');
        Route::get('/termuse', 'termuse');
        Route::get('/Portfolio', 'portfilo');

        Route::get('/fundceqube', 'fundceqube');
        Route::get('/fundvenus', 'fundvenus');
    });

    Route::controller(AuthController::class)->group(function () {
        Route::get('/notify/{id}', 'notify');
        Route::get('/user/status/{id}', 'userstatus');
        Route::post('/saveuser', 'register');
        Route::post('/validate-credentials', 'Login')->name('validate-credentials');
        Route::get('/logout', 'Logout')->name('userlogout');
    });
    Route::middleware([UserAuthenticate::class])->group(function () {
      Route::controller(AdminController::class)->group(function () {
           Route::get('/dashboard', 'index')->name('admin.index');
            Route::get('/users', 'users');

            Route::get('/silder', 'silder');
            Route::post('/savesilder', 'savesilder');
            Route::get('/editsilder/{id}', 'silderedit');
            Route::post('/deletesilder', 'deletesilder');

            Route::get('/addteams', 'teams');
            Route::post('/saveteams', 'saveteams');
            Route::get('/editteams/{id}', 'teamsedit');
            Route::post('/deleteteams', 'deleteteams');

            Route::get('/addnewletter', 'newletter');
            Route::post('/savenewletter', 'savenewletter');
            Route::get('/editnewletter/{id}', 'newletteredit');
            Route::post('/deletenewletter', 'deletenewletter');
            
            Route::get('/addpartner', 'partner');
            Route::post('/savepartner', 'savepartner');
            Route::get('/editpartner/{id}', 'partneredit');
            Route::post('/deletepartner', 'deletepartner');

            Route::get('/addportfilo', 'portfilo');
            Route::post('/saveportfilo', 'saveportfilo');
            Route::get('/editportfilo/{id}', 'portfiloedit');
            Route::post('/deleteportfilo', 'deleteportfiloModel');


            Route::get('/addfundpdf', 'fundpdf');
            Route::post('/savefundpdf', 'savefundpdf');
            Route::get('/editfundpdf/{id}', 'fundpdfedit');
            Route::post('/deletefundpdf', 'deletefundpdf');
        });
    });
      
});