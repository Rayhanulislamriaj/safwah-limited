@extends('layouts.app')
@section('content')

    <body class="sub_page">

        <div class="hero_area">
            <!-- header section strats -->
            <div class="hero_bg_box">
                {{-- <div class="img-box">
                    <img src="{{ url('public/img/' . @$getrecord[0]->photo) }}" alt="">
                </div> --}}
            </div>

            <header class="header_section">

                <div class="header_top">
                    <div class="container-fluid"
                        style="
                        width: 80%;
                        padding: 10px;
                        padding-top: 0px;
                      ">
                        <small>
                            <small>
                                <small class="text-white">All praise is for Allah Lord of all worlds, the
                                    Most Compassionate, Most
                                    Merciful, Master of
                                    the Day of Judgment. You ˹alone˺ we worship & You ˹alone˺ we ask for help. Guide us
                                    along the
                                    Straight Path, the Path of those You have blessed not those You're displeased with,
                                    or those who
                                    are astray.</small>
                            </small>
                        </small>
                    </div>
                    <div class="container-fluid">
                        {{-- <div class="contact_link-container">
                            <a href="" class="contact_link1">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                                    {{ $homes->implode('location') }}.
                                </span>
                            </a>
                            <a href="" class="contact_link2">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                                    Call : {{ $homes->implode('phone') }}
                                </span>
                            </a>
                            <a href="" class="contact_link3">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>
                                    {{ $homes->implode('email') }}
                                </span>
                            </a>
                        </div> --}}
                    </div>
                </div>










                <div class="header_bottom">
                    <div class="container-fluid">
                        <nav class="navbar navbar-expand-lg custom_nav-container">
                            <a href="{{ route('index') }}">
                                <img src="{{ asset('public/img/logo.png') }}" alt="">
                            </a>
                            {{-- <a class="navbar-brand" href="{{ route('index') }}">

                                <span>
                                    {{ $homes->implode('header_name') }}
                                    <img src="{{ asset('public/img/logo.png') }}" alt="">
                                </span>
                            </a> --}}
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class=""></span>
                            </button>

                            <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
                                <ul class="navbar-nav  ">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ route('index') }}">Home <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('about') }}"> About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('service') }}"> Goals </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('concern') }}"> Our Concerns </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('contact') }}">Contact us</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>
            <!-- end header section -->
            <!-- slider section -->

            <!-- end slider section -->
        </div>









        <div class="hero_area">
            <!-- header section strats -->
            <div class="hero_bg_boxx">
                <div class="img-box">
                    <img src="{{ url('public/img/' . @$getrecord[0]->photo) }}" alt="">
                </div>
            </div>

            {{-- <header class="header_section">

                <div class="header_top">
                    <div class="container-fluid"
                        style="
                        width: 80%;
                        padding: 10px;
                        padding-top: 0px;
                      ">
                        <small>
                            <small>
                                <small class="text-white">All praise is for Allah Lord of all worlds, the
                                    Most Compassionate, Most
                                    Merciful, Master of
                                    the Day of Judgment. You ˹alone˺ we worship & You ˹alone˺ we ask for help. Guide us
                                    along the
                                    Straight Path, the Path of those You have blessed not those You're displeased with,
                                    or those who
                                    are astray.</small>
                            </small>
                        </small>
                    </div>
                    <div class="container-fluid">
                        <div class="contact_link-container">
                            <a href="" class="contact_link1">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                                    {{ $homes->implode('location') }}.
                                </span>
                            </a>
                            <a href="" class="contact_link2">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                                    Call : {{ $homes->implode('phone') }}
                                </span>
                            </a>
                            <a href="" class="contact_link3">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>
                                    {{ $homes->implode('email') }}
                                </span>
                            </a>
                        </div>
                    </div>
                </div>










                <div class="header_bottom">
                    <div class="container-fluid">
                        <nav class="navbar navbar-expand-lg custom_nav-container">
                            <img src="{{ asset('public/img/logo.png') }}" alt="">

                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class=""></span>
                            </button>

                            <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
                                <ul class="navbar-nav  ">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ route('index') }}">Home <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('about') }}"> About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('service') }}"> Goals </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('concern') }}"> Our Concerns </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('contact') }}">Contact us</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </header> --}}
            <!-- end header section -->
            <!-- slider section -->
            <section class=" slider_section ">


                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($homes as $home)
                            <div class="carousel-item active">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="detail-box">
                                                <h1>

                                                    <span>
                                                        {{ $home->implode('description_short') }}
                                                    </span>
                                                </h1>
                                                <p>
                                                    {{ $home->implode('description_long') }}

                                                </p>
                                                <div class="btn-box">
                                                    <a href="{{ route('about') }}" class="btn-1"> Read more </a>
                                                    <a href="{{ route('contact') }}" class="btn-2">Get A Quote</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{-- <div class="container idicator_container">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                    </div> --}}
                </div>
            </section>
            <!-- end slider section -->
        </div>

        <!-- about section -->

        <section class="about_section layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 px-0">
                        <div class="img_container">
                            <div class="img-box">
                                {{-- <img src="{{ asset('assets') }}/images/about-img.jpg" alt="" /> --}}
                                {{-- <img width="300" height="500" src="{{ url('public/about/about.jpg') }}"
                                    alt="" /> --}}
                                <img width="300" height="500"
                                    src="{{ asset('public/about') }}/{{ App\Models\About::implode('photo') }}"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 px-0">
                        <div class="detail-box">
                            <div class="heading_container ">
                                <h2>
                                    {{ App\Models\About::implode('question') }}
                                </h2>
                            </div>
                            <p>
                                {{ App\Models\About::implode('questions_answare') }}
                            </p>
                            <div class="btn-box">
                                <a href="{{ route('service') }}">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- end about section -->

        <!-- service section -->

        <section class="service_section layout_padding ">
            <div class="container">
                <div class="heading_container heading_center">
                    <h2>
                        Our Goals
                    </h2>
                </div>
                <div class="row">
                    @foreach (App\Models\Service::all() as $goal)
                        <div class="col-md-4">
                            <div class="box ">
                                <div class="img-box">
                                    <img style="
                                    display: inline-block;
                                    width: 150px;
                                    height: 150px;
                                    border-radius: 30%;
                                    background-repeat: no-repeat;
                                    background-position: center center;
                                    background-size: cover;"
                                        src="{{ asset('public/service') }}/{{ $goal->photo }}" alt="">
                                </div>
                                <div class="detail-box">
                                    <h6>
                                        {{ $goal->goal_name }}
                                    </h6>
                                    <p>
                                        {{ $goal->goal_description }}
                                    </p>
                                    <a href="">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            </div>
            </div>
        </section>


        <!-- end service section -->

        <!-- Corcern section -->

        <section class="team_section layout_padding">
            <div class="container">
                <div class="heading_container heading_center">
                    <h2>
                        Our Concerns
                    </h2>
                </div>
                <div class="row">
                    @foreach (App\Models\Concern::all() as $concern)
                        <div class="col-md-4 col-sm-6 mx-auto ">
                            <div class="box">
                                <div class="img-box">
                                    <img width="150" height="400"
                                        src="{{ asset('public/concern') }}/{{ $concern->photo }}" alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        <a target="_blank" class="text-white" href="{{ $concern->concern_link }}">
                                            {{ $concern->concern_name }}
                                        </a>
                                    </h5>
                                    <h6 class="">
                                        <a target="_blank" href="{{ $concern->concern_link }}">
                                            {{ $concern->concern_description }}
                                        </a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="btn-box">
                    <a href="">
                        View All
                    </a>
                </div>
            </div>
        </section>

        <!-- end Corcern section -->


        <!-- contact section -->

        <section class="contact_section layout_padding">
            <div class="contact_bg_box">
                <div class="img-box">
                    <img src="{{ asset('assets') }}/images/contact-bg.jpg" alt="">
                </div>
            </div>
            <div class="container">
                <div class="heading_container heading_center">
                    <h2>
                        Get In touch
                    </h2>
                </div>
                <div class="">
                    <div class="row">
                        <div class="col-md-7 mx-auto">
                            @include('_message')
                            <form action="{{ route('contact.post') }}" method="POST">
                                @csrf
                                <div class="contact_form-container">
                                    <div>
                                        <div>
                                            <input type="text" name="name" placeholder="Full Name" />
                                        </div>
                                        <div>
                                            <input type="email" name="email" placeholder="Email " />
                                        </div>
                                        <div>
                                            <input type="text" name="subject" placeholder="Subject" />
                                        </div>
                                        <div class="">
                                            <input type="text" name="message" placeholder="Message"
                                                class="message_input" />
                                        </div>
                                        <div class="btn-box ">
                                            <button type="submit">
                                                Send
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- end contact section -->


        <!-- client section -->

        {{-- <section class="client_section layout_padding">

            <div class="container ">
                <div class="heading_container heading_center">
                    <h2>
                        Our Teams
                    </h2>
                </div>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach (App\Models\Team::all() as $team)
                            <div
                                class="carousel-item active">
                                <div class="box">
                                    <div class="img-box">
                                        <img height="170" src="{{ asset('assets') }}/images/client.png"
                                            alt="">
                                    </div>
                                    <div class="detail-box">
                                        <h4>
                                            Minim Veniam
                                        </h4>
                                        <small>Designation</small>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                            do eiusmod tempor incididunt ut labore et dolore magna
                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                            ullamco laboris nisi ut aliquip
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach



                    </div>

                    <div class="carousel_btn-box">
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

            </div>
        </section> --}}

        <!-- end client section -->

        <section class="client_section  layout_padding">
            {{-- <div class="container-fluid text-center"> --}}
            <div class="heading_container heading_center">
                <h2>Brands</h2>
                {{-- <h4>What we offer</h4> --}}
                <br>
                <div class="row">
                    @foreach (App\Models\Team::all() as $brand)
                        <div class="col-sm-3 text-align-center">
                            <span class="glyphicon glyphicon-off"></span>
                            <img class="mt-3" width="150" height="150"
                                src="{{ asset('public/team') }}/{{ $brand->photo }}" alt="">
                            <p>{{ $brand->name }}</p>
                        </div>
                    @endforeach


                </div>
                <br><br>
                {{-- <div class="row">
                    <div class="col-sm-4">
                        <span class="glyphicon glyphicon-leaf"></span>
                        <h4>GREEN</h4>
                        <p>Lorem ipsum dolor sit amet..</p>
                    </div>
                    <div class="col-sm-4">
                        <span class="glyphicon glyphicon-certificate"></span>
                        <h4>CERTIFIED</h4>
                        <p>Lorem ipsum dolor sit amet..</p>
                    </div>
                    <div class="col-sm-4">
                        <span class="glyphicon glyphicon-wrench"></span>
                        <h4>HARD WORK</h4>
                        <p>Lorem ipsum dolor sit amet..</p>
                    </div>
                </div> --}}
            </div>
        </section>
    @endsection
