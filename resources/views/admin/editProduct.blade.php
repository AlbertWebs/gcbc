@extends('admin.master')

@section('content')
<div id="wrap" >
        

        <!-- HEADER SECTION -->
        @include('admin.top')
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
        @include('admin.left')
        <!--END MENU SECTION -->



        <!--PAGE CONTENT -->
        <div id="content">
             
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2> {{$Product->name}} </h2>
                        <p>{{$Product->title}}</p>
                    </div>
                </div>
                  <hr />
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
                        @include('admin.panel')

                    </div>

                </div>
                  <!--END BLOCK SECTION -->
                <hr />
                  
               
                  <!-- Inner Content Here -->
                 
            <div class="inner">
                

              <div class="row">
               <center>
                 @if(Session::has('message'))
							   <div class="alert alert-success">{{ Session::get('message') }}</div>
				@endif

                @if(Session::has('messageError'))
							   <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
				@endif
                 </center>
                 

                 <form class="form-horizontal" method="post"  action="{{url('/admin/edit_Product')}}/{{$Product->id}}" enctype="multipart/form-data">
                    
                <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Property Title</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="title" value="{{$Product->title}}" placeholder="e.g 2 Bedroom Houses Master Ensuite" class="form-control" />
                        </div>
                </div>

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Property Name</label>

                    <div class="col-lg-8">
                        <input type="text" id="text1" name="name" value="{{$Product->name}}" placeholder="e.g Burito Appartments" class="form-control" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Price</label>

                    <div class="col-lg-8">
                        <input type="text" id="text1" name="price" value="{{$Product->price}}" placeholder="e.g 120000" class="form-control" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Location</label>

                    <div class="col-lg-8">
                        <input type="text" id="text1" name="location" value="{{$Product->location}}" placeholder="e.g Langata" class="form-control" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Video(Youtube Virtual Tour)</label>

                    <div class="col-lg-8">
                        <input type="text" id="text1" name="video" value="{{$Product->video}}" placeholder="e.g FUR2SWJDlyE" class="form-control" />
                    </div>
                </div>
                @if($Product->video == null)

                @else 
                <iframe width="100%" height="315"
                src="https://www.youtube.com/embed/{{$Product->video}}">
                </iframe>
                @endif

                  
                <div class="form-group">
                    <label for="limiter" class="control-label col-lg-4">Meta Data</label>

                    <div class="col-lg-8">
                        <textarea id="limiter" name="meta" class="form-control">{{$Product->meta}}</textarea>
                        <p class="help-block">Briefly Describe The Property</p>
                    </div>
                </div>
                    

                <div class="form-group">
                    <label class="control-label col-lg-4">Category</label>

                    
                        

                    <div class="col-lg-8">
                        <select name="category" data-placeholder="Choose Category" class="form-control chzn-select" tabindex="2">
                            <?php $Feetch = DB::table('category')->where('id',$Product->cat)->get() ?>
                            @foreach ($Feetch as $item)
                            <option selected value="{{$item->id}}">{{$item->cat}}</option>
                            @endforeach
                           <?php $TheCategoryList = DB::table('category')->get(); ?>
                           @foreach($TheCategoryList as $value)
                              <option value="{{$value->id}}">{{$value->cat}}</option>
                           @endforeach

                        </select>
                    </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Agent</label>
    
                        
                            
    
                        <div class="col-lg-8">
                            <select name="agent" data-placeholder="Choose Agent" class="form-control chzn-select" tabindex="2">
                               <?php $Feetch = DB::table('admins')->where('id',$Product->agent)->get() ?>
                               @foreach ($Feetch as $item)
                               <option selected value="{{$item->id}}">{{$item->name}}</option>
                               @endforeach
                               <?php $TheCategoryList = DB::table('admins')->get(); ?>
                               @foreach($TheCategoryList as $value)
                                  <option value="{{$value->id}}">{{$value->name}}</option>
                               @endforeach
    
                            </select>
                        </div>
                        </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Rent/Sale </label> 
                        
                            
    
                        <div class="col-lg-8">
                            <select name="type" data-placeholder="Choose Instructor" class="form-control chzn-select" tabindex="2">
                              
                                
                                <option value="{{$Product->type}}">{{$Product->type}}</option>
                                  <option value="Rent">Rent</option>
                                  <option value="Sale">Sale</option>
                                  <option value="Sold">Sold</option>
                             
    
                            </select>
                        </div>
                        </div>

                        <div class="form-group ">
                            <label for="text1" class="control-label col-lg-4">Metrics(Bedrooms, Bathrooms Area)</label>
        
                            <div class="col-lg-2">
                                <input type="number" id="text1" name="br" value="{{$Product->br}}" placeholder="e.g 1" class="form-control" />
                            </div>
                            <div class="col-lg-2">
                                <input type="number" id="text1" name="bath" value="{{$Product->bath}}" placeholder="e.g 1" class="form-control" />
                            </div>
                            <div class="col-lg-4">
                                <input type="number" id="text1" name="sqr" value="{{$Product->sqr}}" placeholder="e.g 450 sqr" class="form-control" />
                            </div>
                        </div>

                     
                        <div class="form-group">
                            <label for="limiter" class="control-label col-lg-4">Embeded Map</label>
        
                            <div class="col-lg-8">
                                <textarea  name="map" class="form-control">{{$Product->map}}</textarea>
                                <p class="help-block">Paste Embeded Map</p>
                            </div>
                        </div>
          
                        <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                    <h5>Property Description</h5>
                                    <ul class="nav pull-right">
                                        <li>
                                            <div class="btn-group">
                                                <a class="accordion-toggle btn btn-xs minimize-box" data-toggle="collapse"
                                                    href="#div-1">
                                                    <i class="icon-minus"></i>
                                                </a>
                                                 <button class="btn btn-danger btn-xs close-box">
                                                    <i
                                                        class="icon-remove"></i>
                                                </button>
                                            </div>
                                        </li>
                                    </ul>
                                </header>
                                <div id="div-1" class="body collapse in">
                                    
                                        <textarea name="content" id="wysihtml5" class="form-control" rows="10">{{$Product->content}}</textarea>

                                    
                                </div>
                            </div>
                        </div>
                   
                    <center>
                    <div class="form-group col-lg-12">
                        <div class="form-group col-lg-12">
                            <label class="control-label">Slider Image (2200 by 800)</label>
                            <div class="">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('/')}}/uploads/product/{{$Product->slider}}" alt="" /></div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="slider" type="file" /></span>
                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-lg-4">
                            <label class="control-label"> Image 1 (360 by 240)</label>
                            <div class="">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('/')}}/uploads/product/{{$Product->image_one}}" alt="" /></div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image_one" type="file" /></span>
                                        <!--  -->
                                        <a href="{{url('/')}}/admin/deleteImage/{{$Product->id}}/image_one/product" class="btn btn-file btn-danger"><span class="fileupload-new">Delete Image</span></a>
                                        <!--  -->
                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group col-lg-4">
                            <label class="control-label"> Image 2 (360 by 240)</label>
                            <div class="">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('/')}}/uploads/product/{{$Product->image_two}}" alt="" /></div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image_two" type="file" /></span>
                                        <!--  -->
                                        <a href="{{url('/')}}/admin/deleteImage/{{$Product->id}}/image_two/product" class="btn btn-file btn-danger"><span class="fileupload-new">Delete Image</span></a>
                                        <!--  -->
                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-lg-4">
                            <label class="control-label"> Image 3 (360 by 240)</label>
                            <div class="">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('/')}}/uploads/product/{{$Product->image_three}}" alt="" /></div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image_three" type="file" /></span>
                                        <!--  -->
                                        <a href="{{url('/')}}/admin/deleteImage/{{$Product->id}}/image_three/product" class="btn btn-file btn-danger"><span class="fileupload-new">Delete Image</span></a>
                                        <!--  -->
                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-lg-4">
                            <label class="control-label"> Image 4 (360 by 240)</label>
                            <div class="">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('/')}}/uploads/product/{{$Product->image_four}}" alt="" /></div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image_four" type="file" /></span>
                                        <!--  -->
                                        <a href="{{url('/')}}/admin/deleteImage/{{$Product->id}}/image_four/product" class="btn btn-file btn-danger"><span class="fileupload-new">Delete Image</span></a>
                                        <!--  -->
                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-lg-4">
                            <label class="control-label"> Image 5 (360 by 240)</label>
                            <div class="">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('/')}}/uploads/product/{{$Product->image_five}}" alt="" /></div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image_five" type="file" /></span>
                                        <!--  -->
                                        <a href="{{url('/')}}/admin/deleteImage/{{$Product->id}}/image_five/product" class="btn btn-file btn-danger"><span class="fileupload-new">Delete Image</span></a>
                                        <!--  -->
                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-lg-4">
                            <label class="control-label"> Image 6 (360 by 240)</label>
                            <div class="">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('/')}}/uploads/product/{{$Product->image_six}}" alt="" /></div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image_six" type="file" /></span>
                                        <!--  -->
                                        <a href="{{url('/')}}/admin/deleteImage/{{$Product->id}}/image_six/product" class="btn btn-file btn-danger"><span class="fileupload-new">Delete Image</span></a>
                                        <!--  -->
                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-lg-4">
                            <label class="control-label"> Image 7 (360 by 240)</label>
                            <div class="">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('/')}}/uploads/product/{{$Product->image_seven}}" alt="" /></div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image_seven" type="file" /></span>
                                        <!--  -->
                                        <a href="{{url('/')}}/admin/deleteImage/{{$Product->id}}/image_seven/product" class="btn btn-file btn-danger"><span class="fileupload-new">Delete Image</span></a>
                                        <!--  -->
                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-lg-4">
                            <label class="control-label"> Image 8 (360 by 240)</label>
                            <div class="">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('/')}}/uploads/product/{{$Product->image_eight}}" alt="" /></div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image_eight" type="file" /></span>
                                        <!--  -->
                                        <a href="{{url('/')}}/admin/deleteImage/{{$Product->id}}/image_eight/product" class="btn btn-file btn-danger"><span class="fileupload-new">Delete Image</span></a>
                                        <!--  -->
                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-lg-4">
                            <label class="control-label"> Image 9 (360 by 240)</label>
                            <div class="">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('/')}}/uploads/product/{{$Product->image_nine}}" alt="" /></div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image_nine" type="file" /></span>
                                        <!--  -->
                                        <a href="{{url('/')}}/admin/deleteImage/{{$Product->id}}/image_nine/product" class="btn btn-file btn-danger"><span class="fileupload-new">Delete Image</span></a>
                                        <!--  -->
                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="form-group col-lg-12">
                            <label class="control-label"> Image 10 (360 by 240)</label>
                            <div class="">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('/')}}/uploads/product/{{$Product->image_ten}}" alt="" /></div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image_ten" type="file" /></span>
                                        <!--  -->
                                        <a href="{{url('/')}}/admin/deleteImage/{{$Product->id}}/image_ten/product" class="btn btn-file btn-danger"><span class="fileupload-new">Delete Image</span></a>
                                        <!--  -->
                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                   
                   

                    
                    </div>
                    </center>
                    <input type="hidden" name="image_one_cheat" value="{{$Product->image_one}}">
                    <input type="hidden" name="image_two_cheat" value="{{$Product->image_two}}">
                    <input type="hidden" name="image_three_cheat" value="{{$Product->image_three}}">
                    <input type="hidden" name="image_four_cheat" value="{{$Product->image_four}}">
                    <input type="hidden" name="image_five_cheat" value="{{$Product->image_five}}">
                    <input type="hidden" name="image_six_cheat" value="{{$Product->image_six}}">
                    <input type="hidden" name="image_seven_cheat" value="{{$Product->image_seven}}">
                    <input type="hidden" name="image_eight_cheat" value="{{$Product->image_eight}}">
                    <input type="hidden" name="image_nine_cheat" value="{{$Product->image_nine}}">
                    <input type="hidden" name="image_ten_cheat" value="{{$Product->image_ten}}">
                    <input type="hidden" name="slider_cheat" value="{{$Product->slider}}">

                    <br><br>
                    <div class="col-lg-12 text-center">
                      <button type="submit" class="btn btn-success"><i class="icon-check icon-white"></i> Save Changes </button>
                    </div>
                    
                    
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                <form>
                    <br><br><br><br>
              </div>

            </div>
                  <!-- Inner Content Ends Here -->



                
            </div>

        </div>
        <!--END PAGE CONTENT -->

         <!-- RIGHT STRIP  SECTION -->
        @include('admin.right')
         <!-- END RIGHT STRIP  SECTION -->
    </div>

@endsection