@extends("layouts.layout")

@section("content")
<div class="flex-center position-ref full-height">

</div>
<div class="content">
    <div class="title1 m-b-md">
        List of Books
    </div>

    <div class="output">

        @foreach($books as $book)
            <div>

                {{ $book -> name }} - {{ $book -> genre }} - {{ $book -> title }}

            </div>
        @endforeach
    </div>
</div>
</div>
@endsection
