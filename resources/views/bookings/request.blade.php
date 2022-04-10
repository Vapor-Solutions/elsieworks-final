<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Booking ({{ $rate->service_category->title??$rate->service->title }}) || {{ config('app.name', 'Laravel') }}</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/ew-primary.ico">
    @include('layouts.partial.css')

</head>

<body class="white-version home-classic spybody" data-spy="scroll" data-target=".navbar-example2" data-offset="150">
    <!-- Start Main Page Wrapper -->
    <main class="main-page-wrapper spybody" data-spy="scroll" data-target=".navbar-example2" data-offset="150">


        <div class="container my-5">
            <div class="text-center my-5">
            <img src="/ew-secondary.png" width="25%" alt="">
            </div>
            <h5 class="text-center my-5 text-dark">
                Booking Form for {{ $rate->service_category->title??$rate->service->title }}
            </h5>
            <div class="row justify-content-center mt--50 mt_md--40 mt_sm--40 mt-contact-sm">
                <div data-aos-delay="600" class="col-lg-7 contact-input">
                    <div class="contact-form-wrapper">
                        <div class="introduce">

                            <form class="row" method="POST" action="{{ route('booking.create', $rate->id) }}">
                                @method('POST')
                                @csrf
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="contact-name">Name</label>
                                        <input class="form-control form-control-sm" id="contact-name" name="name" type="text">
                                        <span class="error text-danger" id="emailErrorMsg"></span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="contact-email">Email</label>
                                        <input class="form-control form-control-sm" id="contact-email" name="email" type="email">
                                        <span class="error text-danger" id="emailErrorMsg"></span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="contact-email">Phone Number</label>
                                        <input class="form-control form-control-sm" id="contact-email" name="phone_number"
                                            type="text">
                                        <span class="error text-danger" id="emailErrorMsg"></span>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="subject">Service Requested</label>
                                        <input disabled class="form-control form-control-sm" id="subject" name="subject"
                                            type="text" value="{{ $rate->service_category->title ?? $rate->service->title }}">
                                        <span class="error text-danger" id="subjectErrorMsg"></span>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="contact-message">Special Requests <small>(Optional)</small></label>
                                        <textarea name="message" id="contact-message" cols="30" rows="10"></textarea>
                                        <span class="error text-danger" id="messageErrorMsg"></span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="contact-message">Date & Time Expected</label>
                                        <input type="datetime-local" name="booking_time" class="form-control form-control-sm">
                                        <span class="error text-danger" id="messageErrorMsg"></span>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <a href="{{ route('home') }}" class="rn-btn">
                                        <i data-feather="arrow-left"></i>
                                        <span class="text-uppercase">Go Back Home</span>
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <button name="submit" type="submit" class="rn-btn">
                                        <span class="text-uppercase">Book Now</span>
                                        <i data-feather="arrow-right"></i>
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



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

    @include('layouts.partial.js')
</body>

</html>
