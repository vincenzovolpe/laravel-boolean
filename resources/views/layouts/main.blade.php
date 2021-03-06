<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Boolean.Careers</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        @include('layouts.menu')

        @yield('content-faq')

        @yield('content-jumbo')

        @yield('content-data')

        @include('layouts.footer')
        <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
    </body>
</html>
