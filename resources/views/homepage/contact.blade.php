<!-- Start Contact section -->
<div class="rn-contact-area rn-section-gap section-separator" id="contacts">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <span class="subtitle">Contact</span>
                    <h2 class="title">Contact Us</h2>
                </div>
            </div>
        </div>
        <div class="row mt--50 mt_md--40 mt_sm--40 mt-contact-sm">
            <div class="col-lg-5">
                <div class="contact-about-area">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="thumbnail">
                                <img src="client/images/contact/contact1.jpg" alt="contact-img">
                            </div>
                            <div class="title-area">
                                <h4 class="title">Shirley E.</h4>
                                {{-- <span>Hybrid Shooter</span> --}}
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="thumbnail">
                                <img src="client/images/contact/contact2.jpg" alt="contact-img">
                            </div>
                            <div class="title-area">
                                <h4 class="title">Wambui P. </h4>
                                {{-- <span>Hybrid Shooter</span> --}}
                            </div>
                        </div>
                    </div>
                    <div class="description">
                        <p>We are available for freelance work.Connect with us via call or via email
                        </p>
                        <div class="row mb-5">
                            <div class="col-6"><span class="phone">
                                    Phone: <a href="tel:+254715903918"><small>+254 715 903 918</small>
                                    </a></span>
                            </div>
                            <div class="col-6"><span class="phone">
                                    Phone: <a href="tel:+254718491650"><small>+254 718 491 650</small>
                                    </a></span>
                            </div>
                        </div>
                        <span class="mail text-center">Email: <a
                                href="mailto:info@elsieworks.com">info@elsieworks.com</a></span>
                    </div>
                    <div class="social-area">
                        <div class="name">FIND US HERE</div>
                        <div class="social-icone">
                            <a href="https://www.facebook.com/ElsieWorks/"><i data-feather="facebook"></i></a>
                            <a href="https://www.instagram.com/elsieworks_/"><i
                                    data-feather="instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos-delay="600" class="col-lg-7 contact-input">
                <div class="contact-form-wrapper">
                    <div class="introduce">

                        <form class="rnt-contact-form rwt-dynamic-form row" method="POST"
                            action="{{ route('contacts.create') }}">
                            @method('POST')
                            @csrf
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="contact-name">Your Name</label>
                                    <input name="name" class="form-control form-control-lg" id="contact-name"
                                        type="text">
                                    <span class="error text-danger" id="nameErrorMsg"></span>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="contact-phone">Phone Number</label>
                                    <input name="phone_number" class="form-control" id="contact-phone"
                                        type="text">
                                    <span class="error text-danger" id="mobileErrorMsg"></span>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="contact-email">Email</label>
                                    <input class="form-control form-control-sm" id="contact-email" name="email"
                                        type="email">
                                    <span class="error text-danger" id="emailErrorMsg"></span>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="subject">subject</label>
                                    <input class="form-control form-control-sm" id="subject" name="subject"
                                        type="text">
                                    <span class="error text-danger" id="subjectErrorMsg"></span>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="contact-message">Your Message</label>
                                    <textarea name="message" id="contact-message" cols="30" rows="10"></textarea>
                                    <span class="error text-danger" id="messageErrorMsg"></span>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <button name="submit" type="submit" class="rn-btn">
                                    <span>SEND MESSAGE</span>
                                    <i data-feather="arrow-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contuct section -->
