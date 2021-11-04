<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
@foreach ($SiteSettings as $Settings)
<!--church header-->
<header class="header_version_5">
   
    <!--church header container-->
    <div class="church_version-5">
        <!--church container-->
        <div class="container">
            <div id="kode-responsive-navigation" class="dl-menuwrapper">
                <button class="dl-trigger">Menu</button>
                <ul class="dl-menu">
                    <li class="active"><a  href="{{url('/')}}">Home</a>
                        
                    </li>
                    <li><a  href="{{url('/')}}/about-us">About Us</a>
                        <ul class="children submenu">
                            <li><a href="{{url('/')}}/about-us#mission">Our Mision</a></li>
                            <li><a href="{{url('/')}}/about-us#mission">Our Vision</a></li>
                            <li><a href="{{url('/')}}/about-us#values">Core Values</a></li>
                        </ul>
                    </li>
                    <li><a href="{{url('/')}}/our-sermons">Our Sermons</a>
                    
                    </li>
                    <li><a href="{{url('/')}}/news-and-events">News & Events</a>
                        
                    </li>
            
                
                    <li><a href="{{url('our-programs')}}">Schedule</a></li>
                    <li><a href="{{url('/')}}/contact-us">contact us</a></li>
                </ul>
            </div>
            <!--Responsive Menu END-->
            
            <div class="church_navigation pull-left">
                <nav class="navigation">                                                          
                    <ul>    
                        
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('/')}}/about-us">About Us</a>
                            <ul class="children submenu">
                                <li><a href="{{url('/')}}/about-us#mission">Our Mision</a></li>
                                <li><a href="{{url('/')}}/about-us#mission">Our Vision</a></li>
                                <li><a href="{{url('/')}}/about-us#values">Core Values</a></li>
                                <li><a href="{{url('/')}}/ministry-objectives">Ministry Objectives</a></li>
                                <li><a href="{{url('/')}}/ministry-philosophy">Ministry Philosophy</a></li>
                            </ul>
                        </li>
                        <li><a href="{{url('/')}}/about-us#mission">Mission</a></li>
                        <li><a href="{{url('/')}}/about-us#mission">Our Vision</a></li>
                        {{-- <li><a href="{{url('/')}}">Core Values</a></li> --}}
                       
                    </ul>
                </nav>
            </div>
            <!--church logo-->
            <div class="church_logo">
                <h1><a href="{{url('/')}}"><img style="max-width:120px" src="{{url('/')}}/uploads/logo/{{$Settings->logoo}}" alt="{{$Settings->sitename}}"></a></h1>
            </div>
            <!--church logo ends-->
            <div class="church_navigation pull-right">
                <nav class="navigation">                                                          
                    <ul>   
                        <li><a href="{{url('/')}}/our-sermons">Sermons</a></li>                                    
                        <li><a href="{{url('/')}}/news-and-events">Latest News</a></li>
                        {{-- <li><a href="{{url('/')}}/our-sermons">Schedule</a></li> --}}
                        <li><a href="{{url('our-programs')}}">Schedule</a></li>
                        <li><a href="{{url('/')}}/contact-us">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
             
        </div>        
    </div>    

</header>
<!--church header ends-->
@endforeach