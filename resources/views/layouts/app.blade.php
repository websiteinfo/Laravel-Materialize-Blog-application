<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed&amp;subset=latin-ext" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>{{config('app.name', 'Laravel-MaterializeCSS Blog')}}</title>
        <style> html, body, button, .btn {font-family: 'Saira Semi Condensed', sans-serif;}</style>
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            <br>
        @include('inc.messages')
        @yield('content')
        </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
        $(".dropdown-trigger").dropdown();     
    </script>
    </body>
</html>