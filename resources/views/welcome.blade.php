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
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <script type="text/javascript">
        const lightbox = GLightbox({
            touchNavigation: true,
            loop: true,
            autoplayVideos: true
        });
    </script>

    @include('layouts.partial.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>

</head>

<body class="white-version home-classic spybody" data-spy="scroll" data-target=".navbar-example2" data-offset="150">
    @include('sweetalert::alert')
    <!-- Start Main Page Wrapper -->
    <main class="main-page-wrapper spybody" data-spy="scroll" data-target=".navbar-example2" data-offset="150">

        @include('homepage.header')

        @include('homepage.popup-mobile')

        @include('homepage.slider')

        @include('homepage.about')

        @include('homepage.services')

        @include('homepage.clients')

        @if (count(App\Models\Testimonial::all()) > 0)
            @include('homepage.testimonials')
        @endif

        @include('homepage.pricing')

        @if (count(App\Models\Blog::all()) > 0)
            @include('homepage.blog')
        @endif

        @include('homepage.contact')


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
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function(event) {
            console.log("loaded");
            const lightbox = GLightbox({
                selector: 'glightbox1',
                touchNavigation: true,
                loop: true,
                autoplayVideos: true,
                onOpen: () => {
                    console.log('Lightbox opened')
                },
                beforeSlideLoad: (slide, data) => {
                    // Need to execute a script in the slide?
                    // You can do that here...
                }
            });
            console.log("worked");
        })
    </script>
</body>

</html>
