<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['/resources/css/app.css'])
    @yield('styles')

</head>

<body>
    @include('navbar')
    <h1>Nav Bar</h1>
    @yield('mainContent')
    {{-- <img src="{{asset("images/mountains.jpg")}}" alt=""> --}}
</body>

</html>
