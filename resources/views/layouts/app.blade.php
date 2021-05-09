<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-4.6.0-dist/css/bootstrap.min.css') }}">
    {{-- Fontawesome --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome-5.14.0/css/all.css') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/frontend.css') }}">
    <style>
        html {
            scroll-behavior: smooth;
        }
        body {
            background-color: #eaeaea;
        }
    </style>
    @stack('style')
</head>
<body>
    <div id="app">
        <x-nav_default></x-nav_defualt>
        <main>
            @yield('content')
            <footer>
                <hr>
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <p class="text-left">Presented by Yoni Widhi &copy; {{ date('Y', time()) }}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="text-right">Made with <i class="fas fa-heart"></i> by Open Source Developer</p>
                        </div>
                    </div>
                </div>
            </footer>
        </main>

    </div>

    {{-- jQuery --}}
    <script src="{{ asset('assets/vendor/jquery-3.6.0.min.js') }}"></script>
    {{-- Popper.js --}}
    <script src="{{ asset('assets/vendor/popper-1.14.7.min.js') }}"></script>
    {{-- Bootstrap --}}
    <script src="{{ asset('assets/vendor/bootstrap-4.6.0-dist/js/bootstrap.min.js') }}"></script>
    @stack('script')
</body>
</html>
