<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SEATA</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">


    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/icon/xfavicon.png.pagespeed.ic.VDbWx8TeWc.png">
    <link rel="stylesheet" href="{{ asset('themes/universityedu/assets/css/bootstrap.min.css+owl.carousel.min.css+slicknav.css+animate.min.css+magnific-popup.css+fontawesome-all.min.css+themify-icons.css+slick.css+nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('themes/universityedu/assets/css/A.style.css.pagespeed.cf.ihVIXitPqH.css') }}">

@livewireStyles

<!-- Scripts -->
<script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>

<header>
    <div class="header-area" style="background-color: #f7f7f7;">
        <div class="header-bottom  header-sticky">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between flex-wrap position-relative">
                    <div class="left-side d-flex align-items-center">
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('images/logo.jpeg') }}" style="width: 90px;" alt="">
                            </a>
                        </div>
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="index-2.html">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="programs.html">Programs</a></li>
                                    <li><a href="blog.html">Blog</a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog_details.html">Blog Details</a></li>
                                            <li><a href="elements.html">Elements</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-right-btn d-flex f-right align-items-center">
                        <a href="#" class="header-btn2 d-none d-xl-inline-block">Call Us : <span> 0 (78) 675 3674</span></a>
                        <ul class="header-social d-none d-sm-block">
                            <li><a href="https://www.fb.com/sai4ull"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            <li> <a href="#"><i class="fab fa-youtube-square"></i></a></li>
                            <li> <a href="#"><i class="fas fa-envelope"></i></a></li>
                        </ul>
                    </div>

                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<main>

    <section class="slider-area position-relative">
        <div class="slider-active">

            <div class="single-slider slider-height hero-overly slider-bg1 d-flex  align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-10 col-sm-12">
                            <div class="hero-caption">
                                <span data-animation="fadeInUp" data-delay=".2s">EDUCATION & SCHOOL</span>
                                <h1 data-animation="fadeInUp" data-delay=".2s">SHOWCASE COURSES,
                                    EVENTS AND MORE!</h1>
                                <P data-animation="fadeInUp" data-delay=".4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Suspendisse varius enim in eros elementum tristique.</P>
                                <a href="programs.html" class="btn_1 hero-btn" data-animation="fadeInUp" data-delay=".8s">Get Started Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="about-area section-bg section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">

                    <div class="about-img about-img1  ">
                        <img src="assets/img/gallery/about1.jpg" alt="">
                    </div>
                </div>
                <div class="offset-xl-1 offset-lg-0 offset-sm-1 col-xxl-5 col-xl-5 col-lg-6 col-md-9 col-sm-11">
                    <div class="about-caption about-caption1">

                        <div class="section-tittle m-0">
                            <h2>A comprehensive
                                teaching approach</h2>
                            <p class="mb-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas felis felis, vulputate sit amet mauris et, semper aliquam ligula. Integer efficitur tellus metus, sed feugiat leo posuere ac. Morbi vitae tincidunt malesuada massa.</p>
                            <p>Maecenas felis felis, vulputate sit amet mauris et, semper aliquam ligula. Integer efficitur tellus metus, sed feugiat leo posuere ac. Morbi vitae tincidunt mi, et malesuada massa.</p>
                            <a href="#" class="browse-btn mt-20">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="home-blog section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-10">

                    <div class="section-tittle text-center mb-40">
                        <h2>Programs we Offer</h2>
                        <p>Maecenas felis felis, vulputate sit amet mauris et, semper aliquam ligula. Integer efficitur tellus metus, sed feugiat leo posuere ac. Morbi vitae tincidunt mi, et malesuada massa.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single-blogs mb-30">
                        <div class="blog-img">
                            <img src="assets/img/gallery/xblog1.jpg.pagespeed.ic.2rs9O2bIj7.jpg" alt="">
                        </div>
                        <div class="blog-caption">
                            <h3><a href="#">Faculty of Science</a></h3>
                            <p>Integer efficitur tellus metus, sed feugiat leo posuere ac. Morbi vitae tincidunt mi, et malesuada massa. Sed blandit placerat elit sit amet condimentum.</p>
                            <a href="#" class="browse-btn">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-blogs">
                        <div class="blog-img">
                            <img src="assets/img/gallery/xblog2.jpg.pagespeed.ic.7hTHVcZgvG.jpg" alt="">
                        </div>
                        <div class="blog-caption">
                            <h3><a href="#">Faculty of Arts</a></h3>
                            <p>Integer efficitur tellus metus, sed feugiat leo posuere ac. Morbi vitae tincidunt mi, et malesuada massa. Sed blandit placerat elit sit amet condimentum.</p>
                            <a href="#" class="browse-btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="visit-three fix">

        <div class="tailor-details">
            <div class="section-tittle mb-40">
                <h2>Essential resources</h2>
                <p>Maecenas felis felis, vulputate sit amet mauris et, semper aliquam ligula.<br> Integer efficitur tellus metus, sed feugiat leo posuere.</p>
            </div>

            <div class="single-gallery mb-15">
                <div class="thumb-content-box d-flex">
                    <div class="thumb-content">
                        <div class="capt">
                            <h3>First year students</h3>
                            <p>Integer efficitur tellus metus, sed feugiat leo posuere ac.<br> Morbi vitae tincidunt mi, et malesuada massa.</p>
                        </div>
                        <a href="projects.html"><i class="ti-angle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="single-gallery mb-15">
                <div class="thumb-content-box d-flex">
                    <div class="thumb-content">
                        <div class="capt">
                            <h3>Tuition & fees</h3>
                            <p>Integer efficitur tellus metus, sed feugiat leo posuere ac.<br> Morbi vitae tincidunt mi, et malesuada massa.</p>
                        </div>
                        <a href="projects.html"><i class="ti-angle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="single-gallery mb-15">
                <div class="thumb-content-box d-flex">
                    <div class="thumb-content">
                        <div class="capt">
                            <h3>International students</h3>
                            <p>Integer efficitur tellus metus, sed feugiat leo posuere ac.<br> Morbi vitae tincidunt mi, et malesuada massa.</p>
                        </div>
                        <a href="projects.html"><i class="ti-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="visit-team"></div>
    </section>


    <section class="class-offer-area section-padding border-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">

                    <div class="section-tittle  d-flex justify-content-between align-items-center">
                        <h2>Top Stories</h2>
                        <a href="#" class="browse-btn mb-20">More Stories</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="properties pb-30">
                        <div class="properties__card">
                            <div class="properties__img">
                                <a href="#"><img src="assets/img/gallery/class-img1.jpg" alt=""></a>
                            </div>
                            <div class="properties__caption text-center">
                                <h3><a href="#">Linguistics alumna says recognizing Indigenous Languages Day is crucial to our histories</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="properties pb-30">
                        <div class="properties__card">
                            <div class="properties__img">
                                <a href="#"><img src="assets/img/gallery/class-img2.jpg" alt=""></a>
                            </div>
                            <div class="properties__caption text-center">
                                <h3><a href="#">Linguistics alumna says recognizing Indigenous Languages Day is crucial to our histories</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="properties pb-30">
                        <div class="properties__card">
                            <div class="properties__img">
                                <a href="#"><img src="assets/img/gallery/class-img3.jpg" alt=""></a>
                            </div>
                            <div class="properties__caption text-center">
                                <h3><a href="#">Linguistics alumna says recognizing Indigenous Languages Day is crucial to our histories</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="brand-area section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-10">

                    <div class="section-tittle text-center mb-60">
                        <h2>Our Pertners</h2>
                        <p>Maecenas felis felis, vulputate sit amet mauris et, semper aliquam ligula. Integer efficitur tellus metus, sed feugiat leo posuere.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-end">
                <div class="col-xl-8 col-lg-9">
                    <div class="brand-active text-center">
                        <div class="single-brand">
                            <img src="assets/img/gallery/brand1.png" alt="">
                        </div>
                        <div class="single-brand">
                            <img src="assets/img/gallery/brand2.png" alt="">
                        </div>
                        <div class="single-brand">
                            <img src="assets/img/gallery/brand3.png" alt="">
                        </div>
                        <div class="single-brand">
                            <img src="assets/img/gallery/brand4.png" alt="">
                        </div>
                        <div class="single-brand">
                            <img src="assets/img/gallery/brand2.png" alt="">
                        </div>
                        <div class="single-brand">
                            <img src="assets/img/gallery/brand3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="visit-one fix">

        <div class="visit-team">
            <div class="wrapper"></div>
        </div>

        <div class="tailor-details">
            <div class="section-tittle section-tittle2 mb-25">
                <h2>TRUSTED BY OVER <br> 6000+ STUDENTS</h2>
                <p class="mb-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas felis felis, vulputate sit amet mauris et, semper aliquam ligula. Integer efficitur tellus metus, sed feugiat leo posuere ac. Morbi vitae tincidunt malesuada massa.</p>
                <p class="mb-30">Maecenas felis felis, vulputate sit amet mauris et, semper aliquam ligula. Integer efficitur tellus metus, sed feugiat leo posuere ac. Morbi vitae tincidunt mi, et malesuada massa.</p>
                <a href="#" class="browse-btn browse-btn2 mt-20">Join Now</a>
            </div>
        </div>
    </section>

