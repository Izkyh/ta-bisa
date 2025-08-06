<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT CAHAYA PERDANA MAKMUR</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    @stack('meta')
    @vite('resources/css/app.css')
    @stack('styles')
    @stack('head-scripts')

    <script src="https://kit.fontawesome.com/386b31f430.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')

    @stack('scripts')
</body>
</html>
