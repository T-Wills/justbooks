@extends("layouts.app")

@section("content")
<div class="wrapper getbooks-table">
    <h2>Your Pick</h2>
    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Genre</th>
                <th scope="col">About</th>
                <th scope="col">Price</th>
            </tr>
        </thead>
        <tbody>
            <!--  @foreach($books_collection as $bookcollection) -->
            <tr>
                <td>
                    {{ $books_collection->title }}
                </td>
                <td>
                    {{ $books_collection->author }}
                </td>
                <td>
                    {{ $books_collection->genre }}
                </td>
                <td>
                    {{ $books_collection->about }}
                </td>
                <td>
                    {{ $books_collection->price }}
                </td>
            </tr>
            <!--  @endforeach -->
        </tbody>
    </table>
</div>
@endsection
