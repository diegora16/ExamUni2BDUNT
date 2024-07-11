<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="mx-auto container">

<!-- Título antes del header -->
<div class="bg-gray-800 text-white py-4 mt-8 text-center">
    <p>Autor: Diego Alessandro Ramos Armas</p>
</div>

@include('header')

@yield('content')

</body>
</html>
