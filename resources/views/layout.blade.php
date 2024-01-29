<!doctype html>
<html lang="en">
<head>
    <!-- Hotjar Tracking Code for https://mymarketlogic.com/ -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:1791666,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-P6W9BQ8');</script>
    <!-- End Google Tag Manager -->
    <!-- Bing -->
    <meta name="msvalidate.01" content="DCA44DBFEE709A3952C4F53A9B6C8756" />

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Marketlogic | Cross-Cultural Marketing & Branding Solutions')</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window,document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '254062047259654');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" src="https://www.facebook.com/tr?id=254062047259654&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->


</head>

<!-- Sharpsring -->
<script type="text/javascript">
    var _ss = _ss || [];
    _ss.push(['_setDomain', 'https://koi-3QNDU6B7MA.marketingautomation.services/net']);
    _ss.push(['_setAccount', 'KOI-4049PWF3C2']);
    _ss.push(['_trackPageView']);
    (function() {
        var ss = document.createElement('script');
        ss.type = 'text/javascript'; ss.async = true;
        ss.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'koi-3QNDU6B7MA.marketingautomation.services/client/ss.js?ver=2.2.1';
        var scr = document.getElementsByTagName('script')[0];
        scr.parentNode.insertBefore(ss, scr);
    })();
</script>

<!-- Libraries -->
<link type="text/css" rel="stylesheet" href="/css/bootstrap.css">
<link type="text/css" rel="stylesheet" href="/css/animate.css">
<link type="text/css" rel="stylesheet" href="/css/fonts.css">
<link type="text/css" rel="stylesheet" href="/css/morphext.css">
<link type="text/css" rel="stylesheet" href="/css/featherlight.min.css" />

<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<script src="/js/jquery-3.4.1.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/js/morphext.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/js/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/js/jquery.rwdImageMaps.min.js" type="text/javascript" charset="utf-8"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
<script src="/js/bootstrap-notify.min.js"></script>


<!-- Custom elements -->
<link type="text/css" rel="stylesheet" href="/css/custom.css">
<script src="/js/main.js" type="text/javascript" charset="utf-8"></script>

<body class="{{ (request()->is('home')) ? 'black-background' : '' }}">
<script type="text/javascript" src="https://secure.perk0mean.com/js/180444.js"></script>
<noscript>
    <img alt="" src="https://secure.perk0mean.com/180444.png" style="display:none;" />
</noscript>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P6W9BQ8" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="se-pre-con"></div>

<!-- Navigation -->
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top navbar-custom animated slideInDown">
        {{--Logo--}}
        <!-- logo img svg-->
        <a class="navbar-brand" href="/">
            <img class="logo" src="/images/svg/ML_circle.svg" />
        </a>
        <!--end logo img svg -->

        <div class="{{ Request::path() ==  'home' ? 'marquee-text-div' : 'marquee-text-div-inside'  }}">
            <div>
                <p class="{{ Request::path() ==  'home' ? 'marquee-text' : 'marquee-text-inside'  }}">If you need
                    <span id="header-text">
                        to pair strategy with flawless execution;
                        to generate demand through channel partners;
                        a local partner, around the corner or around the world;
                        to build brand AND pipeline;
                        a true partner, not another agency;
                        to run a demand generation powerhouse
                    </span>
                </p>
            </div>
        </div>

        @if (!request()->is('home'))
        {{--Navbar Toggler Button--}}
        <button class="navbar-toggler" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon toggled-menu"></span>
        </button>

        {{--Navbar Menu--}}
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item sub-we {{ (request()->is('weare/*')) ? 'active' : '' }}">
                    <a class="nav-link" href="#" id="show-submenu-we">WE ARE</a>
                </li>
                <li class="nav-item sub-here {{ (request()->is('here/*')) ? 'active' : '' }}">
                    <a class="nav-link" href="#" id="show-submenu-here">HERE</a>
                </li>
                <li class="nav-item sub-for {{ (request()->is('foryou/*')) ? 'active' : '' }}">
                    <a class="nav-link" href="#" id="show-submenu-for">FOR YOU</a>
                </li>
            </ul>
        </div>
        <div class="second menu">
            <div class="row">
                <div class="col-sm-4 col-submenu">
                    <h2 id="h2-menu-we">We Are</h2>
                    <ul>
                        <li><a href="/weare/about">About Marketlogic</a></li>
                        <li><a href="/weare/clients">Our Clients</a></li>
                        <li><a href="/weare/team">Our Team</a></li>
                        <li><a href="/weare/contact">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-submenu">
                    <h2 id="h2-menu-here">Here</h2>
                    <ul>
                        <li><a href="/here/americas">Americas</a></li>
                        <li><a href="/here/global">Global</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-submenu">
                    <h2 id="h2-menu-for">For You</h2>
                    <ul>
                        <li><a href="/foryou/ideas">Ideas Meet Results</a></li>
                        <li><a href="/foryou/services">Services</a></li>
                        <li><a href="/foryou/cases">Success Cases</a></li>
                        <li><a href="/foryou/blog">Blog</a></li>
                        <li><a href="/foryou/ondemand">Insights and trends (LATAM)</a></li>
                    </ul>
                </div>
            </div>
        </div>
        @endif

