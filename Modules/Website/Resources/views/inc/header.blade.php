<!-- Header Start -->

<header class="navigation">
    <div class="header-top ">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-2 col-md-4">
                    <div class="header-top-socials text-center text-lg-left text-md-left">
                        {{--<a href="https://www.facebook.com/themefisher" target="_blank"><i class="ti-facebook"></i></a>
                        <a href="https://twitter.com/themefisher" target="_blank"><i class="ti-twitter"></i></a>
                        <a href="https://github.com/themefisher/" target="_blank"><i class="ti-github"></i></a>--}}
                    </div>
                </div>
                <div class="col-lg-10 col-md-8 text-center text-lg-right text-md-right">
                    {{--<div class="header-top-info">
                        <a href="#">Contact Us : <span>internships@avencion.com</span></a>
                    </div>--}}
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg  py-4" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('websiteHomePage') }}">
                <img src="{{ asset('images/logo.jpeg') }}" alt="logo" style="height: 70px;width: 150px;" />
            </a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse text-center" id="navbarsExample09">
                {{--<ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('websiteHomePage') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('aboutPage') }}">About</a></li>
                   <!-- <li class="nav-item"><a class="nav-link" href="#">Members</a></li>-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Apply</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown05">
                           <li> <a class="dropdown-item" href="{{ route('internApplicationPage') }}">For internship</a></li>
                            <li><a class="dropdown-item" href="{{ route('hostOrganisationApplicationPage') }}">As Host Organisation</a></li>
                            <!--<li><a class="dropdown-item" href="blog-single.html">Mentor</a></li>-->
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('youthLeadersPage') }}">Success stories</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('alumniPage') }}">Youthlead Alumni</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contactPage') }}">Contact</a></li>

                </ul>

                <div class="nav-item dropdown" style="margin-left: 10px">
                    @guest
                        <a href="{{ route('login') }}" class="btn btn-solid-border btn-round-full">Login</a>
                    @else
                        <a id="dropdown06" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" --}}{{--href="{{ route('dashboardPage') }}"--}}{{-- class="btn btn-solid-border btn-round-full dropdown-toggle">
                            <i class="fa fa-caret-down mr-2"></i>
                            <span>
                                <i class="fa fa-user mr-2" style="margin-left: 5px"></i>
                                @if(Auth::user()->user_type == "staff")
                                {{ Auth::user()->staffPersonalInformation->first_name }}
                                @elseif(Auth::user()->user_type == "intern")
                                    {{ Auth::user()->internPersonalInformation->first_name }}
                                @elseif(Auth::user()->user_type == "host_organisation")
                                    {{ Auth::user()->hostOrganisationPersonalInformation->first_name }}
                                @endif
                            </span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown06">
                            <li><a class="dropdown-item" href="{{ route('dashboardPage') }}">Dashboard</a></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    @endguest
                </div>--}}
            </div>
        </div>
    </nav>
</header>

<!-- Header Close -->
