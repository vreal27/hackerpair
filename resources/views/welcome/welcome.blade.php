@extends('layouts.app')

@section('Nav')
    <nav class="navbar navbar-expand-lg navbar-custom navbar-static-top" style="background-color: rgb(13, 33, 51);">
        <div class="container">
            <a href="http://hackerpair.test" class="logo">HackerPair</a>
            
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-toggle="Toggle navigation" class="navbar-toggler collapsed">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navbarSupportedContent" class="navbar-collapse collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="http://hackerpair.test/events" class="nav-link">Events</a>
                    </li>
                    <li class="nav-item">
                        <a href="http://hackerpair.test/locations" class="nav-link">Locations</a>
                    </li>
                    <li class="nav-item">
                        <a href="http://hackerpair.test/categories" class="nav-link">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a href="http://hackerpair.test/about" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="http://hackerpair.test/contact" class="nav-link">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="http://hackerpair.test/book" class="nav-link">The Book</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item">
                         <a href="http://hackerpair.test/login" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="http://hackerpair.test/register" class="nav-link">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@endsection

@section('Welcome')
    <div class="container">
        <h1 id="HomeTitle">Build Faster with HackerPair</h1>

        <h2 id="HomeSub">
            Learn, teach, hack, and make friends with developers in your city.
        </h2>
    </div>
    

@endsection 

@section('advertisment')
    @parent
        <p>
            HackerPair members always get 10% off at Tron Cafe!
        </p>
@endsection


