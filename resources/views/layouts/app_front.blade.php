<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sensive Blog - Home</title>
    <link rel="icon" href="{{ asset('front/theme/sensive/img/xfevicon.png.pagespeed.ic.lbcu10xt6h.png') }}" type="image/png">

    <link rel="stylesheet" href="{{ asset('front/css/theme.default.min.css_owl-carousel___owl.carousel.min.css_mcc.drkmi7mkxc.css.pagespeed.cf.ustjvpu8k2_bfegwqoywty4uik2mh0s6f.css') }}"/>
    <link rel="stylesheet" href="{{ asset('front/theme/sensive/css/a.style.css.pagespeed.cf.ajgzvhjfct.css') }}">
</head>
<body>
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container box_1620">
                <a class="navbar-brand logo_h" href="index.html"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-center">
                        <li class="nav-item active"><a class="nav-link" href="{{url('')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('')}}">Archive</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('')}}">Category</a>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{url('')}}">Blog
                                        Details</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{url('')}}">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right navbar-social">
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                        <li><a href="#"><i class="ti-skype"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

@yield('content')


<footer class="footer-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>About Us</h6>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore dolore
                        magna aliqua.
                    </p>
                </div>
            </div>
            <div class="col-lg-4  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Newsletter</h6>
                    <p>Stay update with our latest</p>
                    <div class="" id="mc_embed_signup">
                        <form target="_blank" novalidate
                              action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                              class="form-inline">
                            <div class="d-flex flex-row">
                                <input class="form-control" name="EMAIL" placeholder="Enter Email"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
                                       required type="email">
                                <button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span>
                                </button>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                           type="text">
                                </div>
                            </div>
                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget mail-chimp">
                    <h6 class="mb-20">Instragram Feed</h6>
                    <ul class="instafeed d-flex flex-wrap">
                        <li><img src="theme/sensive/img/instagram/xi1.jpg.pagespeed.ic.icps99zx04.jpg" alt=""></li>
                        <li><img src="theme/sensive/img/instagram/xi2.jpg.pagespeed.ic.av0zdx-xg2.jpg" alt=""></li>
                        <li><img src="theme/sensive/img/instagram/xi3.jpg.pagespeed.ic.i6wwsrn1am.jpg" alt=""></li>
                        <li><img src="theme/sensive/img/instagram/xi4.jpg.pagespeed.ic.ikpavusnvy.jpg" alt=""></li>
                        <li><img src="theme/sensive/img/instagram/xi5.jpg.pagespeed.ic.zqp4qxu4mq.jpg" alt=""></li>
                        <li><img src="theme/sensive/img/instagram/xi6.jpg.pagespeed.ic.n2qtw2twe4.jpg" alt=""></li>
                        <li><img src="theme/sensive/img/instagram/xi7.jpg.pagespeed.ic.liqx3mcspl.jpg" alt=""></li>
                        <li><img src="theme/sensive/img/instagram/xi8.jpg.pagespeed.ic.bdgm9-yaaz.jpg" alt=""></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Follow Us</h6>
                    <p>Let us be social</p>
                    <div class="footer-social d-flex align-items-center">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-dribbble"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-behance"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
            <p class="footer-text m-0">
                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a
                    href="https://colorlib.com" target="_blank">Colorlib</a>
            </p>
        </div>
    </div>
</footer>
<script src="{{ asset('front/theme/sensive/vendors/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('front/theme/sensive/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('front/script/l.carousel.min.js_js__jquery.ajaxchimp.min.js_js__mail-script.js_js__main.js.pagespeed.jc.qqhi14luam_oendkukm34iwhd2bo6wd5s.js') }}"></script>
<script>eval(mod_pagespeed_2rTvleU7$q);</script>
<script>eval(mod_pagespeed_ZtG6nSUy9D);</script>
<script>eval(mod_pagespeed_BZ6fs3xjMU);</script>
<script>eval(mod_pagespeed_dVWZN_EmGh);</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>


</body>
</html>
