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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index')->name('welcome');




Route::get('/connexion', function () {
    return view('login');
});

Route::get('/incripstion', function () {
    return view('signup');
});



Route::post('/newsletter/subscribe', 'NewsletterController@store')->name('newsletter');

// Contact Us Route

Route::get('/contact-us', 'ContactController@index')->name('contact');

// Submit Contact Us Form Route

Route::post('/contact-us/store', 'ContactController@store')->name('contact.store');

// Article View Route

Route::get('/publications', 'ArticleController@index')->name('publications');
Route::get('/publications/{id}', 'ArticleController@show')->name('publications.show');

Route::get('/partner', 'PartnerController@index')->name('partner');
Route::get('/partner/{id}', 'PartnerController@show')->name('partner.show');

Route::get('/sommes-nous', 'PartnerController@sommes')->name('partner.sommes');
