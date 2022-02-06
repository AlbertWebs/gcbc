<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
@foreach ($SiteSettings as $Settings)
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{{$title}}</title>

    {{--  --}}
    <meta name="description" content="Grace Community Bible Church is" />
    <meta name="keywords" content="Grace Community Bible Church" />
    <meta name="author" content="Grace Community Bible Church" />
    <link rel="canonical" href="https://gracecommunitybiblechurch.org/"/>


    <meta property="og:description" content="Grace Community Bible Church (GCBC) is a Southern Baptist church in affiliation and in doctrine. This ministry operates in partnership with the Baptist Convention of Kenya, yet we are ready to work with other like-minded churches in the area. - Grace Community Bible Church">
    <meta property="og:image" content="https://gracecommunitybiblechurch.org/uploads/logo/GCBC LOGO D-01.png" />
    <meta property="og:image:secure_url" content="https://gracecommunitybiblechurch.org/uploads/logo/GCBC LOGO D-01.png">
    <meta property="og:title" content="Grace Community Bible Church - The Bible is ultimately authoritative in the life of the believer and the church. This leads us to a commitment to Bible exposition in all our ministries, whether for adults, youth, or even children." />
    <meta property="og:url" content="https://gracecommunitybiblechurch.org/" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Grace Community Bible Church" />
    {{--  --}}

    <!-- Bootstrap -->
    <link href="{{asset('theme/css/bootstrap.css')}}" rel="stylesheet">
    <!-- Font-awesome -->
    <link href="{{asset('theme/css/font-awesome.css')}}" rel="stylesheet">
    <!-- Slick Slider -->
    <link href="{{asset('theme/css/slick.css')}}" rel="stylesheet">
    <link href="{{asset('theme/css/fancy_slider.css')}}" rel="stylesheet">
    <!-- audio.css -->
    <link href="{{asset('theme/css/audio.css')}}" rel="stylesheet">
    <!-- Typography -->
    <link href="{{asset('theme/css/typography.css')}}" rel="stylesheet">
    <!-- widget.css -->
    <link href="{{asset('theme/css/widget.css')}}" rel="stylesheet">
    <!-- svg-icons.css -->
    <link href="{{asset('theme/css/svg-icons.css')}}" rel="stylesheet">
    <!-- component-responsive.css -->
    <link href="{{asset('theme/css/responsive.css')}}" rel="stylesheet">
    <!-- shortcodes.css -->
    <link href="{{asset('theme/css/shortcodes.css')}}" rel="stylesheet">
    <!-- colors.css -->
    <link href="{{asset('theme/css/colors.css')}}" rel="stylesheet">
    <!-- style.css -->
    <link href="{{asset('theme/style.css')}}" rel="stylesheet">

  </head>
  <body class="bg_none padding_none">

    <!--church wrapper-->
    <div class="wrapper">
       @include('front.menus')




        @yield('content')
        @include('front.footer')

	    @include('front.copyrights_section')

        <!--video deta-->
        <div id="v1" class="videos_play_modal modal fade" role="dialog">
            <div class="modal-dialog">
            <!-- Modal content-->
                <div class="modal-content">
                    <div class="default_vides_playblack">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <iframe height="315" src="https://www.youtube.com/embed/VJTAjonuAiU?ecver=1&amp;autoplay=0&amp;controls=1&amp;loop=1&amp;playlist=8HSr8BjcufM&amp;showinfo=0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
	</div>
    <!--church wrapper ends-->


    <!-- jquery javascript-->
    <script src="{{asset('theme/js/jquery.js')}}"></script>
    <!-- Bootstrap script-->
    <script src="{{asset('theme/js/bootstrap.js')}}"></script>
    <!-- modernizr script-->
    <script src="{{asset('theme/js/modernizr.js')}}"></script>
    <!-- responsive-jquery script-->
    <script src="{{asset('theme/js/responsive-jquery.js')}}"></script>
    <!-- Slick Slider script-->
    <script src="{{asset('theme/js/slick.js')}}"></script>
    <script src="{{asset('theme/js/slider_fancy.js')}}"></script>
    <script src="{{asset('theme/js/accordian.js')}}"></script>
	<!-- Audio script-->
    <script src="{{asset('theme/js/audio.js')}}"></script>
    <!-- Custom scripts-->
    <script src="{{asset('theme/js/custom.js')}}"></script>

    <script>

    </script>
  </body>

</html>
@endforeach
