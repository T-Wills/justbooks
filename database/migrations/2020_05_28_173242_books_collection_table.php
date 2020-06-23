<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BooksCollectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('books_collection', function (Blueprint $table) {
        $table->id();
        $table->string("title");
        $table->string("author");
        $table->string("genre");
        $table->string("desc");
        $table->string("img");
        $table->integer("price");
        $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('books_collection');
    }
}
