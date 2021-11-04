<?php $__env->startSection('content'); ?>
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $About; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div style="min-height:124px"></div>


<div class="content">
	<div class="container">
	<hr>
		<h3>Ministry Philosophy</h3>
	<hr>
	</div>
        

   


    <section class="church_soft_services extra-center bg_none">
        <div class="container">
           
            <?php $About = DB::table('about')->get(); ?>
            <?php $__currentLoopData = $About; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!--church caption wrap start-->
                <div class="church_caption_wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                <div class="church_text">
                                    <h4 class="">
                                        <?php echo html_entity_decode($about->philosopy); ?>

                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!--church caption wrap ends-->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            
            
        </div>
    </section>


		
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master-pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/megapipe/gracecommunitybiblechurch.org/resources/views/front/philosophy.blade.php ENDPATH**/ ?>