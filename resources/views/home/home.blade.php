@extends('home.base')
@section('content')
    @push('css')
        <style>

            small {
                font-size: 14px;
                text-transform: initial;
            }
            .single-price {
                text-align: center;
                background: #262626;
                transition: .7s;
                margin-top: 20px;
            }
            .single-price h3 {
                font-size: 30px;
                color: #000;
                font-weight: 600;
                text-align: center;
                margin: 0;
                margin-top: -80px;
                margin-bottom: 1rem;
                font-family: poppins;
                color: #fff;
            }
            .single-price h4 {
                font-size: 20px;
                font-weight: 500;
                color: #fff;
            }
            .single-price h4 span.sup {
                vertical-align: text-top;
                font-size: 15px;
            }
            .deal-top {
                position: relative;
                background: #104547;
                font-size: 16px;
                text-transform: uppercase;
                padding: 136px 24px 0;
            }
            .deal-top::after {
                content: "";
                position: absolute;
                left: 0;
                bottom: -50px;
                width: 0;
                height: 0;
                border-top: 50px solid #104547;
                border-left: 175px solid transparent;
                border-right: 183px solid transparent;
            }
            .deal-bottom {
                padding: 56px 16px 0;
            }
            .deal-bottom ul {
                margin: 0;
                padding: 0;
            }
            .deal-bottom  ul li {
                font-size: 16px;
                color: #fff;
                font-weight: 300;
                margin-top: 16px;
                border-top: 1px solid #E4E4E4;
                padding-top: 16px;
                list-style: none;
            }
            .btn-area a {
                display: inline-block;
                font-size: 18px;
                color: #fff;
                background: #104547;
                padding: 8px 64px;
                margin-top: 32px;
                border-radius: 4px;
                margin-bottom: 40px;
                text-transform: uppercase;
                font-weight: bold;
                text-decoration: none;
            }


            .single-price:hover {
                background: #104547;
            }
            .single-price:hover .deal-top {
                background: #262626;
            }
            .single-price:hover .deal-top:after {
                border-top: 50px solid #262626;
            }
            .single-price:hover .btn-area a {
                background: #262626;
            }
            /* ignore the code below */


            .link-area
            {
                position:fixed;
                bottom:20px;
                left:20px;
                padding:15px;
                border-radius:40px;
                background:#104547;
            }
            .link-area a
            {
                text-decoration:none;
                color:#fff;
                font-size:25px;
            }
        </style>
    @endpush

    <section class="main-slider main-slider-three">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
            "effect": "fade",
            "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
            },
            "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
            },
            "autoplay": {
                "delay": 5000000
            }}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="image-layer"
                         style="background-image: url({{ asset('home/images/backgrounds/main-slider-3-1-1-1.jpg') }});">
                    </div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6"></div>
                            <div class="col-xl-6">
                                <div class="main-slider__content">
                                    <p>Smart investments, steady growth</p>
                                    <h2>Secure Your Future with {{ $siteName }}</h2>
                                    <a href="{{ route('register') }}" class="thm-btn">Join Today</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-layer"
                         style="background-image: url({{ asset('home/images/backgrounds/main-slider-3-2.jpg') }});">
                    </div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6"></div>
                            <div class="col-xl-6">
                                <div class="main-slider__content">
                                    <p>Grow your wealth with confidence</p>
                                    <h2>Invest Today, Reap Tomorrow with {{ $siteName }}</h2>
                                    <a href="{{ route('register') }}" class="thm-btn">Create an Account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- If we need navigation buttons -->
            <div class="main-slider__nav main-slider-three__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next"><span
                        class="main-slider__next-text">Next</span><i class="icon-right-arrow icon-left-arrow"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev"><span
                        class="main-slider__prev-text">Prev</span><i class="icon-right-arrow"></i>
                </div>
            </div>
        </div>
    </section>

    <!--Feature Start-->
    <section class="feature">
        <div class="feature-bg" style="background-image: url({{ asset('home/images/backgrounds/feature-bg.jpg') }})"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <!--Feature Single-->
                    <div class="feature__single">
                        <div class="feature__content">
                            <h3 class="feature__title"><a href="#">Grow Your Wealth Through Smart Investing</a></h3>
                            <p class="feature__text">Put your money to work with reliable investment strategies tailored to your financial goals.</p>
                            <a href="{{ route('register') }}" class="feature__btn">Sign-up Today</a>
                        </div>
                        <div class="feature__img">
                            <img src="{{ asset('home/images/resources/feature-1.jpg') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <!--Feature Single-->
                    <div class="feature__single">
                        <div class="feature__content">
                            <h3 class="feature__title"><a href="#">Maximize ROI with Expert Guidance</a></h3>
                            <p class="feature__text">Leverage years of experience from our team to optimize your investments and drive real returns.</p>
                            <a href="{{ route('register') }}" class="feature__btn">Get Started Today</a>
                        </div>
                        <div class="feature__img">
                            <img src="{{ asset('home/images/resources/feature-2.jpg') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <!--Feature Single-->
                    <div class="feature__single">
                        <div class="feature__content">
                            <h3 class="feature__title"><a href="#">Tailored Investment Opportunities</a></h3>
                            <p class="feature__text">Whether you're an individual or a business, {{ $siteName }} connects you to the right investment products at the right time.</p>
                            <a href="{{ route('register') }}" class="feature__btn">Register Today</a>
                        </div>
                        <div class="feature__img">
                            <img src="{{ asset('home/images/resources/feature-3.jpg') }}" alt="">
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-xl-12 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="feature-bottom">
                        <div class="feature-bottom__contact">
                            <div class="feature-bottom__call">
                                <img src="{{ asset('home/images/resources/feature-bottom-img-1.jpg') }}" alt="">
                                <div class="feature-bottom__icon">
                                    <span class="icon-phone-ringing"></span>
                                </div>
                            </div>
                            <div class="feature-bottom__content-box">
                                <p class="feature-bottom__tagline">24/7 Support & Guidance</p>
                                <h5 class="feature-bottom-desc">Partner with {{ $siteName }} to secure a stronger financial future</h5>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Feature End-->



    <!--Cases Two Start-->
    <section class="cases-two">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="section-title__title">Recent Case Studies</h2>
                <span class="section-title__tagline">How {{ $siteName }} supports smart financial growth</span>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <!--Cases Two Sinlge-->
                    <div class="cases-two__single">
                        <div class="casees-two__img-box">
                            <div class="cases-two__img">
                                <img src="{{ asset('home/images/resources/cases-2-1.jpg') }}" alt="">
                            </div>
                            <div class="cases-two__content">
                                <div class="cases-two__icon-box-details">
                                    <div class="cases-two__icon">
                                        <span class="icon-mobile-analytics"></span>
                                    </div>
                                    <p class="cases-two__tagline">Wealth Building</p>
                                    <h2 class="cases-two__tilte"><a href="#">Oil & Mining<br>
                                            Investment</a></h2>
                                </div>
                                <div class="cases-two__text-box">
                                    <p class="cases-two__text-bottom">
                                        A client invested in oil and mining projects through {{ $siteName }} and began earning consistent returns within the first quarter
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <!--Cases Two Sinlge-->
                    <div class="cases-two__single">
                        <div class="casees-two__img-box">
                            <div class="cases-two__img">
                                <img src="{{ asset('home/images/resources/cases-2-2.jpg') }}" alt="">
                            </div>
                            <div class="cases-two__content">
                                <div class="cases-two__icon-box-details">
                                    <div class="cases-two__icon">
                                        <span class="icon-creative"></span>
                                    </div>
                                    <p class="cases-two__tagline">Retirement Planning</p>
                                    <h2 class="cases-two__tilte"><a href="#">Securing<br>
                                            the Future</a></h2>
                                </div>
                                <div class="cases-two__text-box">
                                    <p class="cases-two__text-bottom">
                                        A tailored plan helped a client build steady returns for retirement.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Cases Two End-->

    <!--Services Two Start-->
    <section class="services-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="services-two__top-left">
                        <div class="section-title text-left">
                            <h2 class="section-title__title">Services We Offer</h2>
                            <span class="section-title__tagline">Guiding you through every stage of your financial journey</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="services-two__top-right">
                        <p class="services-two__top-right-text">At {{ $siteName }}, we offer expert-backed financial solutions designed to help you grow, preserve, and manage your wealth with confidence.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <!--Services Two Single-->
                    <div class="services-two__single">
                        <div class="services-two__icon">
                            <span class="icon-creative-1"></span>
                        </div>
                        <h3 class="services-two__title">Asset Management</h3>
                        <p class="services-two__text">We help you manage and grow your investment portfolio across multiple sectors.</p>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <!--Services Two Single-->
                    <div class="services-two__single">
                        <div class="services-two__icon">
                            <span class="icon-analysis"></span>
                        </div>
                        <h3 class="services-two__title">Risk Assessment</h3>
                        <p class="services-two__text">We evaluate financial risks and recommend strategies that align with your goals.</p>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <!--Services Two Single-->
                    <div class="services-two__single">
                        <div class="services-two__icon">
                            <span class="icon-business"></span>
                        </div>
                        <h3 class="services-two__title">Retirement Planning</h3>
                        <p class="services-two__text">Plan ahead with structured investment options tailored for long-term security.</p>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                    <!--Services Two Single-->
                    <div class="services-two__single">
                        <div class="services-two__icon">
                            <span class="icon-global"></span>
                        </div>
                        <h3 class="services-two__title">Alternative Investments</h3>
                        <p class="services-two__text">Gain access to oil, mining, and other high-potential sectors through {{ $siteName }}.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Services Two End-->

    <div class="pricing-area" style="margin-bottom: 5rem;margin-top: 5rem;">
        <div class="container">
            <div class="row justify-content-center">
                @foreach($packages as $package)
                    @inject('option','App\Defaults\Custom')
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-price">
                            <div class="deal-top">
                                <h3>{{$package->name}}</h3>
                                <h4> {{$package->roi}}%/ <span class="sup">{{$option->getReturnType($package->returnType)}}</span> </h4>
                                <small class="text-white">{{$package->note}}</small>
                            </div>
                            <div class="deal-bottom">
                                <ul class="deal-item">
                                    <li>
                                        Price: ${{number_format($package->minAmount,2)}} - @if($package->isUnlimited !=1)
                                            ${{number_format($package->maxAmount,2)}}
                                        @else
                                            Unlimited
                                        @endif
                                    </li>
                                    <li>Profit return: {{$package->roi}}% {{$option->getReturnType($package->returnType)}}</li>
                                    <li>Contract Duration: {{$package->Duration}}</li>
                                    <li>Referral Bonus: {{$package->referral}}% </li>
                                </ul>
                                <div class="btn-area">
                                    <a href="{{route('register')}}">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <section class="services-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="services-two__top-left">
                        <div class="section-title text-left">
                            <h2 class="section-title__title">Industries We Serve</h2>
                            <span class="section-title__tagline">Expert support across high-potential sectors</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="services-two__top-right">
                        <p class="services-two__top-right-text">From oil and gas to real estate, {{ $siteName }} connects investors to promising sectors with structured opportunities, transparent strategies, and professional guidance every step of the way.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($services as $service)
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="0ms">
                        <!--Services One Single-->
                        <div class="services-one__single">
                            <div class="services-one__img">
                                <img src="{{asset('home/serv/'.$service->photo)}}" alt="">
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="{{route('service.details',['id'=>$service->id])}}">{{$service->title}}</a>
                                </h3>
                                <p class="services-one__text">
                                    {{$service->short}}
                                </p>
                                <a href="{{route('service.details',['id'=>$service->id])}}" class="services-one__btn">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>



    <!--Our Mission Start-->
    <section class="our-mission">
        <div class="our-mission-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
             style="background-image: url({{ asset('home/images/backgrounds/our-mission-bg.jpg') }})"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="our-mission__inner">
                        <h2 class="our-mission__title">Our Mission is to Protect <br> Your Capital, Grow Your Wealth, <br> and Secure Your Future</h2>
                        <a href="{{ route('register') }}" class="thm-btn our-mission__btn">Create an Account</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Our Mission End-->


    <!--Financial Start-->
    <section class="financial">
        <div class="container">
            <div class="section-title text-left">
                <h2 class="section-title__title">More Financial Goals</h2>
                <span class="section-title__tagline">Drawing from years of real-world investment experience</span>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="financial__left">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="financial__left-img-box">
                                    <div class="financial__left-img">
                                        <img src="{{ asset('home/images/resources/financial-left-img-1.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="financial__left-img-box">
                                    <div class="financial__left-img mar-b-0">
                                        <img src="{{ asset('home/images/resources/financial-left-img-2.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="financial__left-note-box">
                            <h2 class="financial__left-note-title">We provide clear, <br> independent guidance <br> on your investments</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="financial__right">
                        <div class="financial__right-content">
                            <p class="financial__right-text">At {{ $siteName }}, we believe achieving your financial goals starts with expert insights and a solid strategy. Our team works closely with you to understand your objectives, manage risk, and position your capital for real returns.</p>
                            <ul class="list-unstyled financial__right__list">
                                <li>Custom investment plans based on your goals</li>
                                <li>Access to high-value sectors like oil, real estate, and mining</li>
                                <li>Portfolio monitoring and risk mitigation strategies</li>
                                <li>Guidance that evolves with changing market conditions</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Financial End-->
    <!--Reasons Start-->
    <section class="reasons">
        <div class="container">
            <div class="reasons-bg"></div>
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="reasons__left">
                        <h2 class="reasons__title">Why Choose {{ $siteName }}</h2>
                        <ul class="list-unstyled reasons__list-box">
                            <li>
                                <div class="reasons__icon">
                                    <span class="icon-tick"></span>
                                </div>
                                <div class="reasons__content">
                                    <h4 class="reasons__content-title">Experienced Professionals</h4>
                                    <p class="reasons__content-text">Our team brings deep expertise across multiple financial sectors, offering you insights that lead to smarter investments.</p>
                                </div>
                            </li>
                            <li>
                                <div class="reasons__icon">
                                    <span class="icon-tick"></span>
                                </div>
                                <div class="reasons__content">
                                    <h4 class="reasons__content-title">Client-Centered Approach</h4>
                                    <p class="reasons__content-text">We prioritize your goals, building customized strategies that reflect your risk tolerance, preferences, and vision for the future.</p>
                                </div>
                            </li>
                            <li>
                                <div class="reasons__icon">
                                    <span class="icon-tick"></span>
                                </div>
                                <div class="reasons__content">
                                    <h4 class="reasons__content-title">Transparent Guidance</h4>
                                    <p class="reasons__content-text">We provide clear, honest advice—backed by research—so you always know where your money is going and why.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="reasons__img-box">
                        <div class="reasons__img">
                            <img src="{{ asset('home/images/resources/reasons-img-1.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Reasons End-->


    <!--CTA One Start-->
    <section class="cta-one">
        <div class="cta-one-bg" style="background-image: url({{ asset('home/images/backgrounds/cta-one-bg.png') }})"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="cta-one__inner">
                        <div class="cta-one__left">
                            <h2 class="cta-one__title">Start building wealth with guidance <br> you can trust</h2>
                        </div>
                        <div class="cta-one__right">
                            <a href="{{ route('register') }}" class="thm-btn cta-one__btn">Let’s Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CTA One End-->


    <!--News One Start-->
    <section class="news-one">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="section-title__title">What’s Happening</h2>
                <span class="section-title__tagline">Checkout what we have been doing</span>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <!--News One Single-->
                    <div class="news-one__single">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
                                {
                                    "feedMode": "market",
                                    "market": "stock",
                                    "isTransparent": false,
                                    "displayMode": "regular",
                                    "width": "100%",
                                    "height": "400",
                                    "colorTheme": "light",
                                    "locale": "en"
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--News One End-->

@endsection
