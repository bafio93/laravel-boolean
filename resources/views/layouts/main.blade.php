<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Working page</title>
        <link rel="stylesheet" href="{{ asset('app.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/d9af4a4df9.js" crossorigin="anonymous"></script>
    </head>
    <body>
        @yield("content")
        <script src="{{ asset('app.js') }}" type="text/javascript"></script>
    </body>
</html>
