<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
@foreach ($SiteSettings as $Settings)
<div class="copyright-content center">
    <div class="container">
        <p>Copyright <i class="fa fa-copyright" aria-hidden="true"></i>{{$Settings->sitename}} All Rights Reserved 
            <!-- | Powered By<a href="http://designekta.com/">  Designekta Studios</a>. -->
        </p>
    </div>
</div>
@endforeach