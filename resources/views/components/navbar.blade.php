@extends('layout.app')
@section('navbar')
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">PROMIT BHATTACHARJEE</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2"
                        src="{{asset('profile.webp')}}" /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="home">Home</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="about">About Me</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="education">Education</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="contact">Contact</a></li>
                </ul>
            </div>
        </nav>
        @endsection