<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AMTRAK</title>
    <link rel="icon" type="image/x-icon" href="{{ Vite::asset('resources/img/Amtrak-Emblem.jpg') }}">

    @vite('resources/js/app.js')
</head>
<body>

    @include('partials/header')
    
    @yield('content')

</body>
</html>