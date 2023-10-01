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
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('concern') }}"> Our Concerns </a>
                                    </li>
                                    <li class="nav-item active">
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
    @endsection
