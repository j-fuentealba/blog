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

Route::redirect('/', 'blog');

Auth::routes();

//Parte Web (Vistas Cliente)
Route::get('blog', 'Web\PageController@index')->name('blog');
Route::get('blog/{slug}', 'Web\PageController@show')->name('blog.show');
Route::get('categoria/{slug}', 'Web\PageController@category')->name('category');
Route::get('etiquetas/{slug}', 'Web\PageController@tag')->name('tag');

//Parte Admin (Vistas Admin)

