@if (count(App\Models\Client::all()) > 0)
    <!-- Start Cient Area -->
    <div id="client" class="rn-client-area rn-client-style-2 rn-section-gap section-separator">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true"
                        class="section-title text-center">
                        <span class="subtitle">Here are</span>
                        <h2 class="title">Our Trusted Clients</h2>
                    </div>
                    <div>
                        <div class="client-card">
                            @foreach (App\Models\Client::all() as $client)
                                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100"
                                    data-aos-once="true" class="main-content">
                                    <div class="inner text-center">
                                        <div class="thumbnail">
                                            <img class="rounded-circle shadow"
                                                src="{{$client->image_url }}" width="75px" alt="Client-image">
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
@endif
