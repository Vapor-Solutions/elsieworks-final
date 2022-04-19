<!-- Start Testimonia Area  -->
<div class="rn-testimonial-area rn-section-gap pb_xl--130 mb_dec--25" id="testimonial">
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
        <div class="row">
            <div class="col-lg-12">
                <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" data-aos-once="true"
                    class="testimonial-activation testimonial-pb">
                    @foreach (App\Models\Testimonial::all() as $testimonial)
                        <!-- Start Single testiminail -->
                        <div class="testimonial mt--50 mt_lg--30">
                            <div class="inner">
                                <div class="card-info">
                                    <div class="card-thumbnail">
                                        <img src="/storage/testimonials/{{ $testimonial->image }}"
                                            alt="Testimonial-image">
                                    </div>
                                    <div class="card-content">
                                        {{-- <span class="subtitle mt--10">Rainbow-Themes</span> --}}
                                        <h3 class="title">{{ $testimonial->client->name }}</h3>
                                        {{-- <span class="designation">Chief Operating Officer</span> --}}
                                    </div>
                                </div>
                                <div class="card-description">
                                    <div class="title-area">
                                        <div class="title-info">
                                            {{-- <h3 class="title">Android App Development</h3> --}}
                                            <span class="date">{{ Carbon\Carbon::parse($testimonial->created_at)->format('jS \of F, Y') }}</span>
                                        </div>
                                        {{-- <div class="rating">
                                            <img src="/client/images/icons/rating.png" alt="rating-image">
                                            <img src="/client/images/icons/rating.png" alt="rating-image">
                                            <img src="/client/images/icons/rating.png" alt="rating-image">
                                            <img src="/client/images/icons/rating.png" alt="rating-image">
                                            <img src="/client/images/icons/rating.png" alt="rating-image">
                                        </div> --}}
                                    </div>
                                    <div class="seperator"></div>
                                    <p class="discription">
                                        {{$testimonial->text}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--End Single testiminail -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Testimonia Area  -->
