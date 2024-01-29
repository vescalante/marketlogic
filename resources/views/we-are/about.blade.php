@extends('layout')


@section('title', 'About Us')


@section('header')
    <header class="masthead text-center text-white animated bounceInDown delay-1">
        <img src="/images/low/About.jpg" alt="">
        <div class="masthead-content">
            <div class="container-fluid">
                <h1 class="masthead-heading mb-0">Welcome To</h1>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 content-left-col pb-4 animated fadeInLeft delay-2">
                    <img src="/images/low/NEW_ML_ID_tagline_horizontal.png" width="80%" alt="Marketlogic">
                    <p class="animated bounceInDown delay-4">
                        We've been at it since 2000, sharpening our expertise, innovating our services,
                        and <a href="/weare/team" target="_self">growing our team</a>
                        to meet our <a href="/weare/clients" target="_self">clients</a> ever-changing context.
                        <br><br>
                        We are a <a href="/foryou/services" target="_self">full-service agency</a> that offers continuous&nbsp;
                        innovation, quality, and expertise by retainer or by project.
                        <br><br>
                        Our structure is ideal for global-minded brands that need local executions. We are located across
                        the <a href="/here/americas" target="_self">Americas</a> with expert in-house teams. And a network of
                        <a href="/here/global" target="_self">partners</a> that meet our standards.

                    </p>
                </div>
                <div class="col-lg-8 content-right-col pb-100 animated bounceInUp delay-4">
                    <p>
                        We are <a href="/bbn" target="_blank">shareholders and LATAM representatives for BBN</a>, the world’s B2B agency with over a thousand
                        specialists managing over 300 clients worldwide in 23 B2B sectors.
                        <br><br>
                        We are proud to be recognized by Inc. 5000 as one of the fastest
                        growing small businesses in the U.S. for three years in a row.
                        <br><br>
                        Our success comes from adapting to meet our clients’
                        needs, and not the other way around!

                    </p>
                    <img src="/images/low/INC-5000.jpg" alt="Inc 5000" width="20%">
                </div>
            </div>
        </div>
    </section>
@endsection