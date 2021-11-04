@extends('front.master-pages')
@section('content')
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
@foreach ($SiteSettings as $Settings)
@foreach ($Sermons as $Sermons)
<div style="min-height:124px"></div>


<div class="content">
    <div class="container">
    <hr>
        <h3>Sermons</h3>
    <hr>
    </div>




        <section>
            <div class="container">
                <div class="sermon_system_slider">
                    <div class="sermon_slider slider_full default_arrows">
                        <div class="sermon_video_player">
                            <figure>
                                <img src="{{url('/')}}/uploads/sermons/{{$Sermons->image}}" alt="">
                                <div class="sermon_absolute"><button onclick="window.location='{{$Sermons->video}}';"><i class="fa fa-play" aria-hidden="true"></i></button></div>
                                <div class="share_social">
                                    <ul>
                                        <li><a target="new" href="{{$Sermons->video}}"><i class="fa fa-play" aria-hidden="true"></i></a></li>
                                        <li><a download href="{{url('/')}}/uploads/sermons/{{$Sermons->file}}"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                                        {{-- <li><a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li> --}}
                                    </ul>
                                </div>
                            </figure>
                            <div class="sermon_detail_player_cap">
                                <div class="sermon_caption">
                                    <h4 class="custom-font-30px">{{$Sermons->title}}</h4>
  
                                    <p>{!!html_entity_decode($Sermons->content)!!} </p>
                                </div>
                                <div class="other_information">
                                    <ul>
                                        <li><span><i class="fa fa-user" aria-hidden="true"></i><?php $Admin = App\Admin::find($Sermons->author) ?> {{$Admin->name}}.</span></li>
                                        <?php 
                                            $RawDate = $Sermons->date;
                                            $FormatDate = strtotime($RawDate);
                                            $Month = date('M',$FormatDate);
                                            $Date = date('d',$FormatDate);
                                            $Dates = date('D',$FormatDate);
                                            $Year = date('Y',$FormatDate);

                                        ?>
                                        <li><span><i class="fa fa-clock-o" aria-hidden="true"></i>{{$Date}} {{$Month}} {{$Year}}</span></li>
                                        {{-- <li><span><i class="fa fa-tags" aria-hidden="true"></i>Photography, Logo Design, Art</span></li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                           <!--church music player-->
                           <div class="audioplayer style_audio_2">
                            <audio
                                controls
                                src="{{$Sermons->audio}}">
                                    Your browser does not support the
                                    <code>audio</code> element.
                            </audio> 
         
                        </div>
                        <!--church music player ends-->
                    </div>
                    <div class="windows_btn"><a href="#"><i class="fa fa-windows" aria-hidden="true"></i></a></div>
                </div>
                
            </div>
        </section>

        <!--church prayer block start-->
        <div class="church_prayer_block height no-padding">
            <div class="container">
                <div class="church_prayer_detail padding">
                    <h4 style="color:#ffffff">{{$Sermons->meta}}</h4>

                </div>
                <div class="pull-right">
                    <figure>
                        <img src="{{asset('theme/extra-images/prayer_short_img1.png')}}" alt="">
                    </figure>
                </div>
            </div>
        </div>
        <!--church prayer block end-->
    </div>
    


    @endforeach
@endforeach

@endsection