@extends('layout.app')
@include("components.navbar")
@section("content")
<section class="resume-section row" id="home">
    <div class="resume-section-content">
        <h1 class="mb-0 text-light">
            <span class="text-shadow">PROMIT</span>
            <span class="text-primary">BHATTACHARJEE</span>
        </h1>
        <div class="subheading mt-4 text-primary mb-5">
            Web developer | Backend Developer | Programmer
        </div>
        <div class="resume-section-icnos m-2">
            <div class="social-icons d-flex align-content-center">
                <a class="social-icon bg-secondary"
                    href="https://www.linkedin.com/in/promit-bhattacharjee-59a1a4282/"><i
                        class="fab fa-linkedin-in"></i></a>
                <a class="social-icon bg-secondary"
                    href="https://github.com/promyth21?tab=overview&from=2023-07-01&to=2023-07-03"><i
                        class="fab fa-github"></i></a>
                <a class="social-icon bg-secondary" href="https://wa.me/8801798142951"><i
                        class="fab fa-whatsapp"></i></a>
            </div>
        </div>
        <div class="resume-section-btn d-flex justify-content-start mt-3">
            <a class="text-decoration-none px-5 rounded-pill text-white py-3 m-2 btn btn-outline-primary"
                href="tel:+8801798142951" target="_blank">Call Me</a></a>
            <a class="h-100 text-decoration-none rounded-pill text-white p-3 m-2 btn btn-outline-primary"
            href="https://docs.google.com/document/d/1ZmbMWRGt246muJHit2N1JWhU6LenLkmov5BD0yXn0WQ/export?format=pdf" download="document.pdf">Download Resume</a></a>

        </div>
    </div>
    </div>
    <hr class="text-primary">
</section>
@endsection
@section('footer')

@include("components.footer")
@endsection