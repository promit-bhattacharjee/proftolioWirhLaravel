<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Promit Bhattacharjee</title>

    <!-- Bootstrap CSS CDN -->
    <link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('styles.css')}}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="{{ asset('https://use.fontawesome.com/releases/v5.15.4/js/all.js') }}" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css') }}">
    

</head>

<body class="bg-black">
    <div>
        @yield('navbar')
    </div>
    <div>
        @yield('content')
    </div>
    <div>
        @yield('footer')
    </div>
    <!-- Your Laravel Blade content goes here -->
    <!-- Bootstrap JS and Popper.js CDN -->
   <!-- Bootstrap JS and Popper.js CDN -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <!-- Your additional scripts go here -->

</body>

</html>