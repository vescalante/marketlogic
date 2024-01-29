@extends('layout')


@section('title', 'Contact Us')


@section('header')
    <header class="masthead-reduced text-center text-white animated bounceInDown delay-1">
        <img src="/images/high/contactus.jpg" alt="">
        <div class="masthead-content">
            <div class="container-fluid">
                <h1 class="masthead-heading mb-0"> Contact us</h1>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 content-left-col animated fadeInLeft delay-2">
                    <h3>We are here for you.</h3>
                    <h5>Let’s get in touch!</h5>

                </div>
                <div class="col-lg-8 content-right-col">

                </div>
            </div>
            <div class="row">

                <div class="col-lg-4 p-4 animated bounceInLeft delay-4">
                    <h3>Leave us a message</h3>
                    <form id="contact_form">
                        <div class="p-4 contact-us animated">

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="contact_name" placeholder="Your name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" id="contact_email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="subject" class="col-sm-2 col-form-label">Subject</label>
                                <div class="col-sm-10">
                                    <input type="text" name="subject" class="form-control" id="contact_subject" placeholder="Type in the Subject line" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="message" id="contact_message" placeholder="Write your Message" rows="5"></textarea>
                                </div>
                            </div>

                        </div>
                        <div class="text-right p-2 send-button">
                            <button type="submit">Send</button>
                            <script type="text/javascript">
                                var __ss_noform = __ss_noform || [];
                                __ss_noform.push(['baseURI', 'https://app-3QNDU6B7MA.marketingautomation.services/webforms/receivePostback/MzawMDEzMzO0BAA/']);
                                __ss_noform.push(['form', 'contact_form', '3d7c997a-7ba8-47ac-a5c0-89e8187c4518']);
                                __ss_noform.push(['submitType', 'manual']);
                            </script>
                        </div>
                    </form>
                    <div class="text-center pt-3">
                        <ul class="social-media-list">
                            <li>FOLLOW US</li>
                            <li><a href="https://www.facebook.com/mymarketlogic/" target="_blank"><img src="/images/svg/facebook_rrss.svg" alt="Facebook" title="Facebook"></a></li>
                            <li><a href="https://www.linkedin.com/company/marketlogic" target="_blank"><img src="/images/svg/linkedin_rrss.svg" alt="Linkedin" title="Linkedin"></a></li>
                            <li><a href="/weare/contact"><img src="/images/svg/mail_rrss.svg" alt="Email" title="Email"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-8 pl-2 pb-100 animated bounceInUp delay-4">
                    <div class="row">
                        <div class="col-md-6 contact-card mb-3">
                            <div class="row no-gutters">
                                <div class="col-sm-4 portrait">
                                    <a href="#" data-featherlight="#fl1" data-featherlight-variant="fixwidth">
                                        <img src="/images/team/fotos-crop_team_600x600_7.jpg" class="rounded-circle img-fluid get-opacity" />
                                    </a>
                                </div>
                                <div class="col-sm-8 pl-3">
                                    <a href="#" data-featherlight="#fl1" data-featherlight-variant="fixwidth">
                                        <h2>Marcelo Castro</h2>
                                    </a>
                                    <p>
                                        Founder and CEO <br>
                                        MIAMI
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 contact-card mb-3">
                            <div class="row no-gutters">
                                <div class="col-sm-4 portrait">
                                    <a href="#" data-featherlight="#fl12" data-featherlight-variant="fixwidth">
                                        <img src="/images/team/fotos-crop_team_600x600_11.jpg" class="rounded-circle img-fluid get-opacity" />
                                    </a>
                                </div>
                                <div class="col-sm-8 pl-3">
                                    <a href="#" data-featherlight="#fl2" data-featherlight-variant="fixwidth">
                                        <h2>Hernan Braña</h2>
                                    </a>
                                    <p>
                                        Partner - VP Business Development <br>
                                        MIAMI
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 contact-card mb-3">
                            <div class="row no-gutters">
                                <div class="col-sm-4 portrait">
                                    <a href="#" data-featherlight="#fl12" data-featherlight-variant="fixwidth">
                                        <img src="/images/team/fotos-crop_team_600x600_12.jpg" class="rounded-circle img-fluid get-opacity" />
                                    </a>
                                </div>
                                <div class="col-sm-8 pl-3">
                                    <a href="#" data-featherlight="#fl12" data-featherlight-variant="fixwidth">
                                        <h2>Alfredo Castro</h2>
                                    </a>
                                    <p>
                                        Territory Manager <br>
                                        Central America and Caribbean
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 contact-card mb-3">
                            <div class="row no-gutters">
                                <div class="col-sm-4 portrait">
                                    <a class="img" href="#" data-featherlight="#fl4" data-featherlight-variant="fixwidth">
                                        <img src="/images/team/fotos-crop_team_600x600_6.jpg" class="rounded-circle img-fluid get-opacity" />
                                    </a>
                                </div>
                                <div class="col-sm-8 pl-3">
                                    <a href="#" data-featherlight="#fl4" data-featherlight-variant="fixwidth">
                                        <h2>Paz Terluk</h2>
                                    </a>
                                    <p>
                                        Country Manager <br>
                                        MEXICO
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 contact-card mb-3">
                            <div class="row no-gutters">
                                <div class="col-sm-4 portrait">
                                    <a href="#" data-featherlight="#fl5" data-featherlight-variant="fixwidth">
                                        <img src="/images/team/fotos-crop_team_600x600_10.jpg" class="rounded-circle img-fluid get-opacity" />
                                    </a>
                                </div>
                                <div class="col-sm-8 pl-3">
                                    <a href="#" data-featherlight="#fl5" data-featherlight-variant="fixwidth">
                                        <h2>Kathy Cifuentes</h2>
                                    </a>
                                    <p>
                                        Country Manager <br>
                                        COLOMBIA
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 contact-card mb-3">
                            <div class="row no-gutters">
                                <div class="col-sm-4 portrait">
                                    <a href="#" data-featherlight="#fl6" data-featherlight-variant="fixwidth">
                                        <img src="/images/team/fotos-crop_team_600x600_15.jpg" class="rounded-circle img-fluid get-opacity" />
                                    </a>
                                </div>
                                <div class="col-sm-8 pl-3">
                                    <a href="#" data-featherlight="#fl6" data-featherlight-variant="fixwidth">
                                        <h2>Jeniffer Cruces</h2>
                                    </a>
                                    <p>
                                        Country Manager <br>
                                        PERU
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 contact-card mb-3">
                            <div class="row no-gutters">
                                <div class="col-sm-4 portrait">
                                    <a href="#" data-featherlight="#fl7" data-featherlight-variant="fixwidth">
                                        <img src="/images/team/fotos-crop_team_600x600_16.jpg" class="rounded-circle img-fluid get-opacity" />
                                    </a>
                                </div>
                                <div class="col-sm-8 pl-3">
                                    <a href="#" data-featherlight="#fl7" data-featherlight-variant="fixwidth">
                                        <h2>Sebastian Vazquez</h2>
                                    </a>
                                    <p>
                                        Country Manager <br>
                                        CHILE
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 contact-card mb-3">
                            <div class="row no-gutters">
                                <div class="col-sm-4 portrait">
                                    <a href="#" data-featherlight="#fl14" data-featherlight-variant="fixwidth">
                                        <img src="/images/team/fotos-crop_team_600x600_8.jpg" class="rounded-circle img-fluid get-opacity" />
                                    </a>
                                </div>
                                <div class="col-sm-8 pl-3">
                                    <a href="#" data-featherlight="#fl14" data-featherlight-variant="fixwidth">
                                        <h2>Santiago Pereira</h2>
                                    </a>
                                    <p>
                                        Country Manager<br>
                                        UNITED STATES
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection