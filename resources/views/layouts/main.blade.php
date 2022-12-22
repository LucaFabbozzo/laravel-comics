<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/js/app.js')

    <title>Laravel Vite Comics | @yield('title')</title>
</head>
<body>
    @include('partials.header')

    @include('partials.jumbo')

    @yield('content')


     @include('partials.links')

     @include('partials.footer')

</body>
</html>
