<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto del Mundo</title>
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
</head>
<body style="background-color: #CEE4E0;">
    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Proyecto de Ciudades</a>
        <div class="collapse navbar-collapse justify-content-between " id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/ciudades">Ciudades</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="/paises">Países</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            @guest
            <li class="nav-item">
                <a class="nav-link active" href="/register">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/login">Login</a>
            </li>
            @endguest

            @auth
            <li class="nav-item">
                <p class="nav-link active m-0" href="#">Bienvenid@, {{auth()->user()->username}}</p>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/logout">Logout</a>
            </li>
            @endauth
        </ul>
        </div>
    </div>
    </nav>

    @yield('datos')
</body>
</html>