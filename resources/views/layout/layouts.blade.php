<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Bethsaida Secondary School" />
        <meta name="author" content="Raymond Machary" />
        <title>Bethsaida Secondary School</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{asset('images/headicon3.jpg')}}" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('files/css/styles.css') }}" rel="stylesheet" />
        <!-- Link to a JavaScript file-->
        <script src="{{ asset('files/js/scripts.js') }}"></script>

    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html">Welcome to Bethsaida</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('about')}}">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('accademic')}}">Accademic</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('publication')}}">Publication</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('news.index')}}">News</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('donation')}}">Donation</a></li>
                            <li class="nav-item"><a class="nav-link" href="https://bethsaida.ac.tz/webmail">Mail</a></li>




                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Header-->
            <header class="bg-black py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2">Bethsaida Secondary School</h1>
                                <p class="lead fw-normal text-white-50 mb-4">
                                    Our school is a safe haven for orphaned girls in Tanzania, providing them with the education and support they deserve. We are proud to have the unwavering backing of Bethsaida's dedicated friends, who help us change lives every day. </p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Our service</a>
                                    <a class="btn btn-outline-light btn-lg px-4" href="#!">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="{{asset('images/bethsaida001.jpg')}}" alt="..." /></div>
                    </div>
                </div>
            </header>
