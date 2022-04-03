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
                <div data-toggle="modal" data-target="#modal{{ $service->id }}" data-aos="fade-up"
                    data-aos-duration="500" data-aos-delay="100" data-aos-once="true"
                    class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                    <div class="rn-service">
                        <div class="inner">
                            <div class="icon">
                                <i data-feather="menu"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">{{ $service->title }}</h4>
                                <p class="description">{{ $service->description }}</p>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-lg">
                                    <i class="feather-arrow-right"></i>
                                </button>


                            </div>

                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div style="z-index: 9999" class="modal fade" id="modal{{ $service->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="row">
                                <div class="col-4 my-2">
                                    <a href="/client/images/bg/bg-image-1.jpg" class="glightbox3" data-gallery="gallery1" >
                                        <img src="/client/images/bg/bg-image-1.jpg" alt="image">
                                    </a>
                                </div>

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
