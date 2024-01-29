@extends('layout')


@section('title', 'Services')


@section('header')
    <header class="masthead text-center text-white animated bounceInDown delay-1">
        <img src="/images/high/services.jpg" alt="">
        <div class="masthead-content">
            <div class="container-fluid">
                <h1 class="masthead-heading mb-0">Services</h1>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 content-left-col pb-4 animated fadeInLeft delay-2">
                    <p>
                        We are a full-service agency that offers continuous innovation, quality,
                        and expertise by retainer or by project.
                    </p>
                </div>
                <div class="col-lg-8">

                </div>
            </div>
            <div class="row pl-5 pt-3 pr-5 pb-100 animated bounceInUp delay-1s content-right-col">
                <div class="col-lg-4 text-center">
                    <img src="/images/svg/icon1.svg" width="30%" class="img-fluid" alt="">
                    <h2>STRATEGY</h2>
                    <hr style="border:1px solid red; width: 50%">
                    <p>
                        Global Expertise <br>
                        Local Insights <br>
                        Consumer Understanding <br>
                        <a href="/bbn" target="_blank" style="display: inline-block; text-decoration: none">
                            Proprietary tools, like BBN Navigator <br>
                            Marketing & Sales Profiency
                        </a>
                    </p>
                </div>
                <div class="col-lg-1 bracket-v">
                    <img src="/images/svg/braket-v.svg" class="img-fluid" alt="" style="height: 400px; padding-top: 0px">
                </div>
                <div class="col-lg-7">
                    <div class="row no-gutters extra-margin-top">
                        <div class="col-12 bracket-h">
                            <img src="/images/svg/braket-h.svg" class="img-fluid" alt="" style="width: 100%;">
                        </div>
                    </div>
                    <div class="row no-gutters mt-2">
                        <div class="col-md-4 col-sm-12">
                            <img src="/images/svg/services_circle1.svg" width="100%" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <img src="/images/svg/services_circle2.svg" width="100%" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <img src="/images/svg/services_circle3.svg" width="100%" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection