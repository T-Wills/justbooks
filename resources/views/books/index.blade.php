@extends("layouts.app")

@section("content")

<div class="wrapper book-index">
    <h1>Book orders</h1>
    @foreach($books as $book)
        <div class="book-item">
            <!--  <div class="pic"> -->
            <img src="/img/bookpic.jpg" alt="book icon">
            <!-- </div> -->
            <h4>
                <a href="/books/{{ $book->id }}">{{ $book -> name }}</a>
            </h4>
        </div>
    @endforeach
</div>

@endsection