</main>
<footer>
    <div class="footer-wrapper gray-bg">
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-20">

                                <div class="footer-logo mb-35">
                                    <a href="index-2.html"><img src="assets/img/logo/xlogo2_footer.png.pagespeed.ic.S0oMJmi8AE.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href="#">Work</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Products</a></li>
                                    <li><a href="#">Tips & Tricks</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Programs</h4>
                                <ul>
                                    <li><a href="#">Air freight</a></li>
                                    <li><a href="#">Ocean freight</a></li>
                                    <li><a href="#">Large projects</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Resourses</h4>
                                <ul>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Submit Ticket</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-8 col-sm-10">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle mb-10">
                                <h4>Newsletter</h4>
                                <p>Subscribe newsletter to get updates.</p>
                            </div>

                            <div class="footer-form mb-20">
                                <div id="mc_embed_signup">
                                    <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" class="subscribe_form relative mail_part">
                                        <input type="email" name="email" id="newsletter-form-email" placeholder="Enter your email" class="placeholder hide-on-focus">
                                        <div class="form-icon">
                                            <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">
                                                <img src="assets/img/icon/Icon-send.svg" alt="">
                                            </button>
                                        </div>
                                        <div class="mt-10 info"></div>
                                    </form>
                                </div>
                            </div>

                            <div class="footer-social mt-30">
                                <a href="https://www.fb.com/sai4ull"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank" rel="nofollow noopener">Colorlib</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="back-top">
    <a title="Go to Top" href="#"><i class="fas fa-long-arrow-alt-up"></i></a>
