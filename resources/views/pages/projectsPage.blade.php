 @extends('layout.app')
 @include('components.navbar')
 @section('content')
 <section class="resume-section" id="experience">
    <div class="resume-section-content">
        <h2 class="mb-5 text-white">Projects</h2>
        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
            <div class="flex-grow-1">
                <h3 class="mb-0 text-primary">Mobile Application Development</h3>
                <div class="subheading mb-3 text-white">OTTO</div>
                <a class=" text-primary"
                    href="https://www.figma.com/file/JwHoYqOKUH3lJe3Cmg5Z8X/Food-App?type=design&node-id=0%3A1&mode=design&t=YVSV5bOqNucAuT8u-1">Click
                    here to View</a>
                <p class="text-align-justify text-white">
                    In the 3rd-year project of my Bachelor's degree, I developed a system where a restaurant can
                    reduce their waiters. The basic idea was one person can go to a restaurant and order food
                    via a mobile application. The person has to pay digital money. when the food gets ready in
                    the kitchen then one robot will come kitchen and carry the food to the customer. The
                    application was built by the Flutter framework and I used the Firebase database for handling
                    the data. </p>
            </div>
            <div class="flex-shrink-0"><span class="text-primary">July 2012 - February 2023</span></div>
        </div>
        <div class="d-flex flex-column flex-md-row justify-content-between">
            <div class="flex-grow-1">
                <h3 class="mb-0 text-primary">Web Application</h3>
                <div class="subheading mb-3 text-white">Simple Clock</div>
                <a class=" text-primary" href="https://cute-figolla-013026.netlify.app/">Click here to View</a>
                <p class="text-white">A simple clock containing date and time along with other functionality using
                    HTML CSS </p>
            </div>
            <div class="flex-shrink-0"><span class="text-primary"> May 2023</span></div>
        </div>
        <div class="d-flex flex-column flex-md-row justify-content-between mt-5">
            <div class="flex-grow-1">
                <div class="subheading mb-3 text-white">FoodMania</div>
                <a class=" text-primary"
                    href="https://64b0a0e37f7c045fa5dc78ca--peppy-otter-891a33.netlify.app/">Click here to View</a>
                <p class="text-white">A simple Food Ordering website</p>
            </div>
            <div class="flex-shrink-0"><span class="text-primary"> May 2023</span></div>
        </div>
        <hr class="text-primary">
    </div>
</section>
 @endsection
 @section('footer')
 @include("components.footer")
 @endsection