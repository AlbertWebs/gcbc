@extends('front.master-pages')
@section('content')
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
@foreach ($SiteSettings as $Settings)
@foreach ($Blogs as $Blog)
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
				<h3>Register Event</h3>
				<ul class="breadcrumb">
				  <li class="active">{{$Blog->title}}</li>
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


	<div class="contact_us">
		
		<section>
			<div class="container">
				<div class="row">				
					<div class="content_contact_us">
                        {{--  --}}
                        <center>
                            @if(Session::has('message'))
                                          <div class="alert alert-success">{{ Session::get('message') }}</div>
                           @endif
           
                           @if(Session::has('messageError'))
                                          <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
                           @endif
                            </center>
                        {{--  --}}
						<h4 class="custom-font-30px">Leave Your Infomation With Us</h4>
						<p>You are about to register for {{$Blog->title}}, Please feel the below form and we will contact you soonest possible</p>
						<form id="contact-form" class="form-contact" action="{{url('/')}}/register-now" method="POST">
							{{csrf_field()}}
							<div class="kode-left-comment-sec">
								<div class="col-md-12">
									<div class="kf_commet_field">
										<input placeholder="Full Name" name="name" value="" data-default="Pst. Mark Ndinyo*" size="30" required="" type="text">
									</div>
									<div class="kf_commet_field">
											<input placeholder="your Email Address" name="email" value="" data-default="example@example.com*" size="30" required="" type="text">
									</div>
									<div class="kf_commet_field">
										<input placeholder="Mobile e.g +254720000000" name="mobile" value="" data-default="0723014032" size="30" required="" type="text">
									</div>
                                    <input type="hidden" name="event" value="{{$Blog->title}}">
								</div>
								<div class="col-md-12">
									<div class="ch_textarea">
										<textarea placeholder="Type here message" name="message"></textarea>
									</div>
								</div>
								<p class="form_submit"><input name="submit" class="default_small_btn btn_2" value="Register Now" type="submit"></p>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>

		<!--church prayer block start-->
		<div class="church_prayer_block height padding-0">
			<div class="container">
				<div class=" padding">
					<?php $Sermons = DB::table('sermons')->inRandomOrder()->limit(1)->get(); ?>
					@foreach ($Sermons as $Sermons)
					<h4 style="color:#ffffff; margin:0px auto;" class="text-center">{{$Sermons->meta}}</h4><br>
					<center><p style="color:#ffffff; text-align:center margin:0px auto;"> ~ {{$Sermons->books}}</p></center>
					@endforeach
				</div>
			
			</div>
		</div>
		<!--church prayer block end-->
	</div>
	
	

	</div> 

			
		</div>
        <!-- End Main -->
@endforeach
@endforeach

@endsection