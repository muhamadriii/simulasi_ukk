<!DOCTYPE html>
<html lang="en-US" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- ===============================================-->
        <!--    Document Title-->
        <!-- ===============================================-->
        <title>Femas | Wadah aspirasi masyarakat</title>


        <!-- ===============================================-->
        <!--    Favicons-->
        <!-- ===============================================-->
        <link rel="apple-touch-icon" sizes="180x180" href="masyarakat/assets/img/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="masyarakat/assets/img/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="masyarakat/assets/img/favicons/favicon-16x16.png">
        <link rel="shortcut icon" type="image/x-icon" href="masyarakat/assets/img/favicons/favicon.ico">
        <link rel="manifest" href="masyarakat/assets/img/favicons/manifest.json">
        <meta name="msapplication-TileImage" content="masyarakat/assets/img/favicons/mstile-150x150.png">
        <meta name="theme-color" content="#ffffff">


        <!-- ===============================================-->
        <!--    Stylesheets-->
        <!-- ===============================================-->
        <link href="masyarakat/assets/css/theme.css" rel="stylesheet" />
        @stack('css')

    </head>


    <body>

        <!-- ===============================================-->
        <!--    Main Content-->
        <!-- ===============================================-->
        <main class="main" id="top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 backdrop" data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center fw-semi-bold fs-3" href="#"> <img class="me-3" src="masyarakat/assets/img/gallery/logo.png" alt="" />
                    <div class="text-primary font-base">Femas</div>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
                    @guest
                        <li class="nav-item"><a class="nav-link fw-medium active" aria-current="page" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#aspirasi">Aspirasi</a></li>
                        <li class="nav-item"><a class="nav-link" href="#visi">Laporan</a></li>
                        <a class="btn btn-lg btn-primary rounded-pill bg-gradient font-base order-0" href="{{route('login')}}">Login</a>
                    @endguest
                    @auth('masyarakat')
                        <li class="nav-item"><a class="nav-link" href="#visi">{{ auth()->guard('petugas')->user()->username}}</a></li>
                    @endauth
                    {{-- <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">More</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action </a></li>
                        </ul>
                    </li> --}}
                    </ul>
                </div>
            </div>
        </nav>
        
        @yield('content')
        </main>

        <!-- ===============================================-->
        <!--    JavaScripts-->
        <!-- ===============================================-->
        <script src="vendors/@popperjs/popper.min.js"></script>
        <script src="vendors/bootstrap/bootstrap.min.js"></script>
        <script src="vendors/is/is.min.js"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
        <script src="masyarakat/assets/js/theme.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
        @stack('js')
    </body>

</html>