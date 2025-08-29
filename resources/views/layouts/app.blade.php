<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white dark:bg-[#191919]">
    @include('partials.header')

    @yield('content')

    @include('partials.footer')
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
