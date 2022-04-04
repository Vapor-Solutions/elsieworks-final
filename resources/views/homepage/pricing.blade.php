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

            <div class="col-lg-8 col-sm-12">
                <div class="row">
                    @foreach (App\Models\Service::all() as $service)
                        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" data-aos-once="true"
                            class="col-6 mt-5">
                            <div class="pricing-wrapper">
                                <div class="ts-header">
                                    <h6>{{ $service->title }}</h6>
                                    <span>Check it out and Decide</span>
                                </div>
                                <div class="pricing-footer">
                                    <a class=" rn-btn" data-toggle="modal"
                                        data-target="#package{{ $service->id }}"><span>PACKAGES</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" style="z-index: 9999" id="package{{ $service->id }}" tabindex="-1"
                            role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title text-dark">{{ $service->title }}</h6>
                                    </div>
                                    <div class="modal-body mt-4">
                                        <div class="container-fluid">
                                            @if (count($service->categories)>0)
                                                @foreach ($service->categories as $category)
                                                    @if (count($category->rates) > 0)
                                                        <div>
                                                            <small class="text-center text-dark text-uppercase">
                                                                {{ $category->title }}
                                                            </small>

                                                            <div class="row mt-3 mb-5">
                                                                @foreach ($category->rates as $rate)
                                                                    <div class="col-lg-4 col-md-6 col-12">
                                                                        <div data-aos="fade-up" data-aos-duration="1000"
                                                                            data-aos-delay="300" data-aos-once="true"
                                                                            class="">
                                                                            <div class="pricing-wrapper">
                                                                                <div class="ts-header">
                                                                                    <h6>{{ $rate->title }}</h6>
                                                                                </div>
                                                                                <h3 class="price">KES
                                                                                    {{ number_format($rate->price) }}
                                                                                </h3>
                                                                                <small>{{ $rate->price_type->title }}</small>
                                                                                <div class="pricing-body">
                                                                                    <small>{{ $rate->description }}</small>
                                                                                </div>
                                                                                <div class="pricing-footer">
                                                                                    <a class="rn-btn"
                                                                                        href="#contacts"><span>BOOK
                                                                                            NOW</span></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @else
                                                @if (count($service->rates) > 0 )
                                                    <div class="row mt-3 mb-5">
                                                        @foreach ($service->rates as $rate)
                                                            <div class="col-lg-4 col-md-6 col-12">
                                                                <div data-aos="fade-up" data-aos-duration="1000"
                                                                    data-aos-delay="300" data-aos-once="true"
                                                                    class="">
                                                                    <div class="pricing-wrapper">
                                                                        <div class="ts-header">
                                                                            <h6>{{ $rate->title }}</h6>
                                                                        </div>
                                                                        <h3 class="price">KES
                                                                            {{ number_format($rate->price) }}</h3>
                                                                        <small>{{ $rate->price_type->title }}</small>
                                                                        <div class="pricing-body">
                                                                            <small>{{ $rate->description }}</small>
                                                                        </div>
                                                                        <div class="pricing-footer">
                                                                            <a class="rn-btn"
                                                                                href="#contacts"><span>BOOK
                                                                                    NOW</span></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endif
                                            @endif
                                        </div>
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
