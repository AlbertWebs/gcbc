@extends('front.master-pages')
@section('content')

		<!-- Begin Main -->
		<div role="main" class="main pgl-bg-grey">
			<!-- Begin page top -->
			<section class="page-top">
				<div class="container">
					<div class="page-top-in">
						<h2><span> Listed Properties</span></h2>
					</div>
				</div>
			</section>
			<!-- End page top -->
			
			
			<!-- Begin Featured -->
			<section class="pgl-featured">
				<div class="container">
					<h2>Featured Properties</h2>
					<div class="row">
						<div class="owl-carousel pgl-pro-slide" data-plugin-options='{"items": 4, "singleItem": false, "autoPlay": false, "pagination": false}'>
                            @foreach ($Featured as $featured)
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
					<hr class="top-tall">
				</div>
			</section>
			<!-- End Featured -->
			
			<!-- Begin Properties -->
			<section class="pgl-properties pgl-bg-grey">
				<div class="container">
					<h2>All Properties</h2>
					<div class="properties-full">
						{{-- <div class="listing-header clearfix">
							<ul class="list-inline list-icons pull-left">
								<li class="active"><a href="grid-fullwidth-4-column.html"><i class="fa fa-th"></i></a></li>
								<li><a href="list-fullwidth.html"><i class="fa fa-th-list"></i></a></li>
								<li><a href="list-map.html"><i class="fa fa-map-marker"></i></a></li>
							</ul>
							<ul class="list-inline list-sort pull-right">
								<li><label for="order-status">Order</label></li>
								<li>
									<select id="order-status" name="order-status" data-placeholder="Order" class="chosen-select">
										<option value="Descending">Descending</option>
										<option value="Ascending">Ascending</option>
									</select>
								</li>
								<li><label for="sortby-status">Sort by</label></li>
								<li>
									<select id="sortby-status" name="sortby-status" data-placeholder="Sort by" class="chosen-select">
										<option value="Name">Name</option>
										<option value="Area">Area</option>
										<option value="Date">Date</option>
									</select>
								</li>
							</ul>
						</div> --}}
						<div class="row">
                            @foreach ($Product as $item)
                            <div class="col-xs-4 animation">
								<div class="pgl-property">
									<div class="property-thumb-info">
										<div class="property-thumb-info-image">
											<img alt="" class="img-responsive" src="{{url('/')}}/uploads/product/{{$item->image_one}}">
											<span class="property-thumb-info-label">
												<span class="label price">KSH {{$item->price}}</span>
												<span class="label forrent">{{$item->type}}</span>
											</span>
										</div>
										<div class="property-thumb-info-content">
											<h3><a href="{{url('/')}}/property/{{$item->slung}}">{{$item->title}} - {{$item->name}}</a></h3>
											<address><i class="fa fa-map-marker"></i>  {{$item->location}}</address>
										</div>
										<div class="amenities clearfix">
                                            <ul class="pull-left">
                                                <li><strong>Area:</strong> {{$item->sqr}}<sup>m2</sup></li>
                                            </ul>
                                            <ul class="pull-right">
                                                <li><i class="icons icon-bedroom"></i> {{$item->br}} </li>
                                                <li><i class="icons icon-bathroom"></i>  {{$item->bath}}</li>
                                            </ul>
                                        </div>
									</div>
								</div>
							</div>
                            @endforeach
                           
						</div>
					
						<?php echo $Product ?>
					</div>
				</div>
			</section>
			<!-- End Properties -->
			
		</div>
		<!-- End Main -->

@endsection