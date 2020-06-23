@extends("layouts.layout")

@section("content")
<div class="flex-center position-ref full-height">
    @if(Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ route('home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if(Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="wrapper-card">
        <div class="card" style="width: 18rem">
            <div class="card-header">
                <div>
                    <svg class="bi bi-list" onclick="myFunction()" width="1.5em" height="1.5em" viewBox="0 0 16 16"
                        fill="currentColor">
                        xmlns="http://www.w3.org/2000/svg"
                        <path fill-rule="evenodd"
                            d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </div>
                <p class="text">ALL GENRE</p>
            </div>

            <ul class="list-group list-group-flush" id="myLinks">
                <li class="list-group-item"><a href="adventure">Adventure</a></li>
                <li class="list-group-item"><a href="business">Business</a></li>
                <li class="list-group-item"><a href="contemporary">Contemporary</a></li>
                <li class="list-group-item"><a href="religious">Religious</a></li>
                <li class="list-group-item"><a href="children">Children</a></li>
                <li class="list-group-item"><a href="art">Art</a></li>
                <li class="list-group-item"><a href="history">History</a></li>
                <li class="list-group-item"><a href="humor">Humor</a></li>
                <li class="list-group-item"><a href="politics">Politics</a></li>
                <li class="list-group-item"><a href="sci-fi">Sci-Fi</a></li>
            </ul>
        </div>
    </div>

    <div class="wrapper-content">
        <div class="content">
            <div class="box">
                <img src="/img/justbookslogo.jpg" alt="justbooks logo">
            </div>
            <div class="title m-b-md">
                JustBooks!<br />
                Nigeria's Best Books Place
            </div>
        </div>
    </div>

    <div class="books text-center">

    </div>

    <div class="text-center button-container">
        <a href="">View more products</a>
    </div>
</div>
@endsection
