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
                        <h2> Edit: {{$Ministry->title}} </h2>
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
                 

                 <form class="form-horizontal" method="post"  action="{{url('/admin/edit_Ministry')}}/{{$Ministry->id}}" enctype="multipart/form-data">
                    
                <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Ministry Title</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="title" value="{{$Ministry->title}}" placeholder="e.g Youth Ministry" class="form-control" />
                        </div>
                </div>

                        
        
               

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Video</label>

                    <div class="col-lg-8">
                        <input type="text" id="text1" name="video" value="{{$Ministry->video}}" placeholder="e.g FUR2SWJDlyE" class="form-control" />
                    </div>
                </div>

                  
                <div class="form-group">
                    <label for="limiter" class="control-label col-lg-4">Meta Data</label>

                    <div class="col-lg-8">
                        <textarea id="limiter" name="meta" class="form-control">{{$Ministry->meta}}</textarea>
                        <p class="help-block">Briefly Describe The Ministry</p>
                    </div>
                </div>
      
                        <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                    <h5>Ministry Description</h5>
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
                                    
                                        <textarea name="content" id="wysihtml5" class="form-control" rows="10">{{$Ministry->content}}</textarea>

                                    
                                </div>
                            </div>
                        </div>
                   
                    <center>
                        <div class="form-group col-lg-12">
                            

                            <div class="form-group col-lg-12">
                                <label class="control-label"> Image 1 (555 by 306)</label>
                                <div class="">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('/')}}/uploads/ministries/{{$Ministry->image}}" alt="" /></div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        <div>
                                            <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image_one" type="file" /></span>
                                            <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            
                        </div>
                    </center>
                    <br><br>
                    <div class="col-lg-12 text-center">
                      <button type="submit" class="btn btn-success"><i class="icon-plus icon-white"></i> Save Changes</button>
                    </div>
                  
                    <input type="hidden" name="image_one_cheat" value="{{$Ministry->image}}">
                    <input type="hidden" name="image_file_cheat" value="{{$Ministry->file}}">
                    
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