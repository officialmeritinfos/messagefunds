<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('home/images/'.$web->favicon)}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('home/images/'.$web->favicon)}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('home/images/'.$web->favicon)}}" />
    <link rel="manifest" href="{{ asset('home/images/'.$web->logo) }} " />
    <meta name="og:title" content="{{$siteName}}"/>
    <meta name="og:type" content="company"/>
    <meta name="og:url" content="/"/>
    <meta name="og:image" content="{{asset('home/images/'.$web->favicon)}}"/>
    <meta name="og:site_name" content="{{$siteName}}"/>
    <meta name="og:description" content="Financial and Investment company made just for you."/>
    <meta name="description" content="{{$web->description}}">
    <meta name="keywords" content="business, marketing, agency">
    <title> {{$siteName}} | {{$pageName}}</title>
    <!-- favicons Icons -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('home/images/'.$web->favicon)}}" />
    @stack('css')

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('home/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/vendors/odometer/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/vendors/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/vendors/aivons-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('home/vendors/tiny-slider/tiny-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/vendors/reey-font/stylesheet.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/vendors/owl-carousel/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/vendors/twentytwenty/twentytwenty.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/vendors/bxslider/css/jquery.bxslider.css') }}" />
    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('home/css/aivons.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/css/aivons-responsive.css') }}" />

    <!-- RTL Styles -->
    <link rel="stylesheet" href="{{ asset('home/css/aivons-rtl.css') }}">

    <!-- color css -->
    <link rel="stylesheet" id="jssDefault" href="{{ asset('home/css/colors/color-default.css') }}">
    <link rel="stylesheet" id="jssMode" href="{{ asset('home/css/modes/aivons-normal.css') }}">

</head>

<body>
@inject('injected','App\Defaults\Custom')

<div class="preloader">
    <div class="preloader__image"></div><!-- /.preloader__image -->
