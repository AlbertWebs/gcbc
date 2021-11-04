@extends('front.master-pages')
@section('content')
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
@foreach ($SiteSettings as $Settings)
@foreach ($About as $about)

<div style="min-height:124px"></div>
<div class="content">
    <div class="container">
    <hr>
        <h3>Our Order of Service</h3>
    <hr>
    </div>


    <section class="church_soft_services extra-center bg_none">
        <div class="container">
           
            <?php $About = DB::table('about')->get(); ?>
            @foreach ($About as $about)
                <!--church caption wrap start-->
                <div class="church_caption_wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                <div class="church_text">
                                    <h3 class="text-center">We are focused in incorporating all departments namely men, women, youth and children ministry</h3>
                                </div>
                                <div class="church_text">
                                    <h4 class="text-center">Our church program also cater for Biblical counceling and training of men for leadership roles in a local church</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!--church caption wrap ends-->
            <!--church caption wrap start-->
            <div class="church_caption_wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                            <div class="church_text">
                                <h3 class="text-center" style="text-decoration: underline">Our Order of Service</h3>
                            </div>
                         
                            <div class="church_text">
                                <h4 class="text-center" style="color:#000000"><strong  style="color:#000000">9:30-10:30AM</strong></h4>
                                <h4 class="text-center" style="color:#000000">Adult Bible Study</h4>
                             
                            </div>
                            
                            <div class="church_text">
                                <h4 class="text-center" style="color:#000000"><strong  style="color:#000000">10:40-12:30PM</strong></h4>
                                <h4 class="text-center" style="color:#000000">Main Service</h4>
                             
                            </div>
                            
                            <div class="church_text">
                                <h4 class="text-center" style="color:#000000"><strong  style="color:#000000">10:40-12:30PM</strong></h4>
                                <h4 class="text-center" style="color:#000000">Sunday School</h4>
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

  
		
@endforeach
@endforeach
@endsection