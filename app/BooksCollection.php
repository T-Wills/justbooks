<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BooksCollection extends Model
{
    //

    protected $table="books_collection";

    public function getbooks() {
        return $this->belongsTo('App\Models\BooksCollection');
    }
  
}
