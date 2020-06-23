<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;
use App\BooksCollection;
use App\GenreCategory;

class BooksController extends Controller
{

    //index controller
    public function index() {

    $books = Books::all();

   return view("books.index", [
       "books"=> $books
    ]);
 }
     //show controller
     public function show($id) {
        //query the db for a record with the books id
        $book = Books::findOrFail($id);

        return view("books.show", ["book" => $book]);
     }

     public function create(){
         return view("books.create");
     }

     public function store() {
         //save book records to the DB
         $books = new Books();

         $books->name = request("name");
         $books->genre = request("genre");
         $books->title = request("title");

         $books->save();
        
         return redirect("/books/getbooks")->with("message", "Thanks for your order");
     } 

      //get data from DB
   /*  public function getbooks($id){
    $bookcollection = BooksCollection::findOrFail($id);
    return view('books.getbooks',['books_collection'=> $bookcollection]); 
    } */

    //get data from DB and display in view dropdown
   /*  public function retrieve(){
        $books_genre = GenreCategory::all();
        return view("/welcome",["genre_categories" => $books_genre]);
    } */

    //retrieve image from db
   /*  public function get() {
        $bookcollection = BooksCollection::all();
        return view("/welcome", ["books_collection" => $bookcollection]);
    } */
 
     public function destroy($id) {
        //delete a record from the DB
        $book = Books::findOrFail($id);
        $book -> delete();

        return redirect("/books");
     }
}
