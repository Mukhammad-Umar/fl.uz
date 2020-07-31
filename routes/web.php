<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

/*
|--------------------------------------------------------------------------
| Frontend
|--------------------------------------------------------------------------|
*/ 
Route::prefix('')->namespace('Front')->group(function () {
    Route::get('/', 'FrontController@index')->name('index');
    Route::get('/admission', 'FrontController@admission')->name('admission');
    Route::get('/about', 'FrontController@about')->name('about');
    Route::name('gallery')->get('/gallery', 'FrontController@gallery');
    Route::name('contact')->get('/contact', 'FrontController@contact');
    Route::name('tocontact')->post('/tocontact', 'FrontController@tocontact');
});



/*
|--------------------------------------------------------------------------
| Enter to Admin
|--------------------------------------------------------------------------|
*/
Route::name('login')->get('/admin', 'Auth\LoginController@showLoginForm');
Route::post('/admin', 'Auth\LoginController@login');
Route::name('logout')->post('/logout', 'Auth\LoginController@logout');

Route::prefix('')->middleware('auth')->namespace('Back')->group(function(){
    Route::name('dashboard')->get('/dashboard', 'AdminController@index');

            /*  news part  */
    Route::name('admin-news')->get('/dashboard/news', 'NewsAdminController@news');
    Route::resource('news', 'NewsAdminController');
    Route::name('deleteone')->get('/dashboard/deleteone', 'NewsAdminController@deleteone');
    Route::name('upload')->post('/news/create', 'NewsAdminController@upload'); // upload news image
            /*  end of news part  */

    Route::name('admin-gallery')->get('/dashboard/gallery', 'AdminController@gallery');
    Route::name('admin-contact')->get('/dashboard/contact', 'AdminController@contact');

    Route::name('admin-user')->get('/dashboard/user', 'AdminController@user');
});