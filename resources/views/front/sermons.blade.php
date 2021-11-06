@extends('front.master-pages')
@section('content')
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
@foreach ($SiteSettings as $Settings)
<div style="min-height:124px"></div>
<div class="content">
    <div class="container">
    <hr>
        <h3>Sermons</h3>
    <hr>
    </div>
        {{--  --}}
        <section>
            <div class="container">
                <div class="row">
                    @foreach($Sermons as $sermons)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="church_causes_columns">
                            {{-- <figure> --}}
                                <iframe width="300" height="349" src="https://www.youtube.com/embed/{{$sermons->video}}?rel=0&hd=1" frameborder="0" allowfullscreen></iframe>
                                
                                {{-- <div class="church_absolute_middel">
                                    <ul class="meta_address">
                                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Jason Adam</a></li>
                                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>5/16/2017</a></li>
                                    </ul>
                                </div> --}}
                            {{-- </figure> --}}
                            <div class="church_blog_content">
                                <div class="church_causes2_caption">
                                    <h4><a href="#">{{$sermons->title}}</a></h4>
                                    <p>{{$sermons->meta}}</p>
                                </div>
                                {{-- <div class="chu_progress_causes">
                                    <div class="skillbar1 clearfix" data-percent="20%">
                                        <div class="skillbar1-bar bar_2"><span>20%</span></div>
                                    </div>
                                </div> --}}
                                <div class="chu-detail_donars">
                                    <ul class="donars_right">
                                        <li><small>{{$sermons->books}}</small></li>
                                        <li><small><?php $Admin = App\Admin::find($sermons->author) ?> {{$Admin->name}}</small></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>	
                    @endforeach
                </div>
            </div>
        </section>

        {{--  --}}

        <section>
            <div class="container">
                <div class="row">
                    @foreach ($Sermons as $Sermons)
                    <div class="col-md-12">
                        <div class="church_causes_listing church_music_book">
                            @if($Sermons->video == null)
                            <figure>
                                <img style="width:300px" src="{{url('/')}}/uploads/sermons/{{$Sermons->image}}" alt="">
                            </figure>
                            @else 
                            {{-- <figure> --}}
                                <iframe width="300" height="349" src="https://www.youtube.com/embed/{{$Sermons->video}}?rel=0&hd=1" frameborder="0" allowfullscreen></iframe>
                                {{-- <img style="width:300px" src="{{url('/')}}/uploads/sermons/{{$Sermons->image}}" alt=""> --}}
                            {{-- </figure> --}}
                            @endif
                            <div class="church_blog_content">
                                <div class="church_causes2_caption">
                                    <div class="padding_div">
                                        <h4><a href="#">{{$Sermons->title}}</a></h4>
                                        <?php 
                                            $RawDate = $Sermons->date;
                                            $FormatDate = strtotime($RawDate);
                                            $Month = date('M',$FormatDate);
                                            $Date = date('d',$FormatDate);
                                            $Dates = date('D',$FormatDate);
                                            $Year = date('Y',$FormatDate);

                                        ?>
                                        <ul class="meta_address">
                                            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><?php $Admin = App\Admin::find($Sermons->author) ?> {{$Admin->name}}</a></li>
                                            <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>{{$Dates}}, {{$Month}} {{$Year}}</a></li>
                                            <li><a href="#"><i class="fa fa-book" aria-hidden="true"></i>{{$Sermons->books}}</a></li>
                                        </ul>
                                    </div>
                                    <div class="caption">
                                        <p>{{$Sermons->meta}}</p> 
                                    </div>
                                </div>
                                   
                                <div class="share_social">
                                    <ul>
                                        <li class="spacial-padding"><a title="Share On Facebook" href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    
                                        <li><a download title="Download Audio" href="{{$Sermons->audio}}"><i class="fa fa-download" aria-hidden="true"></i> <i class="fa fa-music" aria-hidden="true"></i></a></li>
                                        @if($Sermons->file == null)

                                        @else
                                        <li><a download href="{{url('/')}}/uploads/sermons/{{$Sermons->file}}"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                                        @endif
                                    </ul>
                                </div>

                            </div>

                            @if($Sermons->video == null)
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
                            @else 

                            @endif
                           
                        </div>
                    </div>
                    @endforeach
                   
                  
                </div>
            </div>
        </section>

       
    </div>
	
	

	</div> 

			
		</div>
        <!-- End Main -->
@endforeach

@endsection