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
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/about-us">About Us</a></li>
{{--                                    <li><a href="blog.html">Blog</a>--}}
{{--                                        <ul class="submenu">--}}
{{--                                            <li><a href="blog.html">Blog</a></li>--}}
{{--                                            <li><a href="blog_details.html">Blog Details</a></li>--}}
{{--                                            <li><a href="elements.html">Elements</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
                                    <li><a href="contact.html">Founder</a></li>
                                    <li><a href="contact.html">Services</a></li>
                                    <li><a href="/contact">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-right-btn d-flex f-right align-items-center">
                        <a href="#" class="header-btn2 d-none d-xl-inline-block">Call Us : <span> 0 (50) 443 8849</span></a>
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
    {{ $slot }}
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

@livewireScripts
</body>
</html>
