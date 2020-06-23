@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <p><a href="/books"> View all book orders</a></p>
                </div>
            </div>
        </div>

        <div class="wrapper-form">
            <form>
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name">
                <br />
                <label for="genre">Select Book Genre:</label>
                <select name="genre" id="name">
                    <option value="adventure">Adventure</option>
                    <option value="romance">Romance</option>
                    <option value="humor">Humor</option>
                    <option value="business">Business</option>
                    <option value="religious">Religious</option>
                    <option value="sci-fi">Sci-fi</option>
                    <option value="contemporary">Contemporary</option>
                    <option value="thriller">Thriller</option>
                    <option value="fantasy">Fantasy</option>
                    <option value="mystery">Mystery</option>
                    <option value="art">Art</option>
                    <option value="children">Children</option>
                    <option value="history">History</option>
                </select>
                <br />
                <label for="name">Price:</label>
                <input type="text" id="price" name="price">
                <br />
                <label for="title">Title:</label>
                <input type="text" id="title" name="title">
                <br />
                <label for="author">Author:</label>
                <input type="text" id="author" name="author">
                <br />
                <label for="title">About:</label>
                <textarea name="comment">Enter text here...</textarea>
            </form>
        </div>
    </div>
</div>
@endsection
