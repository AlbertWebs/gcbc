<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-md-3">
    <div class="widget_sidebar">
        <div class="widget_categories">
            <h5 class="widget_tittle">Sermons</h5>
            <ul>
                <?php $Sermons = DB::table('sermons')->limit(10)->get(); ?>
                <?php $__currentLoopData = $Sermons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Sermons): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php 
                    $RawDate = $Sermons->created_at;
                    $FormatDate = strtotime($RawDate);
                    $Month = date('M',$FormatDate);
                    $Date = date('d',$FormatDate);
                    $Dates = date('D',$FormatDate);
                    $Year = date('Y',$FormatDate);

                ?>
                <li><a href="<?php echo e(url('/')); ?>/our-sermons"><?php echo e($Sermons->title); ?>  (<?php echo e($Date); ?>,<?php echo e($Month); ?>, <?php echo e($Year); ?>)</a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
            </ul>
        </div>
        
        <div class="widget_social">
            <h5 class="widget_tittle">Social Widget</h5>
            <ul>
                
                <li><a class="blue_light" href="<?php echo e($Settings->twitter); ?>"><span><i class="fa fa-twitter"></i></span>follow us</a></li>
                <li><a class="blue" href="<?php echo e($Settings->twitter); ?>"><span><i class="fa fa-facebook"></i></span>Like us</a></li>
                <li><a class="pink" href="<?php echo e($Settings->instagram); ?>"><span><i class="fa fa-instagram"></i></span>follow us</a></li>
                
                <li><a class="red" href="<?php echo e($Settings->youtube); ?>"><span><i class="fa fa-youtube"></i></span>Youtube</a></li>
            </ul>
        </div>
      
       
        
     
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/designekta/gcbc/resources/views/blog/sidebar.blade.php ENDPATH**/ ?>