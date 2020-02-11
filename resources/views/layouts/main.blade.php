<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Working page</title>
        <link rel="stylesheet" href="{{ asset('app.css') }}">
    </head>
    <body>
        @yield("content")
        <script src="{{ asset('app.js') }}" type="text/javascript"></script>
    </body>
</html>
