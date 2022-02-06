<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
@foreach ($SiteSettings as $Settings)
 <!--church header-->
 <header class="header_version_6">

    <!--church header container-->
    <div class="church_version_7">
        <!--church container-->
        <div class="container">
            <div class="church_logo">
                <h1><a href="{{url('/')}}"><img style="max-width:250px" src="{{url('/')}}/uploads/logo/{{$Settings->logo}}" alt="{{$Settings->sitename}}"></a></h1>
            </div>

            <div id="kode-responsive-navigation" class="dl-menuwrapper" >
                <button class="dl-trigger">Menu</button>
                <style>
                    .header_version_6 .navigation ul li a{
                        color:#000000 !important;


                    }





                </style>
                    <ul class="dl-menu" >
                        <li class="active"><a  href="{{url('/')}}">Home</a>

                        </li>
                        <li><a  href="{{url('/')}}/about-us">About Us</a>
                            <ul class="children submenu">
                                <li><a href="{{url('/')}}/about-us#mission">Our Mision</a></li>
                                <li><a href="{{url('/')}}/about-us#mission">Our Vision</a></li>
                                <li><a href="{{url('/')}}/about-us#values">Core Values</a></li>
                                <li><a href="{{url('/')}}/ministry-objectives">Ministry Objectives</a></li>
                                <li><a href="{{url('/')}}/ministry-philosophy">Ministry Philosophy</a></li>
                            </ul>
                        </li>
                        <li><a href="{{url('/')}}/our-sermons">Our Sermons</a>

                        </li>
                        <li><a href="{{url('/')}}/news-and-events">News & Events</a>

                        </li>


                        <li><a href="{{url('our-programs')}}">Schedule</a></li>
                        {{-- <li><a href="{{url('give-now')}}">Give</a></li> --}}
                        <li><a  href="{{url('/')}}/give-paybill">Give</a>

                        </li>
                        <li><a href="{{url('/')}}/contact-us">contact us</a></li>
                    </ul>
            </div>
            <!--Responsive Menu END-->

            <!--church logo ends-->
            <div class="church_navigation pull-right">
                <style>

                    .header_version_6 .navigation ul li a:after{
                        position: absolute;
                        content: "";
                        bottom: 0px;
                        left: 0px;
                        right: 0px;
                        border-bottom: 2px solid;
                        width: 100%;
                        border-color: #663398 !important;
                        font-weight:900 !important;
                    }

                </style>
                <nav class="navigation">
                    <ul>
                        <li class="active"><a  href="{{url('/')}}">Home</a>

                        </li>
                        <li><a  href="{{url('/')}}/about-us">About Us</a>
                            <ul class="children submenu">
                                <li><a style="color:#ffffff !important" href="{{url('/')}}/about-us#mission">Our Mision</a></li>
                                <li><a style="color:#ffffff !important" href="{{url('/')}}/about-us#mission">Our Vision</a></li>
                                <li><a style="color:#ffffff !important" href="{{url('/')}}/about-us#values">Core Values</a></li>
                                <li><a style="color:#ffffff !important" href="{{url('/')}}/ministry-objectives">Ministry Objectives</a></li>
                                <li><a style="color:#ffffff !important" href="{{url('/')}}/ministry-philosophy">Ministry Philosophy</a></li>
                            </ul>
                        </li>
                        <li><a href="{{url('/')}}/our-sermons">Our Sermons</a>

                        </li>
                        <li><a href="{{url('/')}}/news-and-events">News & Events</a>

                        </li>
                        <li><a href="{{url('/')}}/our-calendar">Calendar</a>

                        </li>

                        <li><a href="{{url('our-programs')}}">Schedule</a></li>
                        {{-- <li><a href="{{url('give-now')}}">Give</a></li> --}}
                        <li><a  href="{{url('/')}}/give-now">Give</a>

                        </li>
                        <li><a href="{{url('/')}}/contact-us">contact us</a></li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>

</header>
<!--church header ends-->
@endforeach
