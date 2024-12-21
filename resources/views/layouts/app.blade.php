<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Favicon link starts-->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <!--Favicon link ends-->

    <title>@yield('title')</title>

    <!--Tailwind CSS link starts-->
    @vite('resources/css/app.css')
    <!--Tailwind CSS link ends-->

    <!--Font awesome link starts-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Font awesome link ends-->

    <!--Swiper.js styles starts-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!--Swiper.js styles ends-->
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

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Swiper.js script -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
    @stack('scripts')
</body>
</html>