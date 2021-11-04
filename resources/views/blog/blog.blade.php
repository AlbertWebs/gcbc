@extends('front.master-page')
@section('content')
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
@foreach ($SiteSettings as $Settings)

	<!--sab banner start-->
	<div class="sab_banner_wrap overlay">
		<div class="sub_slider">
			<div class="banner_slide">
				<img src="{{asset('theme/images/sab-banner-bg.png')}}" alt="">
			</div>
			<div class="banner_slide">
				<img src="{{asset('theme/images/sab-banner-bg.png')}}" alt="">
			</div>
			<div class="banner_slide">
				<img src="{{asset('theme/images/sab-banner-bg.png')}}" alt="">
			</div>
		</div>
		<div class="container">
			<div class="sab_banner_text">
				<h3>News & Events</h3>
				<ul class="breadcrumb">
				  <li class="active">News & Events</li>
				</ul>
				<div class="banner_dots">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</div>
	</div>
	<!--sab banner end-->



    <div class="content">
        <!--church blog detail wrap start-->
        <div class="church_blog_detail_wrap wrap_2">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">

                        @foreach ($Blog as $Blog)
                               <!--ch blog detail row start-->
                        <div class="ch_blog_detail_row post-margin">
                            <!--church blog detail text start-->
                            <div class="church_blog_detail_text">
                                <?php 
                                if($Blog->event == 1){
                                    $RawDate = $Blog->date;
                                }else{
                                    $RawDate = $Blog->created_at;
                                }
                                    
                                    $FormatDate = strtotime($RawDate);
                                    $Month = date('M',$FormatDate);
                                    $Date = date('d',$FormatDate);
                                    $Dates = date('D',$FormatDate);
                                    $Year = date('Y',$FormatDate);

                                ?>
                                <figure>
                                    <img style="max-height:400px" src="{{url('/')}}/uploads/blogs/{{$Blog->image_one}}" alt="">
                                    <div class="box_span">
                                        <span class="date">{{$Date}}<b>{{$Month}}</b></span>
                                        <a href="{{url('/')}}/news-and-events/{{$Blog->slung}}" class="date"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                                    </div>
                                </figure>
                                <h3 class="custom-font-30px">{{$Blog->title}}</h3>
                                <ul class="church_meta_date meta_2 meta_3">
                                    <li><a href="#">By <?php $Admin = App\Admin::find($Blog->author) ?> {{$Admin->name}}.</a></li>
                                    <li><a href="#">{{$Dates}}, {{$Month}} {{$Date}}, {{$Year}}  </a></li>
                               
                                </ul>
                                <p><i><blockquote>{{$Blog->meta}}</blockquote></i></p>
                                <br>
                                <hr>
                                <p>{!!html_entity_decode($Blog->content)!!}</p>
                                <br>
                                @if($Blog->registration == 0)

                                @else
                                @if($Blog->link == null)
                                <a href="{{url('/')}}/registration/{{$Blog->slung}}" class="default_btn theme-bg_btn">Register Now</a>
                                @else
                                <a target="new" href="{{$Blog->link}}" class="default_btn theme-bg_btn">Register Now</a>
                                @endif
                                @endif
                            </div>
                            <!--church blog detail text end-->
                        </div>
                        <!--ch blog detail row end-->
                        @endforeach
                     


                       
                    </div>
                    @include('blog.sidebar')
                </div>
            </div>
        </div>
        <!--church blog detail wrap end-->

        
    </div>
    



@endforeach

@endsection