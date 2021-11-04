@extends('front.master-pages')
@section('content')
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
@foreach ($SiteSettings as $Settings)
@foreach ($About as $about)
<div style="min-height:124px"></div>


<div class="content">
	<div class="container">
	<hr>
		<h3>Ministry Objectives</h3>
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
                                        • To establish a local church committed to the command to make disciples through faithful gospel ministries established by faithful preaching and teaching of God’s Word that promote the worship of God and the proclamation of  the gospel of Jesus Christ. (Col. 1:28)<br><br>
                                        • Develop and establish Elder rule in the church.<br><br>
                                        • Building discernment against false teaching that is characteristic among charismatic ministries and prosperity gospel preaching which are prevalent in Kenya. <br><br>

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