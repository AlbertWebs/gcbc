@extends('front.master-pages')
@section('content')
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
@foreach ($SiteSettings as $Settings)

<div style="min-height:124px"></div>
<div class="content">
    <div class="container">
    <hr>
        <h3>News & Events</h3>
    <hr>
    </div>



 
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
                                    $RawDate = $Blog->date;
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
                                <p>{{$Blog->meta}}</p>
                                @if($Blog->registration == 0)

                                @else
                                @if($Blog->link == null)
                                <a href="{{url('/')}}/registration/{{$Blog->slung}}" class="default_btn theme-bg_btn">Register Now</a>
                                @else
                                <a target="new" href="{{$Blog->link}}" class="default_btn theme-bg_btn">Register Now</a>
                                @endif
                                @endif
                                <a href="{{url('/')}}/news-and-events/{{$Blog->slung}}" class="default_btn theme-bg_btn">Read More</a>
                            </div>
                            <!--church blog detail text end-->
                        </div>
                        <!--ch blog detail row end-->
                        @endforeach
                     


                        {{-- <div class="pagination">
                            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                            <span class='current'>1</span>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div> --}}
                    </div>
                    @include('blog.sidebar')
                </div>
            </div>
        </div>
        <!--church blog detail wrap end-->

 
    </div>
    



@endforeach

@endsection