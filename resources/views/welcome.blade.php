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

        @include('homepage.header')

        @include('homepage.popup-mobile')

        @include('homepage.slider')

        @include('homepage.about')

        @include('homepage.services')

        @include('homepage.clients')

        @include('homepage.testimonials')

        @include('homepage.pricing')

        @include('homepage.blog')

        @include('homepage.contact')


<<<<<<< HEAD
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
=======
>>>>>>> d37148261f7119661dfa1fcf8d5a0f0d4c2b4ab7
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
