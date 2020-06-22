<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Lizmumpreneur') }}</title>

    <!-- Favicons -->
    <link href="{{ asset('images/favicon.ico') }}" rel="icon">
    <link href="{{ asset('images/logo2') }}" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assests/bootstrap_v4/css/bootstrap.min.css') }}" rel="stylesheet">

    @yield('stylesheets')

<!-- Icon Font Css -->
    <link rel="stylesheet" href="{{ asset('assests/themify/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assests/fontawesome-free/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assests/magnific-popup/dist/magnific-popup.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assests/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assests/slick-carousel/slick/slick-theme.css') }}">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('custom/css/style3.css') }}">
    <link rel="stylesheet" href="{{ asset('custom/css/style4.css') }}">

</head>

<body id="page-top">

    @include('website::inc.header')

    <div class="main-wrapper ">
        @yield('content')

        <!-- footer Start -->
        <footer class="footer section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        {{--<div class="widget">
                            <h4 class="text-capitalize mb-4">Quick Links</h4>
                            <ul class="list-unstyled footer-menu lh-35">
                                <li><a href="{{ route('aboutPage') }}">About</a></li>
                                <!--<li><a href="#">Members</a></li>-->
                                <li><a href="{{ route('contactPage') }}">Contact</a></li>
                                <li><a href="{{ route('internApplicationPage') }}">Apply</a></li>
                                <li><a href="{{ route('termsAndConditionsPage') }}">Conditions & Requirements</a> </li>
                            </ul>
                        </div>--}}
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="widget">
                            <h4 class="text-capitalize mb-4">News Letter</h4>
                            <p>Subscribe to get latest news article and resources  </p>

                            {!! Form::open(['route' => ['storeNewClientForUpdates'], 'method' => 'POST', 'class' => 'sub-form', 'id' => 'receiveUpdatesForm']) !!}


                                {{ Form::text('name', '', ['class' => 'form-control mb-3', 'id' => 'name', 'placeholder' => 'Name']) }}

                                {{ Form::email('email', '', ['class' => 'form-control mb-3', 'id' => 'email', 'placeholder' => 'Email']) }}


                            <button type="submit" class="btn btn-main btn-small">subscribe</button>

                            {!! Form::close() !!}
                        </div>
                    </div>

                    <div class="col-lg-3 ml-auto col-sm-6">
                        <div class="widget">
                            <div class="logo mb-4">
                                <h3>Liz<span> mumpreneur.</span></h3>
                            </div>
                            <h6><a href="#" >elizabethngosa5@gmail.com</a></h6>
                        </div>
                    </div>
                </div>

                <div class="footer-btm pt-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="copyright">
                                &copy; Copyright Reserved to <span class="text-color">Liz-mumpreneur Zambia</span>
                            </div>
                        </div>
                        <div class="col-lg-6 text-left text-lg-right">
                            <ul class="list-inline footer-socials">
                                <li class="list-inline-item"><a href="https://www.facebook.com/lizmumpreneurzambia/"><i class="ti-facebook mr-2"></i>Facebook</a></li>
                                <li class="list-inline-item"><a href="https://www.instagram.com/lizmumpreneurlimited/"><i class="ti-instagram mr-2"></i>Instagram</a></li>
                                <li class="list-inline-item"><a href="http://linkedin.com/in/elizabeth-ngosa-193365183"><i class="ti-linkedin mr-2 "></i>Linkedin</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <!-- Main jQuery -->
    <script src="{{ asset('assests/jquery/jquery.js') }}"></script>
    <script src="{{ asset('custom/js/contact.js') }}"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="{{ asset('assests/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('assests/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--  Magnific Popup-->
    <script src="{{ asset('assests/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('assests/slick-carousel/slick/slick.min.js') }}"></script>
    <!-- Counterup -->
    <script src="{{ asset('assests/counterup/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assests/counterup/jquery.counterup.min.js') }}"></script>

    <!-- Google Map -->
    <script src="{{ asset('assests/google-maps/map.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>

    <script src="{{ asset('custom/js/script.js') }}"></script>
    <!--<script src="{{ asset('custom/js/host_application.js') }}"></script>-->


    @yield('scripts')
</body>

</html>

