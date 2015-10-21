<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Laravel | Eloquent ORM</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <style>
            body{
                margin-top: 50px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <a href="{{ route('home') }}" class="navbar-brand">Eloquent ORM</a>
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="jumbotron">
            <div class="container">
                <h1>Curso Eloquent ORM</h1>
                <p>Texto</p>
            </div>
        </div>
        <div class="container">
            @yield('content')
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>
