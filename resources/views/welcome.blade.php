<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home || {{ config('app.name', 'Laravel') }}</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/ew-primary.ico">
    @include('layouts.partial.css')

</head>

<body class="template-color-1 home-classic spybody white-version" data-spy="scroll" data-target=".navbar-example2"
    data-offset="150">
    <!-- Start Main Page Wrapper -->
    <main class="main-page-wrapper spybody" data-spy="scroll" data-target=".navbar-example2" data-offset="150">

        <!-- Start Header -->
        <header class="rn-header haeder-default black-logo-version header--fixed header--sticky">
            <div class="header-wrapper m--0 rn-popup-mobile-menu row align-items-center">
                <!-- Start Header Left -->
                <div class="col-lg-2 col-6">
                    <div class="header-left">
                        <div class="logo">
                            <a href="/">
                                <img src="/ew-secondary.png" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Header Left -->
                <!-- Start Header Center -->
                <div class="col-lg-10 col-6">
                    <div class="header-center">
                        <nav id="sideNav" class="mainmenu-nav navbar-example2">
                            <!-- Start Mainmanu Nav -->
                            <ul class="primary-menu nav nav-pills">
                                <li class="nav-item"><a class="nav-link smoth-animation active"
                                        href="#home">Home</a>
                                </li>
                                <li class="nav-item"><a class="nav-link smoth-animation" href="#about">About</a>
                                </li>
                                {{-- <li class="nav-item"><a class="nav-link smoth-animation" href="#skill">Skill</a> --}}
                                </li>
                                <li class="nav-item"><a class="nav-link smoth-animation"
                                        href="#service">Services</a>
                                </li>
                                <li class="nav-item"><a class="nav-link smoth-animation"
                                        href="#portfolio">Portfolio</a>
                                </li>
                                <li class="nav-item"><a class="nav-link smoth-animation"
                                        href="#client">Clients</a>
                                </li>
                                <li class="nav-item"><a class="nav-link smoth-animation"
                                        href="#pricing">Pricing</a>
                                </li>
                                <li class="nav-item"><a class="nav-link smoth-animation" href="#blog">blog</a>
                                </li>
                                <li class="nav-item"><a class="nav-link smoth-animation" href="#contacts">Contact
                                        us</a>
                                </li>
                            </ul>
                            <!-- End Mainmanu Nav -->
                        </nav>

                        <!-- End Header Right  -->
                    </div>
                </div>
                <!-- End Header Center -->
            </div>
        </header>
        <!-- End Header Area -->

        <!-- Start Popup Mobile Menu  -->
        <div class="popup-mobile-menu">
            <div class="inner">
                <div class="menu-top">
                    <div class="menu-header">
                        <a class="logo" href="index.html">
                            <img src="/ew-black.png" class="img-fluid rounded-circle w-25" alt="Personal Portfolio">
                        </a>
                        <div class="close-button">
                            <button class="close-menu-activation close"><i data-feather="x"></i></button>
                        </div>
                    </div>
                    <p class="discription">Welcome to ElsieWorks! Through all the beautiful motion We Freeze Time</p>
                </div>
                <div class="content">
                    <ul class="primary-menu nav nav-pills">
                        <li class="nav-item"><a class="nav-link smoth-animation active" href="#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link smoth-animation" href="#about">About</a></li>

                        <li class="nav-item"><a class="nav-link smoth-animation" href="#skill">Skill</a></li>

                        <li class="nav-item"><a class="nav-link smoth-animation" href="#service">Service</a></li>

                        <li class="nav-item"><a class="nav-link smoth-animation" href="#portfolio">portfolio</a>
                        </li>

                        <li class="nav-item"><a class="nav-link smoth-animation" href="#client">client</a></li>

                        <li class="nav-item"><a class="nav-link smoth-animation" href="#pricing">pricing</a></li>

                        <li class="nav-item"><a class="nav-link smoth-animation" href="#blog">blog</a></li>

                        <li class="nav-item"><a class="nav-link smoth-animation" href="#contacts">contact</a></li>
                    </ul>
                    <!-- social sharea area -->
                    <div class="social-share-style-1 mt--40">
                        <span class="title">find with me</span>
                        <ul class="social-share d-flex liststyle">
                            <li class="facebook"><a href="https://www.facebook.com/ElsieWorks"
                                    target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                        </path>
                                    </svg></a>
                            </li>
                            <li class="instagram"><a href="https://www.instagram.com/elsieworks_/"
                                    target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-instagram">
                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                    </svg></a>
                            </li>
                            <li class="twitter"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-twitter">
                                        <path
                                            d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                        </path>
                                        <rect x="2" y="9" width="4" height="12"></rect>
                                        <circle cx="4" cy="4" r="2"></circle>
                                    </svg></a>
                            </li>
                        </ul>
                    </div>
                    <!-- end -->
                </div>
            </div>
        </div>
        <!-- End Popup Mobile Menu  -->

        <!-- Start Slider Area -->
        <div id="home" class="rn-slider-area">
            <div class="slide slider-style-4 bg_image bg_image--14">
                <div class="container">
                    <div class="row">
                        <div class="order-2 order-lg-1 col-lg-9 col-xl-7">
                            <div class="content">
                                <div class="inner mb_sm--80">
                                    <h1 class="title">Hi, Welcome to <span>ElsieWorks</span><br> </h1>
                                    <div>
                                        <p class="description">For All your Photography and Videography needs, <br>
                                            We don't just capture media, we <span class="text-white">FREEZE
                                                TIME!</span> </p>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-lg-12 col-xl-6 col-md-12 col-sm-12 col-12">
                                        <div class="social-share-inner-left">
                                            <span class="title">find with me</span>
                                            <ul class="social-share d-flex liststyle">
                                                <li class="instagram"><a target="_blank"
                                                        href="https://www.instagram.com/elsieworks_"><i
                                                            data-feather="instagram"></i></a>
                                                </li>
                                                <li class="facebook"><a target="_blank"
                                                        href="https://www.facebook.com/ElsieWorks/"><i
                                                            data-feather="facebook"></i></a>
                                                </li>
                                                <li class="linkedin"><a target="_blank" href="#"><i
                                                            data-feather="twitter"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider Area -->

        <!-- Start about Area -->
        <div id="about" class="rn-about-area rn-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" data-aos-once="true"
                            class="image-area">
                            <div class="thumbnail">
                                <img src="client/images/about/about-1.jpg" alt="Personal Portfolio Image">
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" data-aos-once="true"
                        class="col-lg-7 mt_sm--30">
                        <div class="contant">
                            <div class="section-title text-left">
                                <span class="subtitle">Visit Our portfolio & Hire us</span>
                                <h2 class="title">About Us</h2>
                            </div>
                            <p class="discription">
                                We are your friendly neighbourhood creatives with diverse skills in the art of
                                photography and videography
                            </p>
                            <p class="discription">
                                If you are looking for something beyond the wildness of the event itself to be captured,
                                you are in the right place
                                as we don't just give you extraordinary, we give world class!!
                            </p>
                            {{-- <a class="rn-btn" href="#contacts"><span>DOWNLOAD MY CV</span></a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End about Area -->
        {{-- <!-- skill area Start -->
        <div id="skill" class="rn-skill-area rn-section-gap section-separator">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-aos="fade-up" data-aos-duration="500"
                            data-aos-delay="100" data-aos-once="true">
                            <span class="subtitle">Visit my skill & Hire me</span>
                            <h2 class="title">My Skill</h2>
                        </div>
                        <div class="mt_md--40 mt_sm--40">
                            <ul class="skill-style-1">
                                <li data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true"
                                    title="ReactJs">
                                    <img src="client/images/icons/react.png" alt="skill">
                                </li>
                                <li data-aos="fade-up" data-aos-duration="500" data-aos-delay="200" data-aos-once="true"
                                    title="Figma">
                                    <img src="client/images/icons/figma.png" alt="skill">
                                </li>
                                <li data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true"
                                    title="XD">
                                    <img src="client/images/icons/xd.png" alt="skill">
                                </li>
                                <li data-aos="fade-up" data-aos-duration="500" data-aos-delay="400" data-aos-once="true"
                                    title="PS">
                                    <img src="client/images/icons/photoshop.png" alt="skill">
                                </li>
                                <li data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true"
                                    title="vueJS">
                                    <img src="client/images/icons/vuejs.png" alt="skill">
                                </li>
                                <li data-aos="fade-up" data-aos-duration="500" data-aos-delay="200" data-aos-once="true"
                                    title="js">
                                    <img src="client/images/icons/js.png" alt="skill">
                                </li>
                                <li data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true"
                                    title="angularJS">
                                    <img src="client/images/icons/angularjs.png" alt="skill">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- skill area End --> --}}

        <!-- Start Service Area -->
        <div id="service" class="rn-service-area rn-section-gap section-separator">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true"
                            class="section-title text-left">
                            <span class="subtitle">Services</span>
                            <h2 class="title">What We Do</h2>
                        </div>
                    </div>
                </div>
                <div class="row row--25 mt_md--10 mt_sm--10">

                    <!-- Start Single Service -->

                    @foreach (App\Models\Service::all() as $service)
                        <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true"
                            class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                            <div class="rn-service">
                                <div class="inner">
                                    <div class="icon">
                                        <i data-feather="menu"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">{{ $service->title }}</h4>
                                        <p class="description">{{ $service->description }}</p>
                                        <button class="btn read-more-button" data-bs-toggle="modal"
                                            data-bs-target="#{{ $service->id }}"><i
                                                class="feather-arrow-right"></i></button>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="{{ $service->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Body
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- End SIngle Service -->

                </div>
            </div>
        </div>
        <!-- End Service Area  -->


        <!-- Start Cient Area -->
        <div id="client" class="rn-client-area rn-client-style-2 rn-section-gap section-separator">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true"
                            class="section-title text-center">
                            <span class="subtitle">Clients</span>
                            <h2 class="title">Our Trusted Clients</h2>
                        </div>
                        <div class="skill-style-1">
                            <div class="client-card">

                                @foreach (App\Models\Client::all() as $client)
                                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100"
                                        data-aos-once="true" class="main-content">
                                        <div class="inner text-center">
                                            <div class="thumbnail">
                                                <img class="rounded-circle shadow"
                                                    src="{{ $client->image ?? $client->image_url }}"
                                                    alt="Client-image">
                                            </div>
                                            <div class="seperator"></div>
                                            <div class="client-name"><span>{{ $client->name }}</span>
                                            </div>
                                            <div class="client-name"><small><a
                                                        href="mailto:{{ $client->email }}">{{ $client->email }}</a></small>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Cient Area -->

        <!-- Start Testimonia Area  -->
        <div class="rn-testimonial-area testimonial-style-2 testimonial-with-carousel rn-section-gapTop pb--80 pb_md--50 section-separator"
            id="testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true"
                            class="section-title text-center mb--20 mb_md--20 mb_sm--20">
                            <span class="subtitle">What Clients Say</span>
                            <h2 class="title">Testimonials</h2>
                        </div>
                    </div>
                </div>

                <div class="testimonial-activation-item-3 slick-arrow-style-one mb--60" data-aos="fade-up"
                    data-aos-duration="500" data-aos-delay="300" data-aos-once="true">

                    @foreach (App\Models\Client::all() as $client)
                        @if ($client->testimonial)
                            <!-- Start single Testimonial -->
                            <div class="rn-testimonial">
                                <div class="testimonial-inner">
                                    <div class="testimonial-header">
                                        <div class="thumbnail">
                                            <img src="{{ $client->image ?? $client->image_url }}" alt="client-image">
                                        </div>
                                        <h5 class="ts-header">
                                            <span class="text-color-primary">{{ $client->name }}</span>
                                        </h5>
                                        <small>{{ $client->testimonial->job_title }}</small>
                                    </div>
                                    <div class="testimonial-body">
                                        <p class="discription">
                                            {{ $client->testimonial->description }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End single Testimonial -->
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End Testimonia Area  -->

        <!-- Start Pricing area -->
        <div id="pricing" class="rn-pricing-area pricing-style-2 rn-section-gap section-separator">
            <div class="container">
                <div class="row">

                    <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" data-aos-once="true"
                        class="col-lg-4 col-sm-12">
                        <div class="title-area-wrapper mb_md--20 mb_sm--20">
                            <div class="section-title text-left">
                                <span class="subtitle">Pricing</span>
                                <h2 class="title">Our Packages</h2>
                            </div>
                            <p class="title-disc">
                                Our Rates vary fully depending on the type of services that you would like us to offer
                                and range on a variety of packages to give control over the quality and quantity we
                                deliver
                            </p>
                        </div>
                    </div>

                    @foreach (App\Models\Rate::all() as $rate)
                        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" data-aos-once="true"
                            class="col-lg-4 col-md-6 col-sm-12">
                            <div class="pricing-wrapper">
                                <div class="ts-header">
                                    <h6>{{ $rate->title }}</h6>
                                    <span>Try and decide.</span>
                                </div>
                                <h3 class="price">{{ $rate->price }}</h3>
                                <div class="pricing-body">
                                    @foreach ($rate->features as $feature)
                                        <div class="feature">
                                            <i data-feather="check"></i>
                                            <span class="name">{{ $feature->title }}</span>
                                        </div>
                                    @endforeach

                                </div>
                                <div class="pricing-footer">
                                    <a class="rn-btn" href="#contacts"><span>BUY NOW</span></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" data-aos-once="true"
                        class="col-lg-4 col-md-6 col-sm-12">
                        <div class="pricing-wrapper">
                            <div class="ts-header">
                                <h6>Starter</h6>
                                <span>Try and decide.</span>
                            </div>
                            <h3 class="price">KES {{ number_format(10000) }}</h3>
                            <div class="pricing-body">
                                <div class="feature">
                                    <i data-feather="check"></i>
                                    <span class="name">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Similique at minus doloremque eaque dolorum aut facere
                                        dolorem hic tempore sint atque id consequatur accusamus unde est ipsum iste,
                                        rerum voluptatibus?</span>
                                </div>

                            </div>
                            <div class="pricing-footer">
                                <a class="rn-btn" href="#contacts"><span>BUY NOW</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Pricing Area -->

        <!-- Start News Area -->
        <div class="rn-blog-area rn-section-gap section-separator" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true"
                            class="section-title text-center">
                            <span class="subtitle">Visit Our blog and give us your feedback</span>
                            <h2 class="title">Our Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row row--25 mt--30 mt_md--10 mt_sm--10">

                    <!-- Start Single blog -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="400" data-aos-once="true"
                        class="col-lg-6 col-xl-4 mt--30 col-md-6 col-sm-12 col-12 mt--30">
                        <div class="rn-blog" data-toggle="modal" data-target="#exampleModalCenters">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="client/images/blog/blog-01.jpg" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">Canada</a>
                                        </div>
                                        <div class="meta">
                                            <span><i class="feather-clock"></i> 2 min read</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">T-shirt design is the part
                                            of design
                                            <i class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single blog -->

                    <!-- Start Single blog -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="600" data-aos-once="true"
                        class="col-lg-6 col-xl-4 mt--30 col-md-6 col-sm-12 col-12 mt--30">
                        <div class="rn-blog" data-toggle="modal" data-target="#exampleModalCenters">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="client/images/blog/blog-02.jpg" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">Development</a>
                                        </div>
                                        <div class="meta">
                                            <span><i class="feather-clock"></i> 2 hour read</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">The services provide for
                                            design <i class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single blog -->

                    <!-- Start Single blog -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="800" data-aos-once="true"
                        class="col-lg-6 col-xl-4 mt--30 col-md-6 col-sm-12 col-12 mt--30">
                        <div class="rn-blog" data-toggle="modal" data-target="#exampleModalCenters">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="client/images/blog/blog-03.jpg" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">Application</a>
                                        </div>
                                        <div class="meta">
                                            <span><i class="feather-clock"></i> 5 min read</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">Mobile app landing design &
                                            app
                                            maintain<i class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single blog -->

                </div>
            </div>
        </div>
        <!-- ENd Mews Area -->
        <!-- Start Contact section -->
        <div class="rn-contact-area rn-section-gap section-separator" id="contacts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">Contact</span>
                            <h2 class="title">Contact Us</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--50 mt_md--40 mt_sm--40 mt-contact-sm">
                    <div class="col-lg-5">
                        <div class="contact-about-area">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="thumbnail">
                                        <img src="client/images/contact/contact1.png" alt="contact-img">
                                    </div>
                                    <div class="title-area">
                                        <h4 class="title">Shirley E.</h4>
                                        {{-- <span>Hybrid Shooter</span> --}}
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="thumbnail">
                                        <img src="client/images/contact/contact1.png" alt="contact-img">
                                    </div>
                                    <div class="title-area">
                                        <h4 class="title">Wambui P. </h4>
                                        {{-- <span>Hybrid Shooter</span> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="description">
                                <p>We are available for freelance work.Connect with us via call or via email
                                </p>
                                <div class="row mb-5">
                                    <div class="col-6"><span class="phone">
                                            Phone: <a href="tel:+254715903918"><small>+254 715 903 918</small>
                                            </a></span>
                                    </div>
                                    <div class="col-6"><span class="phone">
                                            Phone: <a href="tel:+254718491650"><small>+254 718 491 650</small>
                                            </a></span>
                                    </div>
                                </div>
                                <span class="mail text-center">Email: <a
                                        href="mailto:info@elsieworks.com">info@elsieworks.com</a></span>
                            </div>
                            <div class="social-area">
                                <div class="name">FIND US HERE</div>
                                <div class="social-icone">
                                    <a href="https://www.facebook.com/ElsieWorks/"><i data-feather="facebook"></i></a>
                                    <a href="https://www.instagram.com/elsieworks_/"><i
                                            data-feather="instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos-delay="600" class="col-lg-7 contact-input">
                        <div class="contact-form-wrapper">
                            <div class="introduce">

                                <form class="rnt-contact-form rwt-dynamic-form row" method="POST"
                                    action="{{ route('contacts.create') }}">
                                    @method('POST')
                                    @csrf
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="contact-name">Your Name</label>
                                            <input name="name" class="form-control form-control-lg" id="contact-name"
                                                type="text">
                                            <span class="error text-danger" id="nameErrorMsg"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="contact-phone">Phone Number</label>
                                            <input name="phone_number" class="form-control" id="contact-phone"
                                                type="text">
                                            <span class="error text-danger" id="mobileErrorMsg"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="contact-email">Email</label>
                                            <input class="form-control form-control-sm" id="contact-email" name="email"
                                                type="email">
                                            <span class="error text-danger" id="emailErrorMsg"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="subject">subject</label>
                                            <input class="form-control form-control-sm" id="subject" name="subject"
                                                type="text">
                                            <span class="error text-danger" id="subjectErrorMsg"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="contact-message">Your Message</label>
                                            <textarea name="message" id="contact-message" cols="30" rows="10"></textarea>
                                            <span class="error text-danger" id="messageErrorMsg"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <button name="submit" type="submit" class="rn-btn">
                                            <span>SEND MESSAGE</span>
                                            <i data-feather="arrow-right"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contuct section -->
        <!-- Modal Blog Body area Start -->
        <div class="modal fade" id="exampleModalCenters" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-news" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i data-feather="x"></i></span>
                        </button>
                    </div>

                    <!-- End of .modal-header -->

                    <div class="modal-body">
                        <img src="client/images/blog/blog-big-01.jpg" alt="news modal"
                            class="img-fluid modal-feat-img">
                        <div class="news-details">
                            <span class="date">2 May, 2021</span>
                            <h2 class="title">Digital Marketo to Their New Office.</h2>
                            <p>Nobis eleifend option congue nihil imperdiet doming id quod mazim placerat
                                facer
                                possim assum.
                                Typi non
                                habent claritatem insitam; est usus legentis in iis qui facit eorum
                                claritatem.
                                Investigationes
                                demonstraverunt
                                lectores legere me lius quod ii legunt saepius. Claritas est etiam processus
                                dynamicus, qui
                                sequitur
                                mutationem consuetudium lectorum.</p>
                            <h4>Nobis eleifend option conguenes.</h4>
                            <p>Mauris tempor, orci id pellentesque convallis, massa mi congue eros, sed
                                posuere
                                massa nunc quis
                                dui.
                                Integer ornare varius mi, in vehicula orci scelerisque sed. Fusce a massa
                                nisi.
                                Curabitur sit
                                amet
                                suscipit nisl. Sed eget nisl laoreet, suscipit enim nec, viverra eros. Nunc
                                imperdiet risus
                                leo,
                                in rutrum erat dignissim id.</p>
                            <p>Ut rhoncus vestibulum facilisis. Duis et lorem vitae ligula cursus venenatis.
                                Class aptent
                                taciti sociosqu
                                ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc vitae
                                nisi
                                tortor. Morbi
                                leo
                                nulla, posuere vel lectus a, egestas posuere lacus. Fusce eleifend hendrerit
                                bibendum. Morbi
                                nec
                                efficitur ex.</p>
                            <h4>Mauris tempor, orci id pellentesque.</h4>
                            <p>Nulla non ligula vel nisi blandit egestas vel eget leo. Praesent fringilla
                                dapibus dignissim.
                                Pellentesque
                                quis quam enim. Vestibulum ultrices, leo id suscipit efficitur, odio lorem
                                rhoncus dolor, a
                                facilisis
                                neque mi ut ex. Quisque tempor urna a nisi pretium, a pretium massa
                                tristique.
                                Nullam in
                                aliquam
                                diam. Maecenas at nibh gravida, ornare eros non, commodo ligula. Sed
                                efficitur
                                sollicitudin
                                auctor.
                                Quisque nec imperdiet purus, in ornare odio. Quisque odio felis, vestibulum
                                et.</p>
                        </div>

                        <!-- Comment Section Area Start -->
                        <div class="comment-inner">
                            <h3 class="title mb--40 mt--50">Leave a Reply</h3>
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="rnform-group"><input type="text" placeholder="Name">
                                        </div>
                                        <div class="rnform-group"><input type="email" placeholder="Email">
                                        </div>
                                        <div class="rnform-group"><input type="text" placeholder="Website">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="rnform-group">
                                            <textarea placeholder="Comment"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <a class="rn-btn" href="#"><span>SUBMIT NOW</span></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Comment Section End -->
                    </div>
                    <!-- End of .modal-body -->
                </div>
            </div>
        </div>
        <!-- End Modal Blog area -->
        <!-- Back to  top Start -->
        <div class="backto-top">
            <div>
                <i data-feather="arrow-up"></i>
            </div>
        </div>
        <!-- Back to top end -->

    </main>

    <!-- Rn footer area Start -->
    <div id="footer" class="rn-footer-area footer-style-2 rn-section-gapTop section-separator">
        <div class="copyright text-center ptb--40 section-separator">
            <p class="description">© 2021. All rights reserved by <a target="_blank"
                    href="https://elsieworks.com">ElsieWorks</a></p>
        </div>
    </div>
    <!-- Rn footer area end -->
    <!-- JS ============================================ -->
    @include('layouts.partial.js')
</body>

</html>
