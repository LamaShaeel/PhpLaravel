<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        body {
            background: #f3f7ff;
        }
        a{
            text-decoration: none;
        }

    </style>
</head>
<body dir="rtl">
    <div id="app">
        <nav class="navbar navbar-expand-lg" style="background: #012842">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="#">Lama</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"> </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{route('welcome')}}">الرئيسية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="{{route('itemsgroup')}}">مجموعات العناصر</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{route('ShowItem')}}">العناصر</a>
                        </li>
                    </ul>
                </div>

                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <h3 class="nav-link active text-white" aria-current="page" href="#"
                                style="font-family: cairo;">معسكر طويق</h3>

                        </li>
                    </ul>
                </div>

                <div>

                    @if(Auth::guest())
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <button type="button" class="btn btn-primary">
                                    <a href="{{route('checkout')}}">
                                        <i class="bi bi-cart-fill text-white p-2" ></i> <span class="badge bg-danger">{{Session::get('countitems')}}</span>
                                    </a>
                                </button>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link active text-white" aria-current="page" href="{{route('login')}}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{route('register')}}">Register</a>
                            </li>

                        </ul>
                    @else
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <button type="button" class="btn btn-primary">
                                    <a href="{{route('checkout')}}">
                                        <i class="bi bi-cart-fill text-white p-2" ></i> <span class="badge bg-danger">{{Session::get('countitems')}}</span>
                                    </a>
                                </button>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link active text-white" aria-current="page" href="{{route('logout')}}">Logout</a>
                            </li>

                        </ul>
                    @endif
                </div>
           </div>
    </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
