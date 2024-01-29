@extends('layout')


@section('content')
    <div class="section home-menu">
        <div class="item-view" id="show-we-are">
            <div class="card h-100 justify-content-center">
                <img src="/images/low/weare.jpg" alt="">
                <div class="inside-card">
                    <a href="#" class="head-menu">WE ARE</a>
                    <div class="menu-card" id="we-are-menu">
                        <ul>
                            <li><a href="/weare/about">About Marketlogic</a></li>
                            <li><a href="/weare/clients">Our Clients</a></li>
                            <li><a href="/weare/team">Our Team</a></li>
                            <li><a href="/weare/contact">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="item-view" id="show-here">
            <div class="card h-100 justify-content-center">
                <img src="/images/low/here.jpg" alt="">
                <div class="inside-card">
                    <a href="#" class="head-menu">HERE</a>
                    <div class="menu-card" id="here-menu">
                        <ul>
                            <li><a href="/here/americas">Americas</a></li>
                            <li><a href="/here/global">Global</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="item-view" id="show-for-you">
            <div class="card h-100 justify-content-center">
                <img src="/images/low/Foryou_new.jpg" alt="">
                <div class="inside-card">
                    <a href="#" class="head-menu">FOR YOU</a>
                    <div class="menu-card" id="for-you-menu">
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
        </div>
    </div>
@endsection