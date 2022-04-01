<!-- Start Pricing area -->
<div id="pricing" class="rn-pricing-area pricing-style-2 rn-section-gap section-separator">
    <div class="container">
        <div class="row">

            <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" data-aos-once="true"
                class="col-lg-4 col-sm-12">
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

        </div>
    </div>
</div>
<!-- End Pricing Area -->
