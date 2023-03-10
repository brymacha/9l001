<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: 'Poppins';
        }
    </style>
</head>

<body class="bg-gray-100">
    @include('layouts.nav')

    <div class="w-full h-full py-2 px-4 mt-3 flex justify-center ">
        @yield('contents')
    </div>

</body>

</html>
