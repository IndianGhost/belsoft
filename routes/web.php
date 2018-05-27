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


Route::get('/', [
    'as'    =>  'home',
    'uses'  =>  'RouteController@home'
]);

Route::get('/about', [
    'as'    =>  'about',
    'uses'  =>  'RouteController@about'
]);

Route::get('/blog', [
    'as'    =>  'blog',
    'uses'  =>  'RouteController@blog'
]);

Route::get('/contact', [
    'as'    =>  'contact',
    'uses'  =>  'RouteController@contact'
]);

Route::post('/lead', [
    'as'    =>  'createLead',
    'uses'  =>  'LeadController@create'
]);
Auth::routes();

Route::get('/admin', 'HomeController@index')->name('adminLogin');