<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Hello, world!</title>
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
 
</head>

<body>

    <header id="headerSection" class="sticky-top  border-bottom">
        <nav class="navbar navbar-expand-lg navbar-light pb-0">
            <div class="container-fluid ">

                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{asset('assets/images/bd.gif')}}" class="img-fluid " height="50" width="100" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarText">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <div class="logo-section">
                            <div class="header-logo">
                                <div class="header-br"></div>
                                <div class="logo"><a href="{{url('/')}}" title=""><img class="" height="100" width="100"
                                            src="{{asset('assets')}}/images/logoicon.png" alt="logo"></a></div>
                                <span _ngcontent-lgt-c89="" class="heartbit" style="margin-top: 40px;"></span>
                                <span _ngcontent-lgt-c89="" class="point"></span>
                            </div>
                        </div>
                    </ul>
                    <span class="navbar-text ">
                        <button class="swich-btn" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <!-- <span class="iconify " data-icon="ep:menu"></span> -->
                        </button>

                    </span>
                </div>
            </div>
        </nav>


        <!-- canva section -->

        <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class=" position-relative  ">
                <button class="btn-close text-reset position-absolute top-0 left-0  p-2 bg-danger border-ra"
                    data-bs-dismiss="offcanvas" aria-label="Close"
                    style="margin-left:-32px;border-radius: 0px;"></button>
            </div>
            <div class="offcanvas-body">
                <img src="{{asset('assets/images/profile.jpg')}}" class="img-fluid box-shadow rounded p-1" alt="">
                <div class="mt-3 navigation">
                    <h5 class="text-uppercase text-center text-white">md rupom ehsan </h5>
                    <p class="text-uppercase text-center text-white">Fullstack web developer</p>
                    <ul class="list-unstyled text-center offcanvas-nav-items">
                        <li class=" ">
                            <a href="{{'/'}}" class="text-decoration-none ">Home</a>
                        </li>
                        <li class="">
                            <a href="{{'/'}}#aboutSection" class="text-decoration-none ">About</a>
                        </li>
                        <li class="">
                            <a href="{{'/'}}#skillSection" class="text-decoration-none ">Skill</a>
                        </li>
                        <li class="">
                            <a href="{{'/'}}#portfolioSection" class="text-decoration-none ">Portfolio</a>
                        </li>
                        <li class="">
                            <a href="{{'/'}}#clientSection" class="text-decoration-none ">Clients</a>
                        </li>
                        <li class="">
                            <a href="{{'/'}}#blogSection" class="text-decoration-none ">Blogs</a>
                        </li>
                        <li class="">
                            <a href="{{'/'}}#contactSection" class="text-decoration-none ">Contact</a>
                        </li>
                        <li class="">
                            <a href="{{url('all-blogs')}}" class="text-decoration-none ">My Blogs</a>
                        </li>
                        <li class="">
                            <a href="{{url('/admin/login')}}" class="text-decoration-none ">Login</a>
                        </li>


                    </ul>
                </div>
            </div>
        </div>

    </header>
