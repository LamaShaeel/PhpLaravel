{{--// creting dashbored
      1- we copied the whole app code.
      2- working in main section
      --}}

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
</head>
<body dir="rtl">
<div id="app">
    <nav class="navbar navbar-expand-lg" style="background: #012842">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">Lama</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="{{route("welcome")}}">الرئيسية </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="{{route('itemsgroup')}}">مجموعات العناصر</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">العناصر</a>
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
                        <a class="nav-link active text-white" aria-current="page" href="{{route('login')}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('register')}}">Register</a>
                    </li>
                   </ul>
                @else
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active text-white" aria-current="page" href="{{route('logout')}}">Logout</a>
                            </li>
                        </ul>
                @endif
            </div>
        </div>
    </nav>

    <main class="py-0"  dir="ltr">
        <div class="">
            <div class="row">
                {{--sideBar section--}}
                <div class="col-sm-2">
                    <div class="container">
                        <div class="row flex-nowrap">
                            <div class="col-auto px-2" style="background: #012842">
                                <div
                                    class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                                    <a href="/"
                                       class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                                        <span class="fs-5 d-none d-sm-inline ">Menu</span>
                                    </a>
                                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                                        id="menu">
                                        <li class="nav-item">
                                            <a href="{{route('displayGItems')}}" class="nav-link align-middle px-0">
                                                <i class="bi bi-house text-white"></i> <span
                                                    class="ms-1 d-none d-sm-inline text-white">items</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('displayAddItemsPage')}}" class="nav-link align-middle px-0">
                                                <i class="bi bi-plus-square text-white "></i> <span
                                                    class="ms-1 d-none d-sm-inline text-white">add group items </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('displayAddItems')}}" class="nav-link align-middle px-0">
                                                <i class="bi bi-plus-square text-white"></i><span
                                                    class="ms-2 d-none d-sm-inline text-white ">Add item </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-link px-0 align-middle text-white">
                                            <i class="fa-solid fa-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                                        </li>
                                
                                        <li>
                                            <a href="#" class="nav-link px-0 align-middle text-white">
                                            <i class="fa-regular fa-user"></i> <span class="ms-1 d-none d-sm-inline">Customers</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <hr>
                                    <div class="dropdown pb-4">
                                        <a href="#"
                                           class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                                           id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30"
                                                 class="rounded-circle">
                                            <span class="d-none d-sm-inline mx-1">loser</span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow"
                                            aria-labelledby="dropdownUser1">
                                            <li><a class="dropdown-item" href="#">New project...</a></li>
                                            <li><a class="dropdown-item" href="#">Settings</a></li>
                                            <li><a class="dropdown-item" href="#">Profile</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                {{--End Of sideBar section--}}

                {{--        side bar section (static )--}}
                <div class="col-sm-9">
                    @yield('content')
                </div>
            </div>

        </div>

    </main>





</div>
</body>
</html>