</div>
<!-- /.preloader -->
<div class="page-wrapper">
    <header class="main-header main-header-three clearfix">
        <div class="container clearfix">
            <nav class="main-menu main-menu-three clearfix">
                <div class="main-menu-wrapper-three clearfix">
                    <div class="main-menu-wrapper__logo-3">
                        <a href="{{ url('/') }}"><img src="{{ asset('home/images/'.$web->logo) }}" alt=""></a>
                    </div>
                    <div class="main-menu-wrapper-three__main-menu">
                        <div class="main-menu-wrapper-three__main-menu-inner">
                            <a href="#" class="mobile-nav__toggler">
                                <span class="mobile-nav__toggler-bar"></span>
                                <span class="mobile-nav__toggler-bar"></span>
                                <span class="mobile-nav__toggler-bar"></span>
                            </a>
                            <ul class="main-menu__list">
                                <li>
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li>
                                    <a href="{{ url('about') }}">About</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Our Offerings</a>
                                    <ul>
                                        @foreach($injected->getServices() as $service)
                                            <li><a href="{{route('service.details',['id'=>$service->id])}}">{{$service->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Pages</a>
                                    <ul>
                                        <li><a href="{{url('plans')}}">Investment Plans</a></li>
                                        <li><a href="{{url('faqs')}}">Frequently Asked Questions</a></li>
                                        <li><a href="{{url('terms')}}">Terms & Conditions</a></li>
                                        <li><a href="{{url('privacy')}}">Privacy policy</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="cases">Account</a>
                                    <ul>
                                        <li><a href="{{route('login')}}" >Login</a></li>
                                        <li><a href="{{route('register')}}">Register</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <div class="stricky-header stricked-menu main-menu main-menu-three">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->


    @yield('content')


    <!--Site Footer One Start-->
    <footer class="site-footer">
        <div class="site-footer-shape wow slideInRight" data-wow-delay="100ms" data-wow-duration="3500ms"
             style="background-image: url({{ asset('home/images/shapes/footer-shape.png') }})"></div>
        <div class="container">
            <div class="site-footer__top">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-widget__column footer-widget__about">
                            <div class="footer-widget__about-logo">
                                <a href="{{ url('/') }}"><img src="{{ asset('home/images/'.$web->logo) }}" alt=""></a>
                            </div>
                            <p class="footer-widget__text">
                                We are the First and best financial company that cares about your financial well-being, and
                                it is our desire to help grow your finances.
                            </p>
                            <ul class="list-unstyled footer-widget__contact-list">
                                @if($web->phone)
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone-square-alt"></i>
                                        </div>
                                        <div class="text">
                                            <p><a href="tel:{{ $web->phone }}">{{ $web->phone }}</a></p>
                                        </div>
                                    </li>
                                @endif
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="text">
                                        <p><a href="mailto:{{$web->email}}">{{$web->email}}</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="text">
                                        <p>
                                            {!! $web->address !!}
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="footer-widget__column footer-widget__explore clearfix">
                            <h3 class="footer-widget__title">Industry we serve</h3>
                            <ul class="footer-widget__explore-list list-unstyled">
                                @foreach($injected->getServices() as $service)
                                    <li><a href="{{route('service.details',['id'=>$service->id])}}">{{$service->title}}</a></li>
                                @endforeach
                            </ul>
                            <ul class="footer-widget__explore-list footer-widget__explore-list-two list-unstyled">
                                <li><a href="{{ url('contact') }}">Support</a></li>
                                <li><a href="{{ url('terms') }}">Terms of use</a></li>
                                <li><a href="{{ url('privacy') }}">Privacy policy</a></li>
                                <li><a href="{{ url('faq') }}">Help</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-8 wow fadeInUp" data-wow-delay="400ms">
                        <div class="footer-widget__column footer-widget__newsletter">
                            <h3 class="footer-widget__title footer-widget__title-news">Latest News</h3>
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>
                                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
                                    {
                                        "feedMode": "market",
                                        "isTransparent": false,
                                        "displayMode": "regular",
                                        "width": "100%",
                                        "height": "100%",
                                        "colorTheme": "light",
                                        "locale": "en",
                                        "market": "index"
                                    }
                                </script>
                            </div>
                            <!-- TradingView Widget END -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer-bottom">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="site-footer-bottom__inner">
                            <div class="site-footer-bottom__left">
                                <p>© Copyright 2020 - {{ date('Y') }} by <a href="{{ url('/') }}">{{ $siteName }}</a></p>
                            </div>
                            <div class="site-footer__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="clr-fb"><i class="fab fa-facebook"></i></a>
                                <a href="#" class="clr-dri"><i class="fab fa-dribbble"></i></a>
                                <a href="#" class="clr-ins"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Site Footer One End-->


</div><!-- /.page-wrapper -->


<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="{{ url('/') }}" aria-label="logo image"><img src="{{ asset('home/images/'.$web->logo) }}" width="155"
                                                              alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:{{$web->email}}">{{ $web->email }}</a>
            </li>
            @if($web->phone)
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:{{ $web->phone }}">{{ $web->phone }}</a>
                </li>
            @endif
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-facebook-square"></a>
                <a href="#" class="fab fa-pinterest-p"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->



    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->


<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


<script src="{{ asset('home/vendors/jquery/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('home/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('home/vendors/jarallax/jarallax.min.js') }}"></script>
<script src="{{ asset('home/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('home/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
<script src="{{ asset('home/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
<script src="{{ asset('home/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('home/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
<script src="{{ asset('home/vendors/nouislider/nouislider.min.js') }}"></script>
<script src="{{ asset('home/vendors/odometer/odometer.min.js') }}"></script>
<script src="{{ asset('home/vendors/swiper/swiper.min.js') }}"></script>
<script src="{{ asset('home/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
<script src="{{ asset('home/vendors/wnumb/wNumb.min.js') }}"></script>
<script src="{{ asset('home/vendors/wow/wow.js') }}"></script>
<script src="{{ asset('home/vendors/isotope/isotope.js') }}"></script>
<script src="{{ asset('home/vendors/countdown/countdown.min.js') }}"></script>
<script src="{{ asset('home/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('home/vendors/twentytwenty/twentytwenty.js') }}"></script>
<script src="{{ asset('home/vendors/twentytwenty/jquery.event.move.js') }}"></script>
<script src="{{ asset('home/vendors/bxslider/js/jquery.bxslider.min.js') }}"></script>
<!-- template js -->
<script src="{{ asset('home/js/aivons.js') }}"></script>

<!-- Google language start -->
<style>

    #google_translate_element {
        z-index: 9999999;
        position: fixed;
        bottom: 25px;
        left: 15px;
    }

    .goog-te-gadget {
        font-family: Roboto, "Open Sans", sans-serif !important;
        text-transform: uppercase;
    }
    .goog-te-gadget-simple
    {
        padding: 0px !important;
        line-height: 1.428571429;
        color: white;
        vertical-align: middle;
        background-color: black;
        border: 1px solid #a5a5a599;
        border-radius: 4px;
        float: right;
        margin-top: -4px;
        z-index: 999999;
    }
    .goog-te-banner-frame.skiptranslate
    {
        display: none !important;
        color: white;
    }
    .goog-te-gadget-icon
    {
        background: none !important;
        display: none;
        color: white;
    }
    .goog-te-gadget-simple .goog-te-menu-value
    {
        font-size: 12px;
        color: white;
        font-family: 'Open Sans' , sans-serif;
    }
</style>
<div id="google_translate_element"></div>
<script type="text/javascript">
    window.onload = function googleTranslateElementInit() {
        new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- start popup massage -->
<div class="notifier" style="display: none;">
    <div class="txt" style="color:black;">While you are waiting,someone from <b></b> just traded with <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
</div>
<style>
    .notifier{
        border-radius: 7px;
        position: fixed;
        z-index: 90;
        bottom: 80px;
        right: 50px;
        background: #fff;
        padding: 15px 40px;
        box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
    }
    .notifier a {
        font-weight: 700;
        display: block;
        color:#0080FF;
    }
    .notifier a, .notifier a:active {
        transition: all .2s ease;
        color:#0080FF;
    }
</style>
<script data-cfasync="false" src="#"></script><script type="text/javascript">
    var listCountries = ['Germany', 'Spain', 'Russia', 'Italy',
        'Italy',  'United States', 'Egypt',
        'United Kingdom', "United States","England","Germany","Germany","United States","Switzerland",
        "Austria","Austria","Austria","Australia","Australia","Australia","Russia","Russia",
        "United States","United Kingdom","Spain","Spain","India","England","Italy","Ukraine"
    ];
    var listPlans = ['$500','$5000','$1,000','$1000','$550','$3000','$690', '$360',
        '$700', '$600',"$500","$700","$1,000","$1289","$5000","$7000","$10000"];
    interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = 'While you are still contemplating ,an investor from <b>' + country + '</b> ' +
            'just traded with <a href="javascript:void(0);" onclick="javascript:void(0);">' + plan + ' .</a>';
        $(".notifier .txt").html(msg);
        $(".notifier").stop(true).fadeIn(300);
        window.setTimeout(function() {
            $(".notifier").stop(true).fadeOut(300);
        }, 6000);
        run = setInterval(request, interval);
    }
</script>
<!-- end popup massage -->
@stack('js')

</body>
</html>
