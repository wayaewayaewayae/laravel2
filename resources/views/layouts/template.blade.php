<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan Blade Templeting</title>
</head>
<body>

    {{--nav--}}
    @include('layouts.nav')
    {{--End Nav--}}

    @yield('konten')
    <footer>Latihan Blade Templating</footer>
</body>
</html>
