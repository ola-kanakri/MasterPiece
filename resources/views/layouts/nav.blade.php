<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cash.Com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,500|Dosis:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/fancybox.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

    {{-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet"> --}}

    <link href="{{ url('https://fonts.googleapis.com/css?family=Overpass:300,400,500|Dosis:400,700') }}"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/animate.css') }}">
    <link rel="stylesheet" href="{{ url('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('css/aos.css') }}">
    <link rel="stylesheet" href="{{ url('css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ url('css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ url('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ url('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ url('css/fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <style>


.ola{

    position:relative;
    top: 50px;
    background-color: #ffffffc2
}
    </style>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand  mb-3 "  href="/">Cash.Com</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="/" class="nav-link">HOME</a></li>
                    {{-- <li class="nav-item"><a href="/how-it-works" class="nav-link">How It Works</a></li> --}}
                    <li class="nav-item"><a href="/donations/create" class="nav-link">POST YOUR ADs</a></li>

                    @php
                        use App\Models\Category;
                        $data = Category::all();
                    @endphp


                    <div class="dropdown show nav-item">
                        <a class=" dropdown-toggle nav-link" href="{{ route('categories.show', 1) }}"
                            role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            CATEGORIES
                        </a>


                        <div class="dropdown-menu ola" aria-labelledby="dropdownMenuLink" >
                            @foreach ($data as $values)
                            <a class="dropdown-item"  href="{{ route('categories.show', $values->id) }}">
                                {{ $values->name }}</a>

                        @endforeach
                        </div>
                    </div>



                    {{-- <li class="nav-item"><a href="{{ route('categories.index') }}" class="nav-link">Donations</a></li> --}}
                    {{-- <li class="nav-item"><a href="{{ route('categories.show',1) }}" class="nav-link">Donations</a></li> --}}
                    {{-- <li class="nav-item"><a href="/gallery" class="nav-link">Gallery</a></li>
                    <li class="nav-item"><a href="/blog" class="nav-link">Blog</a></li> --}}
                    <li class="nav-item"><a href="/about" class="nav-link">ABOUT</a></li>
                    <li class="nav-item"><a href="/contact" class="nav-link"> CONTACT US</a></li>

                    


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{ '/signup'}}">{{ __('REGISTER') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item ">
                                <a class="nav-link " {{-- href="{{ route('/profile/{user}',auth()->user()->id) }}" role="button"> --}} href="/profile/{{ auth()->user()->id }}"
                                    role="button">
                                    {{ __('My account') }}
                                    {{-- {{ Auth::user()->name }} --}}
                                </a>
                            </li>


                            {{-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"> --}}
                            <li class="nav-item">
                                <a style="color: #f7ca44;font-weight:900;" class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">

                                    @csrf
                                </form>
                            </li>

                        @endguest
                    </ul>



                  


                </ul>
            </div>
        </div>
    </nav>