</nav>
</header>

<!-- Inner Pages Header -->
@yield('header')

<!-- Page Content -->
<div class="container-fluid">
@yield('content')
</div>

@include('profiles')

<!-- Footer -->
<footer class="footer animated slideInUp">
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-7 col-lg-5 bbn-col">
            <span>We are a partner of</span>
            <a href="/bbn" target="_blank">
                <img class="bbn-icon" src="/images/svg/bbn.svg" alt="BBN">
            </a>
        </div>
        <div class="col-sm-12 col-md-5 col-lg-7">
            <div class="row">
                <div class="col-sm-12 hidden-md col-lg-8 col-xl-8 subscribe-col">
                    <form class="form-subscribe" id="news_subscribe">
                        <input type="email" id="emailnews"  name="email" placeholder="YOUR EMAIL ADDRESS">
                        <button class="btn-subscribe" type="submit">Be in the know</button>
                        <script type="text/javascript">
                            var __ss_noform = __ss_noform || [];
                            __ss_noform.push(['baseURI', 'https://app-3QNDU6B7MA.marketingautomation.services/webforms/receivePostback/MzawMDEzMzO0BAA/']);
                            __ss_noform.push(['form', 'news_subscribe', 'e9490bbf-f42d-47bd-b63c-6fe2ed7476cf']);
                            __ss_noform.push(['submitType', 'manual']);
                        </script>
                        <script type="text/javascript" src="https://koi-3QNDU6B7MA.marketingautomation.services/client/noform.js?ver=1.24" ></script>

                    </form>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 social-col text-right">
                    <ul class="social-media-list">
                        <li><a href="https://www.facebook.com/mymarketlogic/" target="_blank"><img src="/images/svg/facebook_rrss.svg" alt="Facebook" title="Facebook"></a></li>
                        <li><a href="https://www.linkedin.com/company/marketlogic" target="_blank"><img src="/images/svg/linkedin_rrss.svg" alt="Linkedin" title="Linkedin"></a></li>
                        <li><a href="/weare/contact"><img src="/images/svg/mail_rrss.svg" alt="Email" title="Email"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row copyright">
        <div class="col-6">
            Esperanto Inc.
        </div>
        <div class="col-6 privacidad">
            <a href="https://academy.mymarketlogic.com/" target="_blank" title="Academy">Academy |</a>
            <a href="/downloads/PrivacyPolicy_MarketLogic_2021.pdf" target="_blank" title="Privacy policy">Privacy policy</a>
        </div>
    </div>

</div>
</footer>

<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/20209541.js"></script>
<!-- End of HubSpot Embed Code -->

</body>
</html>