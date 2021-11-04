@extends('front.master-pages')
@section('content')
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
@foreach ($SiteSettings as $Settings)
@foreach ($About as $about)
<div style="min-height:124px"></div>


<div class="content">
	<div class="container">
	<hr>
		<h3>Ministry Philosophy</h3>
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
                                    <h4 class="">
                                        {!!html_entity_decode($about->philosopy)!!}
                                    </h4>
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