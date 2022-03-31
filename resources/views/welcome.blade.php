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
