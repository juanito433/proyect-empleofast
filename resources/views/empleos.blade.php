<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empleos Fast</title>
    <title>@yield('title')</title>
    <x-navbar />
</head>

<body style="width: 100%; overflow-x: hidden;">

    <x-filter />
    <x-trabajos />
    <x-modal/>
    @yield('content')
</body>
<x-footer />

</html>
