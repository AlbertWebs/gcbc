<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
@foreach ($SiteSettings as $Settings)
<div class="col-md-3">
    <div class="widget_sidebar">
        <div class="widget_categories">
            <h5 class="widget_tittle">Sermons</h5>
            <ul>
                <?php $Sermons = DB::table('sermons')->limit(10)->get(); ?>
                @foreach ($Sermons as $Sermons)
                <?php 
                    $RawDate = $Sermons->created_at;
                    $FormatDate = strtotime($RawDate);
                    $Month = date('M',$FormatDate);
                    $Date = date('d',$FormatDate);
                    $Dates = date('D',$FormatDate);
                    $Year = date('Y',$FormatDate);

                ?>
                <li><a href="{{url('/')}}/our-sermons">{{$Sermons->title}}  ({{$Date}},{{$Month}}, {{$Year}})</a></li>
                @endforeach
           
            </ul>
        </div>
        
        <div class="widget_social">
            <h5 class="widget_tittle">Social Widget</h5>
            <ul>
                {{-- <li><a class="orange" href="{{$Settings->twitter}}"><span><i class="fa fa-twitter"></i></span>RSS feed</a></li> --}}
                <li><a class="blue_light" href="{{$Settings->twitter}}"><span><i class="fa fa-twitter"></i></span>follow us</a></li>
                <li><a class="blue" href="{{$Settings->twitter}}"><span><i class="fa fa-facebook"></i></span>Like us</a></li>
                <li><a class="pink" href="{{$Settings->instagram}}"><span><i class="fa fa-instagram"></i></span>follow us</a></li>
                {{-- <li><a class="pink" href="#"><span><i class="fa fa-twitter"></i></span>follow us</a></li> --}}
                <li><a class="red" href="{{$Settings->youtube}}"><span><i class="fa fa-youtube"></i></span>Youtube</a></li>
            </ul>
        </div>
      
       
        {{-- <div class="widget_writeform">
            <h5 class="widget_tittle">Quick Contact</h5>
            <form>
                <div class="widget-input-text">
                    <input type="text" placeholder="name">
                </div>
                <div class="widget-input-text">
                    <input type="text" placeholder="email address">
                </div>
                <div class="widget-input-text">
                    <textarea placeholder="message"></textarea>
                </div>
                <div class="widget-input-text">
                    <button class="default_btn black-bg_btn">Send Now</button>
                </div>
            </form>
        </div> --}}
     
    </div>
</div>
@endforeach