<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top|fixed-bottom|sticky-top py-0">
        <div class="container app-menu">
            <a class="navbar-brand" href="../index.html">logo</a>
            <button class="navbar-toggler hidden-lg-up" type="button" data-bs-toggle="collapse" data-bs-target="#nav__bar" aria-controls="nav__bar" aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse justify-content-end" id="nav__bar">
                <ul class="navbar-nav ">
                    @if(Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('create')}}">Signup</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('login')}}">Signin</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <form action="{{route('user-logout')}}" method="POST">
                            @csrf
                            <button type="submit" class="btn">Logout</button>
                        </form>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
