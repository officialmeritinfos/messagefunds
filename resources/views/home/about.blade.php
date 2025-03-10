@extends('home.base')
@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg"></div><!-- /.page-header__bg -->
        <div class="page-header-shape-1"></div><!-- /.page-header-shape-1 -->
        <div class="page-header-shape-2"></div><!-- /.page-header-shape-2 -->
        <div class="page-header-shape-3"></div><!-- /.page-header-shape-3 -->

        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li>{{ $pageName }}</li>
                </ul>
                <h2>{{ $pageName }}</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--About Start-->
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="about__img-box">
                        <div class="about-img">
                            <img src="{{asset('home/images/resources/about-img-1.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about__right">
                        <h2 class="about__title">Leading the Way in Smart Investments</h2>
                        <div class="about__icon-box">
                            <div class="about__icon">
                                <span class="icon-data-analytics"></span>
                            </div>
                            <div class="about__icon-text">
                                <p>{{ $siteName }} combines deep market insight with proven strategies to help you grow and protect your wealth with confidence.</p>
                            </div>
                        </div>
                        <p class="about__right-text">Our approach is built on transparency, risk management, and tailored financial planning. From first-time investors to seasoned capital holders, we provide guidance you can trust at every stage of your journey.</p>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="about__right">
                        <p class="about__right-text">
                            Founded in 2014, we are a global investment agency helping individuals build their financial dreams into reality. From a humble beginning, we have grown to become a notable force in the investment industry with over 40K+ users.
                        </p>
                        <p class="about-one__text-2">{{$siteName}} stands as one of the largest and most seasoned international private equity firms. Our accomplished team of investment professionals is primarily dedicated to strategic investments.</p>
                        <p class="about-one__text-2">
                            {{$siteName}} is managed by a team of trading experts specializing in generating profits through currency, stocks, options, and commodities trading on the foreign exchange market. We employ a variety of trading techniques to meet client goals.
                        </p>
                        <p class="about-one__text-2">
                            The {{$siteName}} team comprises financial market professionals assembled to provide the best possible trading conditions. Our specialists played a key role in developing technical specifications for a modern platform suitable for both beginners and experienced traders.
                        </p>
                        <p class="about-one__text-2">
                            Throughout our existence, we've aimed to balance lower risk and higher profits for our customers through innovative analysis, information dispersion, and expert assistance. Our team includes experienced professionals with diverse and in-depth knowledge, enhancing the entire investing process.
                        </p>
                        <div class="listen__progress-wrap">
                            <div class="listen__progress">
                                <div class="listen__progress-box">
                                    <div class="circle-progress"
                                         data-options='{ "value": 0.9,"thickness": 3,"emptyFill": "#f2f4f8","lineCap": "square", "size": 112, "fill": { "color": "#3c72fc" } }'>
                                    </div>
                                    <span>90%</span>
                                </div>
                                <div class="listen__progress-content">
                                    <h3>Cost-Efficient Solutions</h3>
                                </div>
                            </div>
                            <div class="listen__progress">
                                <div class="listen__progress-box">
                                    <div class="circle-progress"
                                         data-options='{ "value": 5,"thickness": 3,"emptyFill": "#f2f4f8","lineCap": "square", "size": 112, "fill": { "color": "#3c72fc" } }'>
                                    </div>
                                    <span>500%</span>
                                </div>
                                <div class="listen__progress-content">
                                    <h3>Client Portfolio Growth</h3>
                                </div>
                            </div>
                        </div>

                        <div class="about__phone-contact">
                            <div class="about__phone-contact-icon">
                                <span class="icon-phone-ringing"></span>
                            </div>
                            <div class="about__phone-contact-text">
                                <p>Have questions? Get Support</p>
                                <a href=" {{ ($web->phone)? "tel:$web->phone":route('register') }}">{{ ($web->phone)? $web->phone:"Register" }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About End-->


    <section class="services-page-v-2">
        <div class="container">
            <div class="services-page-v-2__top text-center">
                <div class="section-title">
                    <span class="section-title__tagline">Our Services</span>
                    <h2 class="section-title__title"><span>Financial Solution</span></h2>
                </div>
                <p class="section-title__text">
                    We offer a wide-range of services which allows our users to earn unlimitedly.
                </p>
            </div>
            <div class="row">
                @foreach($services as $service)
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="services-one__single">
                            <div class="services-one__img">
                                <img src="{{asset('home/serv/'.$service->photo)}}" alt="">
                            </div>
                            <div class="services-one__content">
                                <div class="services-one__icon">
                                    <span class="icon-idea"></span>
                                </div>
                                <h3 class="services-one__title"><a href="{{route('service.details',['id'=>$service->id])}}">{{$service->title}}</a></h3>
                                <p class="services-one__text">
                                    {{$service->short}}
                                </p>
                                <div class="services-one__arrow">
                                    <a href="{{route('service.details',['id'=>$service->id])}}"><i class="icon-right-arrow-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>


@endsection
