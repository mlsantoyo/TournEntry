<?php
use App\Tournaments;

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

Route::get('/', 'PagesController@index');
Route::get('/howto', 'PagesController@howto');
Route::get('/tournaments', 'PagesController@tournaments');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::resource('tournaments', 'TournamentsController');

