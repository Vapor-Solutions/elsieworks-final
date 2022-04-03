<!-- Start Pricing area -->
<div id="pricing" class="rn-pricing-area pricing-style-2 rn-section-gap section-separator">
    <div class="container">
        <div class="row">

            <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" data-aos-once="true"
                class="col-lg-4 col-sm-12 my-auto">
                <div class="title-area-wrapper mb_md--20 mb_sm--20">
                    <div class="section-title text-left">
                        <span class="subtitle">Pricing</span>
                        <h2 class="title">Our Pricing</h2>
                    </div>
                    <p class="title-disc">
                        Our Rates vary fully depending on the type of services that you would like us to offer
                        and range on a variety of packages to give control over the quality and quantity we
                        deliver
                    </p>
                </div>
            </div>

            <div class="col-lg-6 col-sm-12">
                <div class="row">
                    @foreach (App\Models\Service::all() as $service)
                        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" data-aos-once="true"
                            class="col-6">
                            <div class="pricing-wrapper">
                                <div class="ts-header">
                                    <h6>{{ $service->title }}</h6>
                                    <span>Try and decide.</span>
                                </div>
                                <h3 class="price">{{ $service->price }}</h3>

                                <div class="pricing-footer">
                                    <a class=" rn-btn" data-toggle="modal" data-target="#package{{ $service->id }}"><span>PACKAGES</span></a>
                                </div>


                                <!-- Modal -->

                            </div>
                        </div>
                        <div class="modal fade" style="z-index: 9999" id="package{{ $service->id }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                        <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#book{{ $service->id }}">
                                              Launch
                                            </button>

                                            <!-- Modal -->

                                        </div>
                                    </div>
                                    <div class="modal fade" style="z-index: 99999" id="book{{ $service->id }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Modal title</h5>
                                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Body
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Pricing Area -->
