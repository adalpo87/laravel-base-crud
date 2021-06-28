<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\MockObject\Rule\InvokedAtIndex;

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

Route::get('/', 'PageController@index')->name('home');

Route::resource('comics', 'ComicController');



/* Route::get('/comics', 'PageController@comics')->name('comics');

Route::get('/newcomics', 'PageController@newcomics')->name('newcomics'); */