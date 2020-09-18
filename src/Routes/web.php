<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'auth'])
    ->namespace('ConfrariaWeb\TemplateDashboardArgon\Controllers')
    ->prefix('admin')
    ->name('dashboards')
    ->group(function () {

        Route::get('/', 'TemplateDashboardArgonController@index');

    });