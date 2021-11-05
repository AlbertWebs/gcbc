<footer>
  
    <div class="footer_board">
        <div class="container">
            <div class="background-logos">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer_detail">
                            <h4 class="footer_title">{{$Settings->sitename}}</h4>
                            <p>{!!html_entity_decode($Settings->welcome)!!}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer_blog">
                            <h4 class="footer_title">Events & News</h4>
                            <?php $Blog = DB::table('blogs')->limit(2)->get(); $Count = 1; ?>
                            @foreach ($Blog as $item)
                            <div class="footer_blog_post @if($Count == 1) padding-top-0 @else @endif">
                                <figure>
                                    <img style="width:70px; height:56px;" src="{{url('/')}}/uploads/blogs/{{$item->image_one}}" alt="">
                                </figure>
                                <div class="footer-post-content">
                                    <a href="{{url('/')}}/news-and-events/{{$item->slung}}">{{$item->title}}</a>
                                    {{-- Process Time --}}
                                    <?php 
                                        if($item->event == 1){
                                            $RawDate = $item->date;
                                        }else{
                                            $RawDate = $item->created_at;   
                                        }
                                        
                                        $FormatDate = strtotime($RawDate);
                                        $Month = date('M',$FormatDate);
                                        $Date = date('d',$FormatDate);
                                        $Year = date('Y',$FormatDate);

                                    ?>
                                    <span><i class="fa fa-clock-o" aria-hidden="true"></i>{{$Date}} {{$Month}} {{$Year}}</span>
                                </div>
                            </div>
                            <?php $Count = $Count+1; ?> 
                            @endforeach
                            
                         
                        </div>
                    </div> 
                    <div class="col-md-4">
                        <div class="footer_blog">
                            <h4 class="footer_title">Our Address</h4>
                            <p>{{$Settings->sitename}}</p>
                            <span><i class="fa fa-envelope" aria-hidden="true"></i>{{$Settings->email}}</span>
                            <span><i class="fa fa-map-marker" aria-hidden="true"></i>{{$Settings->location}}</span>
                            <span><i class="fa fa-book" aria-hidden="true"></i>{{$Settings->address}}</span>
                            <span><i class="fa fa-phone" aria-hidden="true"></i>{{$Settings->mobile}} | {{$Settings->mobile_one}}</span>
                        </div>
                        {{--  --}}
                        
                        <div class="widget_social">
                            <br> <br>
                            <ul>
                                {{-- <li><a class="orange" href="{{$Settings->twitter}}"><span><i class="fa fa-twitter"></i></span>RSS feed</a></li> --}}
                                <li><a class="blue_light" href="{{$Settings->twitter}}"><span><i class="fa fa-twitter"></i></span>follow us</a></li>
                                <li><a class="blue" href="{{$Settings->twitter}}"><span><i class="fa fa-facebook"></i></span>Like us</a></li>
                                <li><a class="pink" href="{{$Settings->instagram}}"><span><i class="fa fa-instagram"></i></span>follow us</a></li>
                                {{-- <li><a class="pink" href="#"><span><i class="fa fa-twitter"></i></span>follow us</a></li> --}}
                                <li><a class="red" href="{{$Settings->youtube}}"><span><i class="fa fa-youtube"></i></span>Youtube</a></li>
                            </ul>
                        </div>
                        {{--  --}}
                    </div>       
                </div>
            </div>
            <hr>
            {{-- <div class="footer_twitter">
                <span><i class="fa fa-twitter" aria-hidden="true"></i></span>
                <div class="footer_twitter_caption">
                    <p>Proin dapibus dapibus nunc, sit amet scelerisque est imperdiet tristique. Sed lobortis metus ut consequat,.<a href="#">pikdfjsoamjdh</a></p>
                    <small>2 Hours Ago</small>
                </div>
                <div class="pull-right"><a href="#" class="default_btn black-bg_btn">Follow us</a></div>
            </div> --}}
          
        </div>
        

    </div>
</footer>