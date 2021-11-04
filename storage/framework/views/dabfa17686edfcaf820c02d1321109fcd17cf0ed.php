<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="copyright-content center">
    <div class="container">
        <p>Copyright <i class="fa fa-copyright" aria-hidden="true"></i><?php echo e($Settings->sitename); ?> All Rights Reserved 
            <!-- | Powered By<a href="http://designekta.com/">  Designekta Studios</a>. -->
        </p>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/megapipe/gracecommunitybiblechurch.org/resources/views/front/copyrights_section.blade.php ENDPATH**/ ?>