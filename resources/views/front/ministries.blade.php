@extends('front.master-pages')
@section('content')
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
@foreach ($SiteSettings as $Settings)

<div style="min-height:124px"></div>


<div class="content">
	<div class="container">
	<hr>
		<h3>Our Ministries</h3>
	<hr>
	</div>
        

       
			<section>
				<div class="container">
					<div class="row" style="margin:0 auto !important">
                        @foreach($Ministries as $Ministry)
						<div class="col-md-4 col-sm-6 col-xs-12" style="margin:0 auto !important">
							<div class="church_causes_columns">
                                <figure>
                                    <img style="height:280px;" src="{{url('/')}}/uploads/ministries/{{$Ministry->image}}" alt="">
                                </figure>
                                <div class="church_blog_content">
                                    <div class="church_causes2_caption">
	                                    <h4><a href="{{url('/')}}/ministries/{{$Ministry->slung}}">{{$Ministry->title}}</a></h4>
	                                    <p style="min-height: 150px;">{{$Ministry->meta}}</p>
                                    </div>
                                </div>
                            </div>
						</div>	
                        @endforeach
					</div>
				</div>
			</section>

      
		</div>



 

@endforeach
@endsection