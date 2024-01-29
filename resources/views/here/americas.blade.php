@extends('layout')


@section('title', 'Americas')


@section('header')
    <header class="masthead text-center text-white animated bounceInDown delay-1">
        <img src="/images/high/Here-americas.jpg" alt="">
        <div class="masthead-content">
            <div class="container-fluid">
                <h1 class="masthead-heading mb-0">We are <br> Where you are</h1>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5">
                    <div class="row">
                        <div class="content-left-col pb-4 animated fadeInLeft delay-2">
                            <p>
                                We are strategically located across the Americas with expert in-house teams.
                                <br><br>
                                In addition to our offices, we have partners in Canada, Puerto Rico, Jamaica, Dominican Republic, Trinidad & Tobago, El Salvador, Honduras, Nicaragua,  Costa Rica, Panama, Ecuador, Bolivia, Brazil, Paraguay, Uruguay and Argentina
                                <br><br>
                                Our structure is ideal for global minded brands that need local executions.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 content-right-col text-center pb-5 pt-0 animated slideInUp delay-4">
                    <img src="/images/low/map_feb0923.png" class="img-fluid" alt="Americas" width="1092" height="870" usemap="#americas" />
                    <map name="americas">
                        <area shape="rect" coords="440,100,540,205" href="#" data-featherlight="#fl4" data-featherlight-variant="fixwidth" title="Mexico" alt="Mexico" />
                        <area shape="rect" coords="610,10,712,120" href="#" data-featherlight="#fl1" data-featherlight-variant="fixwidth" title="USA" alt="USA" />
                        <area shape="rect" coords="510,210,620,320" href="#" data-featherlight="#fl12" data-featherlight-variant="fixwidth" title="Guatemala" alt="Guatemala" />
                        <area shape="rect" coords="725,180,830,280" href="#" data-featherlight="#fl5" data-featherlight-variant="fixwidth" title="Colombia" alt="Colombia" />
                        <area shape="rect" coords="670,390,775,490" href="#" data-featherlight="#fl6" data-featherlight-variant="fixwidth" title="Peru" alt="Peru" />
                        <area shape="rect" coords="990,300,1200,410" href="#" data-featherlight="#fl2" data-featherlight-variant="fixwidth" title="Brazil" alt="Brazil" />
                        <area shape="rect" coords="580,520,680,620" href="#" data-featherlight="#fl14" data-featherlight-variant="fixwidth" title="USA" alt="USA" />
                        <area shape="rect" coords="740,530,850,630" href="#" data-featherlight="#fl7" data-featherlight-variant="fixwidth" title="Chile" alt="Chile" />
                        <area shape="rect" coords="850,470,950,580" href="#" data-featherlight="#fl21" data-featherlight-variant="fixwidth" title="Argentina" alt="Argentina" />
                    </map>
                </div>
            </div>
        </div>
    </section>
@endsection