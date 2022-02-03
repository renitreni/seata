<div>

    <div class="slider-area">
        <div class="slider-height2 slider-bg1 d-flex hero-overly align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-9">
                        <div class="hero-caption hero-caption2">
                            <h2>Conway Stanley</h2>
                            <p>Stanley Education and Training Academy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Get in Touch</h2>
                </div>
                <div class="col-lg-8">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    @if($errors->getMessages())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $item)
                                <div>{{ $item }}</div>
                            @endforeach
                        </div>
                    @endif
                    <form class="form-contact contact_form" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                              onfocus="this.placeholder = ''"
                                              onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"
                                              wire:model='body'></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text"
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
                                           placeholder="Enter your name" wire:model='name'>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email"
                                           onfocus="this.placeholder = ''"
                                           onblur="this.placeholder = 'Enter email address'" placeholder="Email"
                                           wire:model="from">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text"
                                           placeholder="Enter Subject" wire:model="subject_a">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">

                            <a class="button button-contactForm boxed-btn" href="#!" wire:click="submit">Send Email</a>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>69 Esker Woods Drive, Lucan,</h3>
                            <p>Co Dublin, Ireland</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>+1 253 565 2365</h3>
                            <p>Mon to Fri 9am to 6pm</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3><a>Info@seataedu.com</a></h3>
                            {{-- <h3><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3a494f4a4a55484e7a595556554856535814595557">[email&#160;protected]</a></h3> --}}
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



