@extends("layouts.app")

@section("content")
<div class="wrapper create-book">
    <h1>Insert Your Request</h1>
    <form action="/books" method="POST">
        <!-- cross-site request forgery -->
        @csrf
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name">
        <label for="genre">Select Book Genre:</label>
        <select name="genre" id="genre" placeholder="select a genre">
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
        <label for="title">Title of Book:</label>
        <input type="text" id="title" name="title">
        <input type="submit" value="Place an order">
    </form>
    <p class="mssg">{{ session("message") }} </p>
</div>

@endsection
