<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'auth'])
    ->namespace('ConfrariaWeb\TemplateDashboardArgon\Controllers')
    ->group(function () {

        Route::get('admin', 'TemplateDashboardArgonController@index');
        Route::get('dashboard', 'TemplateDashboardArgonController@index')->name('dashboard');

    });