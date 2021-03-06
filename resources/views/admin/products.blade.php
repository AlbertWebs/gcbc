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
                        <h2> All Products</h2>
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
                 
                 <!-- COMMENT AND NOTIFICATION  SECTION -->
                   <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    All Products
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Name</th>
                                                    <th>Category</th>
                                                    <th>Image</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($Product as $value)
                                                <tr class="odd gradeX">
                                                    <td>{{$value->id}}</td>
                                                    <td>{{$value->name}}
                                                    <hr>
                                                    Price : {{$value->price}} <br>
                                                    {{$value->location}}<br><hr>
                                                    @if($value->slider_area == 1)
                                                    <a href="{{url('/admin')}}/add_product_Slider/{{$value->id}}"   class="btn btn-info text-center"><i class="icon-exchange icon-white"></i> Remove From Slider</a>
                                                    @else 
                                                    <a href="{{url('/admin')}}/add_product_Slider/{{$value->id}}"   class="btn btn-success text-center"><i class="icon-exchange icon-white"></i> Add To Slider</a>
                                                    @endif

                                                    <hr>

                                                    @if($value->featured == 1)
                                                    <a href="{{url('/admin')}}/add_product_Featured/{{$value->id}}"   class="btn btn-info text-center"><i class="icon-exchange icon-white"></i> Remove From Featured</a>
                                                    @else 
                                                    <a href="{{url('/admin')}}/add_product_Featured/{{$value->id}}"   class="btn btn-success text-center"><i class="icon-exchange icon-white"></i> Add To Featured</a>
                                                    @endif

                                                    
                                                    
                                                    </td>
                                                    <td>
                                                        <?php
                                                            $CatID = $value->cat;
                                                            $TheCategory = DB::table('category')->where('id',$CatID)->get();
                                                            foreach ($TheCategory as $key => $valuee) {
                                                                echo $valuee->cat;
                                                            }
                                                        ?>
                                                    </td>
                                                    <td class="center"><img width="100%" height="200" src="{{url('/')}}/uploads/product/{{$value->image_one}}"></td>
                                                    <td class="center"><a href="{{url('/admin')}}/editProduct/{{$value->id}}"   class="btn btn-info"><i class="icon-pencil icon-white"></i> Edit</a></td>
                                                    <td class="center"><a onclick="return confirm('Do you want to delete this product?')" href="{{url('/admin')}}/deleteProduct/{{$value->id}}"   class="btn btn-danger"><i class="icon-trash icon-white"></i> Del</a></td>
                                                  
                                                </tr>
                                            @endforeach
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- END COMMENT AND NOTIFICATION  SECTION -->
                



                
            </div>

        </div>
        <!--END PAGE CONTENT -->

         <!-- RIGHT STRIP  SECTION -->
         @include('admin.right')
         <!-- END RIGHT STRIP  SECTION -->
    </div>

@endsection