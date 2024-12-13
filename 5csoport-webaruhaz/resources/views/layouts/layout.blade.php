<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', '5csoport Webshop')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @yield('style')
</head>
<body>
@include('includes.header')
@yield('content')
@include('includes.footer')
<script scr="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.bundle.min.js"></script>
</body>
</html>
