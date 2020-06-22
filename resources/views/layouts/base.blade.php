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
        <link href="{{ asset('assests/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <!--external css-->
        <link href="{{ asset('assests/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
        @yield('stylesheets')

        <!-- Custom styles for this template -->
        <link href="{{ asset('custom/css/style5.css') }}" rel="stylesheet">
        <link href="{{ asset('custom/css/style-responsive.css') }}" rel="stylesheet">
        @yield('head_scripts')

        <!-- =======================================================
          Page Name: base.blade.php
          Author: Main Method
          Date: 19-05-2019
        ======================================================= -->
    </head>

    <body>
        <section id="container">
            <!-- **************************************************
                TOP BAR CONTENT & NOTIFICATIONS
                *************************************************** -->
            @include('inc.header')

            <!-- **************************************************
                MAIN SIDEBAR MENU
                *************************************************** -->
            @if(Auth::user()->user_type == 'staff')
                @include('dashboards.staff.inc.staff_navbar')
            @elseif(Auth::user()->user_type == 'host_organisation')
                @include('dashboards.host_organisation.inc.host_organisation_navbar')
            @elseif(Auth::user()->user_type == 'intern')
                @include('dashboards.intern.inc.intern_navbar')
            @endif

            <!-- **************************************************
                MAIN CONTENT
                *************************************************** -->

            <!--main content start-->
            @yield('content')
            <!--main content end-->

            <!--footer start-->
            <footer class="site-footer">
                <div class="text-center">
                    <p>
                        &copy; Copyrights <strong>Liz-mumpreneur Zambia</strong>. All Rights Reserved
                    </p>

                    <div class="credits">

                    </div>
                    <a href="index.html#" class="go-top">
                        <i class="fa fa-angle-up"></i>
                    </a>
                </div>


            </footer>
            <!--footer end-->
        </section>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="{{ asset('assests/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assests/bootstrap/js/bootstrap.min.js') }}"></script>
        <script class="include" type="text/javascript" src="{{ asset('assests/jquery.dcjqaccordion.2.7.js') }}"></script>
        <script src="{{ asset('assests/jquery.scrollTo.min.js') }}"></script>
        <script src="{{ asset('assests/jquery.nicescroll.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assests/jquery.sparkline.js') }}"></script>

        <!--common script for all pages-->
        <script src="{{ asset('assests/common-scripts.js') }}"></script>
        @yield('scripts')
    </body>

</html>
