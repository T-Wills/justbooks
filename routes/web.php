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
    return view('welcome');/* ->with(['books_genre' => \App\GenreCategory::all()]);  */
});

Route::get('logout', "Auth\LoginController@logout", function () {
    return abort(404);
});

Route::get("/books", "BooksController@index")->name("books.index")->middleware("auth");

Route::get("/books/create", "BooksController@create")->name("books.create");

Route::post("/books", "BooksController@store")->name("books.store");

Route::get("/books/getbooks/{id}", "BooksCollectionController@getbooks")->name("books.getbooks");

Route::get("/books/{id}", "BooksController@show")->name("books.show")->middleware("auth");

//displaying data inside dropdown
Route::get("/welcome", "GenreCategoryController@retrieve")->name("welcome.retrieve");
/* 
Route::get("/welcome", "BooksCollectionController@get")->name("welcome.get"); */

Route::delete("/books/{id}", "BooksController@destroy")->name("books.destroy")->middleware("auth");

Auth::routes([
    
    "register"=>true
]);

Route::get('/home', 'HomeController@index')->name('home');
