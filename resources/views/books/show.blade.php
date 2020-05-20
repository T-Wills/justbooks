@extends("layouts.layout")

@section("content")
<div class="wrapper book-details">
    <h1>Order for {{ $book -> name }} </h1>
    <p class="type"> Genre - {{ $book->genre }} </p>
    <p class="title"> Title - {{ $book->title }} </p>
</div>
<a href="/books" class="back">
    <- Return to all books </a>
        @endsection
