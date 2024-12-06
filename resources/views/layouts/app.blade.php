<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!--Tailwind CSS link start-->
    @vite('resources/css/app.css')
    <!--Tailwind CSS link end-->
</head>
<body>
    <header>
        @include('layouts.header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('layouts.footer')
    </footer>
</body>
</html>