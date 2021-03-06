<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- CSRF Token -->
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}} <!-- Ha nem muszáj ne legyen itt -->

    <title>{{ $title ?? 'NamesAreOverrated' }}</title>

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="{{ asset('css/smoothproducts.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @stack('css')
    @stack('beforePageLoads')
</head>

<body>
    @include('components.navbar')

    <main class="page">
        @yield('content')
    </main>

    @include('components.footer')
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/bs-init.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="{{ asset('/js/smoothproducts.min.js') }}"></script>
    <script src="{{ asset('/js/theme.js') }}"></script>
    @stack('scripts') {{-- <script src="{{asset('js/pelda.js')}}" defer></script> A 'defer' kulcsszóval lehet megmondani, hogy a végén töltse be a script-et --}}
</body>

</html>
