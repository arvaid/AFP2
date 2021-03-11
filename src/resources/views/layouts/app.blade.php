@push('css')
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="{{ asset('css/smoothproducts.css') }}">
@endpush

@push('fonts')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
@endpush

@push('icons')
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/simple-line-icons.min.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/bs-init.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="{{ asset('/js/smoothproducts.min.js') }}"></script>
    <script src="{{ asset('/js/theme.js') }}"></script>
@endpush


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    
    @hasSection('title')
        <title>@yield('title')</title>
    @endif
    
    @stack('css')
    @stack('fonts')
    @stack('icons')
</head>

<body>
    @include('components.navbar')
    
    @hasSection('main')
        @yield('main')
    @endif
    
    @include('components.footer')
    
    @stack('scripts')
</body>

</html>