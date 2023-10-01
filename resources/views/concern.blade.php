@extends('layouts.app')
@section('content')

    <body class="sub_page">
        <div class="hero_area">
            <!-- header section strats -->
            <div class="hero_bg_box">
                <div class="img-box">
                    {{-- <img src="{{ asset('public/img') }}/{{ App\Models\Home::implode('photo') }}" alt=""> --}}
                </div>
            </div>

            <header class="header_section">
                <div class="header_top">
                    <div class="container-fluid"
                        style="
                        width: 80%;
                        padding: 10px;
                        padding-top: 0px;
                      ">
                        <small><small>
                                <small class="text-white">All praise is for Allah Lord of all worlds, the
                                    Most Compassionate, Most
                                    Merciful, Master of
                                    the Day of Judgment. You ˹alone˺ we worship & You ˹alone˺ we ask for help. Guide us
                                    along the
                                    Straight Path, the Path of those You have blessed not those You're displeased with,
                                    or those who
                                    are astray.</small></small></small>
                    </div>
                    <div class="container-fluid">
                        {{-- <div class="contact_link-container">
                            <a href="" class="contact_link1">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                                    {{ App\Models\Home::implode('location') }}.
                                </span>
                            </a>
                            <a href="" class="contact_link2">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                                    Call : {{ App\Models\Home::implode('phone') }}
                                </span>
                            </a>
                            <a href="" class="contact_link3">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>
                                    {{ App\Models\Home::implode('email') }}
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
                                    {{ App\Models\Home::implode('header_name') }}
                                </span>
                            </a> --}}
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class=""></span>
                            </button>

                            <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
                                <ul class="navbar-nav  ">
                                    <li class="nav-item ">
                                        <a class="nav-link" href="{{ route('index') }}">Home <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('about') }}"> About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('service') }}"> Goals </a>
                                    </li>
                                    <li class="nav-item active">
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
        </div>

        <!-- Corcern section -->

        <section class="team_section layout_padding">
            <div class="container">
                <div class="heading_container heading_center">
                    <h2>
                        Our Concerns
                    </h2>
                </div>
                <div class="row">
                    @foreach ($concerns as $concern)
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
    @endsection
