@extends('front.master-pages')
@section('content')
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
@foreach ($SiteSettings as $Settings)
<div style="min-height:124px"></div>


<div class="content">
	<div class="container">
	<hr>
		<h3>PayBill Number</h3>
	<hr>
	</div>
       
            {{--  --}}
            <section>
                <div class="container">
                  <div class="row text-center">
                    <img class="paybill" style="" src="{{url('/')}}/uploads/banners/GCBC-MPESA-02.png" alt="">
                  </div>
                </div>
              </section>
            {{--  --}}

            
            <section style="padding:0px; margin:0 auto !important">
                <div class="weekly-groups_services full-width-services text-center">
                    <ul class="services_weekly">
                        <li style="min-height:310px !important">
                            <div class="weekly_column">
                                <span class="fa fa-calendar-minus-o" aria-hidden="true"></span>
                                <h4><a href="#">GOD-CENTERED</a></h4>
                                <p>
                                    God is holy, glorious, and sovereign over all things. As a church, we are committed to knowing, loving, obeying, and glorifying the Father, Son, and Holy Spirit in all we do.
                                </p>
                                {{-- <a href="#" class="arrow_btn">See More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> --}}
                            </div>
                        </li>
                        <li style="min-height:310px !important">
                            <div class="weekly_column">
                                <span class="fa fa-hourglass-end" aria-hidden="true"></span>
                                <h4><a href="#">SCRIPTURE-GUIDED</a></h4>
                                <p>
                                    The Bible is ultimately authoritative in the life of the believer and the church. This leads us to a commitment to Bible exposition in all our ministries, whether for adults, youth, or even children.
                                </p>
                                {{-- <a href="#" class="arrow_btn">See More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> --}}
                            </div>
                        </li>
                        <li style="min-height:310px !important">
                            <div class="weekly_column">
                                <span class="fa fa-users" aria-hidden="true"></span>
                                <h4><a href="#">WORSHIP-ORIENTED</a></h4>
                                <p>
                                    Reverence, awe, joy, fear, and submission are true responses to God’s glory and salvation. We seek to cultivate worship that rightly exalts God while humbling and dignifying people by placing them in their right place below Him.
                                </p>
                                {{-- <a href="#" class="arrow_btn">See More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> --}}
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        

		</div>
		




 

@endforeach
@endsection