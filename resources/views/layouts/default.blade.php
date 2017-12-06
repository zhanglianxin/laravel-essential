<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title', '')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ url('/css/app.css') }}">
</head>
<body>
@include('layouts._header')
    <div class="container">
        <div class="col-md-offset-1 col-md-10">
@include('shared._messages')
@yield('content')
@include('layouts._footer')
        </div>
    </div>
    <script src="{{ url('/js/app.js') }}"></script>
</body>
</html>
