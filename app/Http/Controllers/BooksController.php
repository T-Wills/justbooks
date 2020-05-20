<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;

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
        $book = Books::findOrfail($id);

        return view("books.show", ["book" => $book]);
     }

     public function create(){
         return view("books.create");
     }

     public function store() {
         //save book records to the DB
         $book = new book();

         $book->name = request("name");
         $book->genre = request("name");
         $book->title = request("name");

         $book->save();
        
         return redirect("/")->with("message", "Thanks for your order");
     }
}
