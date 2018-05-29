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

Route::view('/',        'pages.home')   ->name('home');
Route::view('/about',   'pages.about')  ->name('about');
Route::view('/blog',    'pages.blog')   ->name('blog');
Route::view('/contact', 'pages.contact')->name('contact');

Route::post('/lead', [
    'as'    =>  'createLead',
    'uses'  =>  'LeadController@create'
]);

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('adminLogin');