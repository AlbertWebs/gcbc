@extends('front.master-pages')
@section('content')

	<!-- Begin Main -->
    <div role="main" class="main pgl-bg-grey">
        <!-- Begin page top -->
        <section class="page-top">
            <div class="container">
                <div class="page-top-in">
                    <h2><span>Terms & Conditions</span></h2>
                </div>
            </div>
        </section>
        <!-- End page top -->
        
        <!-- Begin content with sidebar -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 content">
                    @foreach ($Terms as $item)
                        <!-- Begin FAQs -->
                    <div class="panel-group pgl-group-faqs" id="accordion">
                        <div class="panel panel-default pgl-panel">
                            <div class="panel-heading">
                                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">{{$item->title}}</a> </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body"> 
                                    <p>{!!html_entity_decode($item->content)!!}</p>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                    <!-- End FAQs -->
                    @endforeach
                    
                    
                </div>
                
            </div>	
        </div>
        <!-- End content with sidebar -->
        
    </div>
    <!-- End Main -->

@endsection