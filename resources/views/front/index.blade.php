@extends('front.master')
@section('content')
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
@foreach ($SiteSettings as $Settings)
<div class="content">
            
  

    {{--  --}}
    <!--church banner-->
    <div class="banner">
        <div class="slider-version3">
            <?php $Slider = DB::table('slider')->get(); ?>
            @foreach ($Slider as $Slider)
            <div class="slider-detail overlay-b">
                <img style="min-height: 420px !important" src="{{url('/')}}/uploads/slider/{{$Slider->image}}" alt="img here">
                <div class="item_caption position-center">
                    <div class="custom-font-30px" style="font-size:70px; text-shadow: 2px 2px #000000; max-width:600px">{!!html_entity_decode($Slider->name)!!}</div>
                    <div class="banner_buttons">
                        <a href="{{url('/')}}/our-sermons" class="default_btn border-white">Sermons</a>
                        {{--  --}}
                        <a href="{{url('/')}}/our-programs" class="default_btn border-white">View Schedule</a>
                         <a target="new" href="https://www.facebook.com/gracecommunitybiblechurchke/live/" class="default_btn border-white"><span class="fa fa-video-camera"></span>  Watch Live</a>
                   
                        <?php 
                           $dt = \Carbon\Carbon::now();
                           $start = \Carbon\Carbon::createFromTimeString('09:00');
                           $end = \Carbon\Carbon::createFromTimeString('23:00');
                           $now = \Carbon\Carbon::now();
                         ?>
                         @if(date('w', strtotime($dt)) == 7) 
                            @if ($now->between($start, $end)) 
                            <a target="new" href="https://www.facebook.com/gracecommunitybiblechurchke/live/" class="default_btn border-white"><span class="fa fa-video-camera"></span>  Watch Live</a>
                            @endif
                         @endif
                       
                    </div>
                    <section id="section03" class="demo">
                        {{-- <h1>Scroll Down Button #3</h1> --}}
                        <a href="#section04"><span></span>Scroll</a>
                    </section>
                </div>
              
            </div>
            @endforeach
        </div>
    </div>

    @foreach ($Events as $Event)
    <!--church prayer block start-->
    <div class="church_prayer_block padding-0">
        <div class="container">
            <div class="church_prayer_detail padding additional-margin" style="display: table;">
                <span style="vertical-align:middle; display: table-cell;">
                    <h3 style="text-shadow: 2px 2px #000000; font-size:50px; text-align:center; vertical-align:middle; display: table-cell;">{{$Event->title}}</h3>
                    <center>
                      <a target="new" href="{{$Event->link}}" class="default_btn black-bg_btn" style="border-radius:10px; text-align: center !important; background-color:#fae204; color:#040488; margin-top:50px; ">Register Now <i class="fa fa-pencil"></i></a>
                    </center>
                </span>
            </div>
            <div class="pull-right hide-mobile">
                <figure>
                    <img src="{{url('/')}}/uploads/blogs/{{$Event->image_one}}" alt="">
                </figure>
            </div>
        </div>
    </div>
    <!--church prayer block end-->
    @endforeach
  
 

    <?php $About = DB::table('about')->get() ?>
            @foreach ($About as $about)
            <div class="content">
                    
                <div class="church_aboutus">
                    <div class="container">
                        <div class="church_about_us" id="section04">
                            <div class="church_heading align_left">
                                <h3 style="font-size:20px">Welcome to {{$Settings->sitename}}</h3>
                                <p>{!!html_entity_decode($about->content)!!}</p>
                            </div>
             
                        </div>
                        <div style="background-image: url({{asset('theme/extra-imaages/church_padiri_01.jpg')}});" class="church_picture"></div>
                    </div>
        
                </div>
                
            </div> 
            @endforeach

            {{-- Something Here --}}
    <section class="church_soft_services bg_gray" style="margin:0 auto !important;">
        <div class="container">
            <div class="church_heading align_center">
                <h3>Our Ministries</h3>
                <span ><sup class="icon-cross"></sup></span>
            </div>
            <div class="row" style="margin:0 auto !important;">
                <?php $Ministry = DB::table('ministries')->limit('6')->get(); ?>
                @foreach ($Ministry as $Ministry)
                <div class="col-md-4 col-sm-6 col-xs-12 border-radius" style="margin:0 auto !important;">
                    <div class="soft_column border-radius" style="margin:0 auto !important;">
                        <figure style="margin:0 auto !important;">
                            <img style="min-height:304px;" src="{{url('/')}}/uploads/ministries/{{$Ministry->image}}" alt="">
                            <div class="soft_column_caption">
                                <h4>{{$Ministry->title}}</h4>
                                <p>{{$Ministry->meta}}</p>
                                <a href="{{url('/')}}/ministries/{{$Ministry->slung}}" class="default_small_btn theme-bg_btn">Read More</a>
                            </div>
                        </figure>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="banner_buttons text-center">
                <a href="{{url('/')}}/ministries" class="default_btn border-white" tabindex="0">All Ministries</a>
            </div>
        </div>
    </section>
    {{-- Something Here --}}
    <section  class="church_soft_services extra-center bg_none second" style="margin:0 auto !important;">
        <div class="container">
            <div class="church_heading align_center">
                {{-- <h3 style="color:#000000">Welcome to {{$Settings->sitename}}</h3> --}}
                <span ><sup class="icon-cross"></sup></span>
            </div>
            <?php $About = DB::table('about')->get(); ?>
            @foreach ($About as $about)
                <!--church caption wrap start-->
                <div class="church_caption_wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                <div class="church_text">
                                    <h3 class="text-center">{!!html_entity_decode($about->purpose)!!}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!--church caption wrap ends-->
            @endforeach
            {{--  --}}
        </div>
    </section>

    

    <section style="padding:0px; margin:0 auto !important">
        <div class="weekly-groups_services full-width-services text-center">
            <ul class="services_weekly">
                <li style="min-height:310px !important">
                    <div class="weekly_column">
                        <span class="fa fa-calendar-minus-o" aria-hidden="true"></span>
                        <h4><a href="#">GOD-CENTERED</a></h4>
                        <p>
                            God is holy, glorious, and sovereign over all things. As a church, we are committed to knowing, loving, obeying, and glorifying the Father, Son, and Holy Spirit in all we do.
                        </p>
                        {{-- <a href="#" class="arrow_btn">See More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> --}}
                    </div>
                </li>
                <li style="min-height:310px !important">
                    <div class="weekly_column">
                        <span class="fa fa-hourglass-end" aria-hidden="true"></span>
                        <h4><a href="#">SCRIPTURE-GUIDED</a></h4>
                        <p>
                            The Bible is ultimately authoritative in the life of the believer and the church. This leads us to a commitment to Bible exposition in all our ministries, whether for adults, youth, or even children.
                        </p>
                        {{-- <a href="#" class="arrow_btn">See More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> --}}
                    </div>
                </li>
                <li style="min-height:310px !important">
                    <div class="weekly_column">
                        <span class="fa fa-users" aria-hidden="true"></span>
                        <h4><a href="#">WORSHIP-ORIENTED</a></h4>
                        <p>
                            Reverence, awe, joy, fear, and submission are true responses to God’s glory and salvation. We seek to cultivate worship that rightly exalts God while humbling and dignifying people by placing them in their right place below Him.
                        </p>
                        {{-- <a href="#" class="arrow_btn">See More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> --}}
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <?php $BlogS = DB::table('blogs')->get(); ?>
    @if($BlogS->isEmpty())

    @else

    <?php $Blogs = DB::table('blogs')->limit(2)->where('event' ,'0')->get(); ?>
    @if($Blogs->isEmpty())
    <section>
        <div class="lastest-blog-posts">
            <div class="container">
                <div class="church_heading align_center">
                    <h3>News & Events</h3>
                    <span ><sup class="icon-cross"></sup></span>
                </div>
                <div class="row">
                    <?php 
                        $Blog = DB::table('blogs')->limit(2)->where('event' ,'0')->get();
                        $Count = 1;
                     ?>
                    
                    <?php $Blog = DB::table('blogs')->limit(1)->where('event', '1')->get(); ?>
                    @foreach ($Blog as $item)
                    <div class="col-md-6">
                        <div class="blog-cn post_column hover-effect-03">
                            <figure>
                                <img  src="{{url('/')}}/uploads/blogs/{{$item->image_one}}" alt="">
                                <div class="simple_effect">
                                    <a href="{{url('/')}}/news-and-events/{{$item->slung}}"><i class="fa fa-expand" aria-hidden="true"></i></a>
                                    <a href="{{url('/')}}/news-and-events/{{$item->slung}}"><i class="fa fa-expand" aria-hidden="true"></i></a>
                                </div>
                            </figure>
                            <?php 
                             
                                $RawDate = $item->date;
                                $FormatDate = strtotime($RawDate);
                                $Month = date('M',$FormatDate);
                                $Date = date('d',$FormatDate);
                                $Year = date('Y',$FormatDate);

                            ?>
                            <div class="post-content">
                                <span class="date">{{$Date}}<b>{{$Month}}</b></span>
                                <h6><a href="{{url('/')}}/news-and-events/{{$item->slung}}">{{$item->title}}</a></h6>
                                <p>{{$item->meta}}</p>
                                <a href="{{url('/')}}/news-and-events/{{$item->slung}}" class="default_btn theme-bg_btn">Read More</a>
                                @if($item->registration == 0)

                                @else
                                <a href="{{$item->link}}" class="default_btn theme-bg_btn">Register Now</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    @endforeach
                   
                </div>
            </div>
        </div>
    </section>
    @else
    <section>
        <div class="lastest-blog-posts">
            <div class="container">
                <div class="church_heading align_center">
                    <h3>News & Events</h3>
                    <span ><sup class="icon-cross"></sup></span>
                </div>
                <div class="row">
                    <?php 
                        $Blog = DB::table('blogs')->limit(2)->where('event' ,'0')->get();
                        $Count = 1;
                     ?>
                    <div class="col-md-8">
                        @foreach ($Blog as $item)
                        <div class="post_column hover-effect-03">
                            <figure>
                                <img style="" src="{{url('/')}}/uploads/blogs/{{$item->image_one}}" alt="">
                                <div class="simple_effect">
                                    <a href="{{url('/')}}/news-and-events/{{$item->slung}}"><i class="fa fa-expand" aria-hidden="true"></i></a>
                                    <a href="{{url('/')}}/news-and-events/{{$item->slung}}"><i class="fa fa-expand" aria-hidden="true"></i></a>
                                </div>
                            </figure>
                            <?php 
                                $RawDate = $item->created_at;
                                $FormatDate = strtotime($RawDate);
                                $Month = date('M',$FormatDate);
                                $Date = date('d',$FormatDate);
                                $Year = date('Y',$FormatDate);

                            ?>
                            <div class="post-content">
                                <span class="date">{{$Date}}<b>{{$Month}}</b></span>
                                <h6><a href="#">{{$item->title}}</a></h6>
                                <p>{{$item->meta}}</p>
                                <a href="{{url('/')}}/news-and-events/{{$item->slung}}" class="default_btn theme-bg_btn">Read More</a>
                            </div>
                        </div>
                        @endforeach
                    
                    </div>
                    <?php $Blog = DB::table('blogs')->orderBy('id','DESC')->limit(1)->where('event', '1')->get(); ?>
                    @foreach ($Blog as $item)
                    <div class="col-md-4">
                        <div class="blog-cn post_column hover-effect-03">
                            <figure>
                                <img src="{{url('/')}}/uploads/blogs/{{$item->image_one}}" alt="">
                                <div class="simple_effect">
                                    <a href="{{url('/')}}/news-and-events/{{$item->slung}}"><i class="fa fa-expand" aria-hidden="true"></i></a>
                                    <a href="{{url('/')}}/news-and-events/{{$item->slung}}"><i class="fa fa-expand" aria-hidden="true"></i></a>
                                </div>
                            </figure>
                            <?php 
                             
                                $RawDate = $item->date;
                                $FormatDate = strtotime($RawDate);
                                $Month = date('M',$FormatDate);
                                $Date = date('d',$FormatDate);
                                $Year = date('Y',$FormatDate);

                            ?>
                            <div class="post-content">
                                <span class="date">{{$Date}}<b>{{$Month}}</b></span>
                                <h6><a href="{{url('/')}}/news-and-events/{{$item->slung}}">{{$item->title}}</a></h6>
                                <p>{{$item->meta}}</p>
                                <a href="{{url('/')}}/news-and-events/{{$item->slung}}" class="default_btn theme-bg_btn">Read More</a>
                                @if($item->registration == 0)

                                @else
                                <a href="{{$item->link}}" class="default_btn theme-bg_btn">Register Now</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    @endforeach
                   
                </div>
            </div>
        </div>
    </section>
    @endif

    @endif
</div>  
@endforeach
@endsection