@extends('front.master-pages')
@section('content')
@foreach ($Product as $item)
    
@endforeach
<!-- Begin Main -->
<div role="main" class="main pgl-bg-grey">
    <!-- Begin page top -->
    <section class="page-top">
        <div class="container">
            <div class="page-top-in">
                <h2><span>{{$item->title}}</span></h2>
                {{-- <p>{{$item->name}}</p> --}}
            </div>
        </div>
    </section>
    <!-- End page top -->
    
    <!-- Begin content with sidebar -->
    <div class="container">
        <div class="row">
            <div class="col-md-9 content">
                
                <section class="pgl-pro-detail pgl-bg-light">
                    <div class="flexslider">
                        <ul class="slides">
                            @if($item->image_one == null)

                            @else
                            <li data-thumb="{{url('/uploads')}}/product/{{$item->image_one}}">
                                <img src="{{url('/uploads')}}/product/{{$item->image_one}}" alt="">
                                <span class="property-thumb-info-label">
                                    <span class="label price">KSH {{$item->price}}</span>
                                    <span class="label forrent">{{$item->type}}</span>
                                </span>
                            </li>
                            @endif

                            @if($item->image_two == null)

                            @else
                            <li data-thumb="{{url('/uploads')}}/product/{{$item->image_two}}">
                                <img src="{{url('/uploads')}}/product/{{$item->image_two}}" alt="">
                                <span class="property-thumb-info-label">
                                    <span class="label price">KSH {{$item->price}}</span>
                                    <span class="label forrent">{{$item->type}}</span>
                                </span>
                            </li>
                            @endif

                            @if($item->image_three == null)

                            @else
                            <li data-thumb="{{url('/uploads')}}/product/{{$item->image_three}}">
                                <img src="{{url('/uploads')}}/product/{{$item->image_three}}" alt="">
                                <span class="property-thumb-info-label">
                                    <span class="label price">KSH {{$item->price}}</span>
                                    <span class="label forrent">{{$item->type}}</span>
                                </span>
                            </li>
                            @endif

                            @if($item->image_four == null)

                            @else
                            <li data-thumb="{{url('/uploads')}}/product/{{$item->image_four}}">
                                <img src="{{url('/uploads')}}/product/{{$item->image_four}}" alt="">
                                <span class="property-thumb-info-label">
                                    <span class="label price">KSH {{$item->price}}</span>
                                    <span class="label forrent">{{$item->type}}</span>
                                </span>
                            </li>
                            @endif

                            @if($item->image_five == null)

                            @else
                            <li data-thumb="{{url('/uploads')}}/product/{{$item->image_five}}">
                                <img src="{{url('/uploads')}}/product/{{$item->image_five}}" alt="">
                                <span class="property-thumb-info-label">
                                    <span class="label price">KSH {{$item->price}}</span>
                                    <span class="label forrent">{{$item->type}}</span>
                                </span>
                            </li>
                            @endif

                            @if($item->image_six == null)

                            @else
                            <li data-thumb="{{url('/uploads')}}/product/{{$item->image_six}}">
                                <img src="{{url('/uploads')}}/product/{{$item->image_six}}" alt="">
                                <span class="property-thumb-info-label">
                                    <span class="label price">KSH {{$item->price}}</span>
                                    <span class="label forrent">{{$item->type}}</span>
                                </span>
                            </li>
                            @endif

                            @if($item->image_seven == null)

                            @else
                            <li data-thumb="{{url('/uploads')}}/product/{{$item->image_seven}}">
                                <img src="{{url('/uploads')}}/product/{{$item->image_seven}}" alt="">
                                <span class="property-thumb-info-label">
                                    <span class="label price">KSH {{$item->price}}</span>
                                    <span class="label forrent">{{$item->type}}</span>
                                </span>
                            </li>
                            @endif

                            @if($item->image_eight == null)

                            @else
                            <li data-thumb="{{url('/uploads')}}/product/{{$item->image_eight}}">
                                <img src="{{url('/uploads')}}/product/{{$item->image_eight}}" alt="">
                                <span class="property-thumb-info-label">
                                    <span class="label price">KSH {{$item->price}}</span>
                                    <span class="label forrent">{{$item->type}}</span>
                                </span>
                            </li>
                            @endif

                            @if($item->image_nine == null)

                            @else
                            <li data-thumb="{{url('/uploads')}}/product/{{$item->image_nine}}">
                                <img src="{{url('/uploads')}}/product/{{$item->image_nine}}" alt="">
                                <span class="property-thumb-info-label">
                                    <span class="label price">KSH {{$item->price}}</span>
                                    <span class="label forrent">{{$item->type}}</span>
                                </span>
                            </li>
                            @endif

                            @if($item->image_ten == null)

                            @else
                            <li data-thumb="{{url('/uploads')}}/product/{{$item->image_ten}}">
                                <img src="{{url('/uploads')}}/product/{{$item->image_ten}}" alt="">
                                <span class="property-thumb-info-label">
                                    <span class="label price">KSH {{$item->price}}</span>
                                    <span class="label forrent">{{$item->type}}</span>
                                </span>
                            </li>
                            @endif


                           
                        </ul>
                    </div>
                    <div class="pgl-detail">
                        <div class="row">
                            <div class="col-sm-4">
                                <ul class="list-unstyled amenities amenities-detail">
                                    <?php $Category = DB::table('category')->where('id',$item->cat)->get() ?>
                                    @foreach ($Category as $cat)
                                    <li><strong>Type:</strong> {{$cat->cat}}</li>
                                    @endforeach
                                    <li><strong>Area:</strong> {{$item->sqr}}<sup>m2</sup></li>
                                    <li><address><i class="icons icon-location"></i> {{$item->location}}</address></li>
                                    <li><i class="icons icon-bedroom"></i> {{$item->br}} Bedrooms</li>
                                    <li><i class="icons icon-bathroom"></i> {{$item->bath}} Bathrooms</li>
                                </ul>
                            </div>
                            <div class="col-sm-8">
                                <h2>{{$item->title}} - {{$item->name}}</h2>
                                <p>{!!html_entity_decode($item->content)!!}</p>
                            </div>
                        </div>
                    
                        <div class="tab-detail">
                            <h3>More Infomation</h3>
                            <div class="panel-group" id="accordion">
                                {{-- <div class="panel panel-default pgl-panel">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Additional Details</a> </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <ul>
                                                <li><strong>AC:</strong> Ceiling Fan(s), Central</li>
                                                <li><strong>Acres Source:</strong> Assessor</li>
                                                <li><strong>Bathrooms Description:</strong> Stall Shower</li>
                                                <li><strong>Bathrooms Features:</strong> Main Floor Master Bedroom</li>
                                                <li><strong>Dining Area:</strong> Family Kitchen</li>
                                                <li><strong>Lot Description:</strong> Curbs-Walks</li>
                                                <li><strong>Mot Dimensions:</strong> 70x100</li>
                                                <li><strong>Lot Size Source:</strong> Assessor</li>
                                                <li><strong>Parking Type:</strong> Direct Garage Access, Driveway, Garage Door Opener</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="panel panel-default pgl-panel">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">Video</a> </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body"> 
                                            <iframe width="100%" height="315"
                                            src="https://www.youtube.com/embed/{{$item->video}}">
                                            </iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default pgl-panel">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">Map</a> </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                           {{-- {{$item->map}} --}}
                                           {!!html_entity_decode($item->map)!!}
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default pgl-panel">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseFouth" class="collapsed">Agent</a> </h4>
                                    </div>
                                    <div id="collapseFouth" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <?php $Admin = DB::table('admins')->where('id',$item->agent)->get(); ?>
                                            @foreach ($Admin as $admin)
                                            <div class="pgl-agent-item pgl-bg-light">
                                                <div class="row pgl-midnarrow-row">
                                                    <div class="col-xs-4">
                                                        <div class="img-thumbnail-medium">
                                                            <a href="#"><img alt="" class="img-responsive" src="{{url('/')}}/uploads/admins/{{$admin->image}}"></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-8">
                                                        <div class="pgl-agent-info">
                                                            <small>NO.{{$admin->id}}</small>
                                                            <h4><a href="#">{{$admin->name}}</a></h4>
                                                            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum nisi eu ante mattis.</p> --}}
                                                            <address>
                                                                <i class="fa fa-map-marker"></i> Office : {{$admin->phone}}<br>
                                                                <i class="fa fa-phone"></i> Mobile : {{$admin->mobile}}<br>
                                                                {{-- <i class="fa fa-fax"></i> Fax : 1-800-666-8888<br> --}}
                                                                <i class="fa fa-envelope-o"></i> Mail: <a href="mailto:{{$admin->email}}">{{$admin->email}}</a>
                                                            </address>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                           
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Begin Related properties -->
                <section class="pgl-properties">
                    <h2>Related Properties</h2>
                    <div class="row">
                        <div class="owl-carousel pgl-pro-slide" data-plugin-options='{"items": 3, "itemsDesktop": 3, "singleItem": false, "autoPlay": false, "pagination": false}'>
                            <?php $Related = DB::table('product')->where('cat',$item->cat)->get(); ?>
                            @foreach ($Related as $featured)
                            <div class="col-md-12 animation">
								<div class="pgl-property featured-item">
									<div class="property-thumb-info">
										<div class="property-thumb-info-image">
											<img alt="" class="img-responsive" src="{{url('/')}}/uploads/product/{{$featured->image_one}}">
										</div>
										<div class="property-thumb-info-content">
											<h3><a href="{{url('/')}}/property/{{$featured->slung}}">{{$featured->title}}</a></h3>
											<p><i class="fa fa-map-marker"></i> {{$featured->location}}</p>
										</div>
									</div>
								</div>
							</div>
                            @endforeach
                        </div>
                    </div>
                </section>
                <!-- End Related properties -->
                
            </div>
            <div class="col-md-3 sidebar">
                                
                <!-- Begin Our Agents -->
                <aside class="block pgl-agents pgl-bg-light">
                    <h3>Our Agents</h3>
                    <div class="owl-carousel pgl-pro-slide pgl-agent-item" data-plugin-options='{"items": 1, "pagination": false, "autoHeight": true}'>
                        <?php $Admins = DB::table('admins')->get(); ?>
                        @foreach ($Admins as $admin)
                        <div class="pgl-agent-item">
                            <div class="img-thumbnail-medium">
                                <a href="#"><img width="100" src="{{url('/')}}/uploads/admins/{{$admin->image}}" class="img-responsive" alt=""></a>
                            </div>
                            <div class="pgl-agent-info">
                                <small>NO.1</small>
                                <h4><a href="#l">{{$admin->name}}</a></h4>
                                <address>
                                    <i class="fa fa-map-marker"></i> Office : {{$admin->phone}}<br>
                                    <i class="fa fa-phone"></i> Mobile : {{$admin->mobile}}<br>
                                    {{-- <i class="fa fa-fax"></i> Fax : 1-800-666-8888<br> --}}
                                    <i class="fa fa-envelope-o"></i> Mail: <a href="mailto:{{$admin->email}}">{{$admin->email}}</a>
                                </address>
                            </div>	
                        </div>
                        @endforeach

                        
                        
                    </div>
                </aside>
                <!-- End Our Agents -->
                
                <!-- Begin Advanced Search -->
                <aside class="block pgl-bg-dark pgl-testimonials">
                    <div class="owl-carousel pgl-testimonial" data-plugin-options='{"items": 1, "pagination": false, "autoHeight": true}'>
                        <?php $Testimonials = DB::table('testimonials')->get() ?>
                        @foreach ($Testimonials as $item)
                            <div class="col-md-12">
                                <div class="testimonial-author">
                                    <div class="img-thumbnail-small img-circle">
                                        <img src="{{url('/')}}/uploads/testimonials/{{$item->image}}" class="img-circle" alt="Andrew MCCarthy">
                                    </div>
                                    <h4>{{$item->name}}</h4>
                                    <p><strong>{{$item->position}}</strong></p>
                                </div>
                                <div class="divider-quote-sign"><span>“</span></div>
                                <blockquote class="testimonial">
                                    <p>{{$item->content}}</p>
                                </blockquote>
                            </div>
                            @endforeach
                    </div>
                </aside>
                <!-- End Advanced Search -->
                
            </div>
        </div>	
    </div>
    <!-- End content with sidebar -->
    
</div>
<!-- End Main -->
@endsection