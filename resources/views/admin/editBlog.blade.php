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
                        <h2> {{$Blog->title}} </h2>
                        {{-- <p>{{$Blog->title}}</p> --}}
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
                 

                 <form class="form-horizontal" method="post"  action="{{url('/admin/edit_Blog')}}/{{$Blog->id}}" enctype="multipart/form-data">
                    
                <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Property Title</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="title" value="{{$Blog->title}}" placeholder="e.g 2 Bedroom Houses Master Ensuite" class="form-control" />
                        </div>
                </div>

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Date</label>

                    <div class="col-lg-8">
                        <input type="date" id="text1" name="date" value="{{$Blog->date}}" class="form-control" />
                    </div>
                </div>


                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Video</label>

                    <div class="col-lg-8">
                        <input type="text" id="text1" name="video" value="{{$Blog->video}}" placeholder="e.g FUR2SWJDlyE" class="form-control" />
                    </div>
                </div>
                @if($Blog->video == null)

                @else 
                <iframe width="100%" height="315"
                src="https://www.youtube.com/embed/{{$Blog->video}}">
                </iframe>
                @endif

                  
                <div class="form-group">
                    <label for="limiter" class="control-label col-lg-4">Meta Data</label>

                    <div class="col-lg-8">
                        <textarea id="limiter" name="meta" class="form-control">{{$Blog->meta}}</textarea>
                        <p class="help-block">Briefly Describe The Property</p>
                    </div>
                </div>
                    

                <div class="form-group">
                    <label class="control-label col-lg-4">Category</label>

                    
                        

                    <div class="col-lg-8">
                        <select name="category" data-placeholder="Choose Category" class="form-control chzn-select" tabindex="2">
                            <?php $Feetch = DB::table('category')->where('id',$Blog->cat)->get() ?>
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
                        <label class="control-label col-lg-4">Author</label>
    
                        
                            
    
                        <div class="col-lg-8">
                            <select name="agent" data-placeholder="Choose Agent" class="form-control chzn-select" tabindex="2">
                               <?php $Feetch = DB::table('admins')->where('id',$Blog->agent)->get() ?>
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

                        {{--  --}}
                        <div class="form-group">
                            <label class="control-label col-lg-4">Blog/Event</label>
        
                            
                                
        
                            <div class="col-lg-8">
                                <select name="event" data-placeholder="Choose Category" class="form-control chzn-select" tabindex="2">
                                  
                                   
                                    @if($Blog->event == 1)
                                    <option selected value="1">Event</option>
                                    @else 
                                    <option selected value="0">Blog</option>
                                    @endif
                                      <option value="0">Blog</option>
                                      <option value="1">Event</option>
        
                                </select>
                            </div>
                        </div>
        
                        <div class="form-group">
                            <label class="control-label col-lg-4">Registration</label>
        
                            
                                
        
                            <div class="col-lg-8">
                                <select name="registration" data-placeholder="Choose Category" class="form-control chzn-select" tabindex="2">
                                    @if($Blog->registration == 1)
                                    <option selected value="1">Active</option>
                                    @else 
                                    <option selected value="0">Inactive</option>
                                    @endif
                                   
                                      <option value="0">Inactive</option>
                                      <option value="1">Active</option>
        
                                </select>
                            </div>
                        </div>

                        {{--  --}}

          
                        <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                    <h5>Blog Description</h5>
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
                                    
                                        <textarea name="content" id="wysihtml5" class="form-control" rows="10">{{$Blog->content}}</textarea>

                                    
                                </div>
                            </div>
                        </div>
                   
                    <center>
               

                        <div class="form-group col-lg-4">
                            <label class="control-label"> Image 1 (555 by 306)</label>
                            <div class="">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('/')}}/uploads/blogs/{{$Blog->image_one}}" alt="" /></div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image_one" type="file" /></span>
                                        <!--  -->
                                        {{-- <a href="{{url('/')}}/admin/deleteImage/{{$Blog->id}}/image_one/product" class="btn btn-file btn-danger"><span class="fileupload-new">Delete Image</span></a> --}}
                                        <!--  -->
                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group col-lg-4">
                            <label class="control-label"> Image 2 (555 by 306)</label>
                            <div class="">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('/')}}/uploads/blogs/{{$Blog->image_two}}" alt="" /></div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image_two" type="file" /></span>
                                        <!--  -->
                                        {{-- <a href="{{url('/')}}/admin/deleteImage/{{$Blog->id}}/image_two/product" class="btn btn-file btn-danger"><span class="fileupload-new">Delete Image</span></a> --}}
                                        <!--  -->
                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-lg-4">
                            <label class="control-label"> Image 3 (555 by 306)</label>
                            <div class="">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('/')}}/uploads/blogs/{{$Blog->image_three}}" alt="" /></div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image_three" type="file" /></span>
                                        <!--  -->
                                        {{-- <a href="{{url('/')}}/admin/deleteImage/{{$Blog->id}}/image_three/product" class="btn btn-file btn-danger"><span class="fileupload-new">Delete Image</span></a> --}}
                                        <!--  -->
                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-lg-4">
                            <label class="control-label"> Image 4 (555 by 306)</label>
                            <div class="">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('/')}}/uploads/blogs/{{$Blog->image_four}}" alt="" /></div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image_four" type="file" /></span>
                                        <!--  -->
                                        {{-- <a href="{{url('/')}}/admin/deleteImage/{{$Blog->id}}/image_four/product" class="btn btn-file btn-danger"><span class="fileupload-new">Delete Image</span></a> --}}
                                        <!--  -->
                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-lg-4">
                            <label class="control-label"> Image 5 (555 by 306)</label>
                            <div class="">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('/')}}/uploads/blogs/{{$Blog->image_five}}" alt="" /></div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image_five" type="file" /></span>
                                        <!--  -->
                                        {{-- <a href="{{url('/')}}/admin/deleteImage/{{$Blog->id}}/image_five/product" class="btn btn-file btn-danger"><span class="fileupload-new">Delete Image</span></a> --}}
                                        <!--  -->
                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                     
                    
                   
                   

                    
                    </div>
                    </center>
                
                    <input type="hidden" name="image_one_cheat" value="{{$Blog->image_one}}">
                    <input type="hidden" name="image_two_cheat" value="{{$Blog->image_two}}">
                    <input type="hidden" name="image_three_cheat" value="{{$Blog->image_three}}">
                    <input type="hidden" name="image_four_cheat" value="{{$Blog->image_four}}">
                    <input type="hidden" name="image_five_cheat" value="{{$Blog->image_five}}">
                 

                    <br><br>
                    <div class="col-lg-12 text-center">
                      <button type="submit" class="btn btn-success"><i class="icon-check icon-white"></i> Save Changes </button>
                    </div>
                    
                    
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                <form>
                    <br><br><br><br>
           
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