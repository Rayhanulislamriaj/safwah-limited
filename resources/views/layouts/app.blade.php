<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon.png" type="image/x-icon">

    <title>Safwah Limited</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap"
        rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('assets') }}/css/responsive.css" rel="stylesheet" />
</head>

@yield('content')



<!-- info section -->
<section class="info_section ">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="info_logo">
                    <a class="navbar-brand" href="{{ route('index') }}">
                        <span>
                            {{ App\Models\Footer::implode('Name') }}
                        </span>
                    </a>
                    <p>
                        {{ App\Models\Footer::implode('description') }}
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info_links">
                    <h5>
                        Useful Link
                    </h5>
                    <ul>
                        <li>
                            <a target="_blank" href="{{ App\Models\Footer::implode('facebook_link') }}">
                                {{ App\Models\Footer::implode('facebook') }}
                            </a>
                        </li>

                        <li>
                            <a target="_blank" href="{{ App\Models\Footer::implode('youtube_link') }}">
                                {{ App\Models\Footer::implode('youtube') }}
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="{{ App\Models\Footer::implode('Instagram_link') }}">
                                {{ App\Models\Footer::implode('Instagram') }}
                            </a>
                        </li>

                        <li>
                            <a target="_blank" href="{{ App\Models\Footer::implode('website_link') }}">
                                {{ App\Models\Footer::implode('website') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info_info">
                    <h5>
                        Contact Us
                    </h5>
                </div>
                <div class="info_contact">
                    <a target="_blank"
                        href="https://www.google.com/maps/place/Confidence+Shopping+Mall./@23.7922231,90.4223015,18z/data=!4m9!1m2!2m1!1sconference+center+near+Shahjadpur,+Dhaka!3m5!1s0x3755c7bc7e5fb147:0xe9c44eff2a9ed5e5!8m2!3d23.7922231!4d90.4243044!16s%2Fg%2F1hhx18gxd?hl=en-US&entry=ttu"
                        class="">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>
                            {{ App\Models\Footer::implode('location') }}.
                        </span>
                    </a>
                    <a href="" class="">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span>
                            Call : {{ App\Models\Footer::implode('phone') }}
                        </span>
                    </a>
                    <a href="{{ route('contact') }}" class="">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span>
                            {{ App\Models\Footer::implode('email') }}
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info_form ">
                    <h5>
                        Social Media
                    </h5>
                    {{-- <form action="#">
                        <input type="email" placeholder="Enter your email">
                        <button>
                            Subscribe
                        </button>
                    </form> --}}
                    <div class="social_box">
                        <a target="_blank" href="{{ App\Models\Footer::implode('facebook_link') }}">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a target="_blank" href="{{ App\Models\Footer::implode('website_link') }}">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                        </a>
                        <a target="_blank" href="{{ App\Models\Footer::implode('youtube_link') }}">
                            <i class="fa fa-youtube" aria-hidden="true"></i>
                        </a>
                        <a target="_blank" href="{{ App\Models\Footer::implode('instagram_link') }}">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end info_section -->




<!-- footer section -->
<footer class="container-fluid footer_section">
    <p>
        &copy; <span id="currentYear"></span>, {{ App\Models\Footer::implode('name') }} | All Rights Reserved. Design
        by
        <a href="https://www.facebook.com/rayhanulislam.riaj">{{ App\Models\Footer::implode('desginer') }}</a>.
    </p>
</footer>
<!-- footer section -->

<script src="{{ asset('assets') }}/js/jquery-3.4.1.min.js"></script>
<script src="{{ asset('assets') }}/js/bootstrap.js"></script>
<script src="{{ asset('assets') }}/js/custom.js"></script>
</body>

</html>
