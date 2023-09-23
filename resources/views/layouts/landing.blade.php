<!DOCTYPE html>
<html lang="en" data-theme="cmyk">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('pic/home.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <title>@yield('title')</title>
</head>
<body>

    <x-navbar/>
    @yield('content')


<script src="https://cdn.jsdelivr.net/npm/theme-change@2.0.2/index.js"></script>

{{-- Swipper --}}
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".mySwiper", {});
</script>

</body>
</html>
