@extends("layouts.app")

@section("content")
<div class="wrapper book-details">
    <h1>Order for {{ $book -> name }} </h1>
    <p class="type"> Genre - {{ $book->genre }} </p>
    <p class="titlee"> Title - {{ $book->title }} </p>
</div>
<form action="{{ route('books.destroy', $book->id) }}" method="POST">
    @csrf
    @method("DELETE");
    <button>Complete order</button>
</form>
<a href="/books" class="back"> Return to all books </a>
@endsection