</div>

<script src="{{ asset('themes/universityedu/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<script src="{{ asset('themes/universityedu/assets/js/popper.min.js+bootstrap.min.js.pagespeed.jc.FmVyK_a8l2.js') }}"></script><script>eval(mod_pagespeed_j4u5mnk$uM);</script>
<script>eval(mod_pagespeed_YE8CKakLEt);</script>

<script src="{{ asset('themes/universityedu/assets/css/bootstrap.min.css+owl.carousel.min.css+slicknav.css+animate.min.css+magnific-popup.css+fontawesome-all.min.css+themify-icons.css+slick.css+nice-select.css') }}"></script>
<script src="{{ asset('themes/universityedu/assets/js/jquery.slicknav.min.js+countdown.min.js+wow.min.js+jquery.magnific-popup.js+jquery.nice-select.min.js+jquery.counterup.min.js+waypoints.min.js+contact.js.pa') }}"></script>
<script src="{{ asset('themes/universityedu/assets/js/jquery.form.js+jquery.validate.min.js+mail-script.js+jquery.ajaxchimp.min.js+plugins.js+main.js.pagespeed.jc.EbtI62ra0s.js') }}"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
<script defer src="../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"650134a09b662254","version":"2021.5.1","si":10}'></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v64f9daad31f64f81be21cbef6184a5e31634941392597" integrity="sha512-gV/bogrUTVP2N3IzTDKzgP0Js1gg4fbwtYB6ftgLbKQu/V8yH2+lrKCfKHelh4SO3DPzKj4/glTO+tNJGDnb0A==" data-cf-beacon='{"rayId":"6b10f7c4fd133d9a","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.11.0","si":100}' crossorigin="anonymous"></script>
</body>

{{ $slot }}

@livewireScripts
</body>
</html>
