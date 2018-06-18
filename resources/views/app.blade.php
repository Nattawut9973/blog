<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>blog - @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <style>

    </style>
</head>
<body>
<div class="container-fluid">
    @include('partial.navbar')
    @yield('content')
</div>

</body>
</html>
