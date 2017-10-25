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

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/dashboard', 'DashboardController@showDashboard')->name('dashboard');
Route::get('/icons', 'IconsController@showIcons')->name('icons');
Route::get('/maps', 'MapsController@showMaps')->name('maps');
Route::get('/notifications', 'NotificationsController@showNotifications')->name('notifications');
Route::get('/table', 'TableController@showTable')->name('table');
Route::get('/template', 'TemplateController@showTemplate')->name('template');
Route::get('/typography', 'TypographyController@showTypography')->name('typography');
Route::get('/upgrade', 'UpgradeController@showUpgrade')->name('upgrade');
Route::get('/user', 'UserController@showUser')->name('user');

