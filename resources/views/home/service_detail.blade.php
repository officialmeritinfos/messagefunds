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

    <!--Project Details Start-->
    <section class="project-details">
        <div class="container">
            <div class="project-details__top">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="project-details__img">
                            <img src="{{asset('home/serv/'.$service->photo)}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-details__bottom">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="project-details__right">
                            <div class="project-details__title-box">
                                <h3 class="project-details__title-two">{{ $service->title }}</h3>
                                <p class="project-details__text">
                                    {!! str_replace('MYSITE',$siteName,$service->content) !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


@endsection
