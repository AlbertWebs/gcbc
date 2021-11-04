<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
@foreach ($SiteSettings as $Settings)
<!--church header-->
  <header class="church_version_1">
    <!--church header container-->
    <div class="church_container">
        <!--church container-->
        <div class="container">
            <!--church logo-->
            <div class="church_logo">
                <h1><a href="{{url('/')}}"><img style="max-width:200px" src="{{url('/')}}/uploads/logo/{{$Settings->logo}}" alt="church logo"></a></h1>
            </div>
            <!--church logo ends-->
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
            
            <!--church menus-->
            <div class="church_menu_row">
                <!--church music player-->
                <div class="church_audio_row">
                    {{-- <div class="audioplayer"> --}}
                        <?php $Sermons = DB::table('sermons')->orderBy('id','DESC')->limit(1)->get(); ?>
                        @foreach ($Sermons as $Sermons)
                        <div class="church_audio_row">
                            <div class="audioplayer">
                                <div class="player playing">
                                   <div class="cover" style=""></div>
                                   <div class="info">
                                      <div class="title">
                                         {{$Sermons->title}}
                                      </div>
                                      <div class="artist">{{$Sermons->books}}</div>
                                   </div>
                                   
                                   <div class="" style="color:#ffffff;">
                                    {{$Sermons->meta}}
                                   </div>
                                  
                                  
                                   <div class="pl">
                                   </div>
                                </div>
                                <ul class="playlist">
                                </ul>
                             </div>
                        </div>
                        @endforeach
           
                    {{-- </div> --}}
                </div> 
                <!--church music player ends-->   
                
                

                <!--church social navigation menu-->
                <div class="church_social-menu">
                    <div class="church_navigation">
                        <nav class="navigation">                                                          
                            <ul>
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
                        </nav>
                    </div>
                    <!--church cart menu-->
                    <div class="cart_items_show">
                        <ul>
                          
                            <li><a href="{{$Settings->twitter}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="{{$Settings->facebook}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="{{$Settings->instagram}}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="{{$Settings->youtube}}"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                            
                        </ul>
                    </div>
                    <!--church cart menu ends-->
                </div>
                <!--church social navigation menu ends-->
            </div>
            <!--church menus ends-->
        </div>
         <!--church container ends-->
    </div>
    <!--church header container end-->
</header>
<!--church header ends-->
@endforeach