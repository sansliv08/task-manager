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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('about', function() {
//     return view('about');
// });


Auth::routes();

Route::middleware(['auth'])->group(function() {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('todos', 'TodosController@index')->name('todos.index');

    Route::get('todos/{todo}', 'TodosController@show')->name('todos.show');

    Route::get('new-todo','TodosController@create');

    Route::post('store-todo','TodosController@store')->name('todos.store');

    Route::get('todos/{todo}/edit','TodosController@edit');

    Route::post('todos/{todo}/update','TodosController@update')->name('todos.update');

    Route::get('todos/{todo}/delete', 'TodosController@destroy');

    Route::get('todos/{todo}/complete', 'TodosController@complete');

    Route::get('categories', 'CategoriesController@index')->name('categories.index');

    Route::get('categories/{category}', 'CategoriesController@show')->name('categories.show');

    Route::get('categories/{category}/delete', 'CategoriesController@destroy');

    Route::get('new-category', 'CategoriesController@create');

    Route::post('store-category','CategoriesController@store')->name('categories.store');

    Route::get('categories/{category}/edit','CategoriesController@edit');

    Route::post('categories/{category}/update','CategoriesController@update')->name('categories.update');
});
