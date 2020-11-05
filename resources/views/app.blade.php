<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">
    </head>
    <body>
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="https://escuela-emprendedores.alegra.com/wp-content/uploads/2018/08/inventario.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
            Inventory
        </a>
    </nav>
    <div id="app">

        @yield('content')
    </div>
    </body>
    <footer>
        <script src="{{ asset(mix('js/app.js')) }}"></script>
    </footer>
</html>
