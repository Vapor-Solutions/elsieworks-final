<!-- Start Testimonia Area  -->
<div class="rn-testimonial-area testimonial-style-2 testimonial-with-carousel rn-section-gapTop pb--80 pb_md--50 section-separator"
id="testimonial">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true"
                class="section-title text-center mb--20 mb_md--20 mb_sm--20">
                <span class="subtitle">What Clients Say</span>
                <h2 class="title">Testimonial</h2>
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
