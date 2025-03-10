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

    <<!--Locations Start-->
    <section class="locations">
        <div class="container">
            <div class="location__inner">
                <div class="section-title text-center">
                    <h2 class="section-title__title">Our Contact Lines</h2>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <!--Locations Single-->
                        <div class="locations__single">
                            <h3 class="locations__title">Address</h3>
                            <p class="locations__text">{{$web->address}}</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <!--Locations Single-->
                        <div class="locations__single">
                            <h3 class="locations__title">Email</h3>
                            <p class="locations__text">
                                <a href="mailto:{{$web->email}}" class="locations__mail">{{ $web->email }}</a>
                            </p>
                        </div>
                    </div>

                    @if($web->phone)
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <!--Locations Single-->
                            <div class="locations__single">
                                <h3 class="locations__title">Whatsapp Us</h3>
                                <h4 class="locations__mail-phone-box">
                                    <a href="tel:{{ $web->phone }}" class="locations__phone">{{ $web->phone }}</a>
                                </h4>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </section>
    <!--Locations End-->




@endsection
