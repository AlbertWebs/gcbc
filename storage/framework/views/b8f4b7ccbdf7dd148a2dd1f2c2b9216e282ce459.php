<?php $__env->startSection('content'); ?>
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div style="min-height:124px"></div>


<div class="content">
	<div class="container">
	<hr>
		<h3>Our Ministries</h3>
	<hr>
	</div>
        

       
			<section>
				<div class="container">
					<div class="row" style="margin:0 auto !important">
                        <?php $__currentLoopData = $Ministries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Ministry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="col-md-4 col-sm-6 col-xs-12" style="margin:0 auto !important">
							<div class="church_causes_columns">
                                <figure>
                                    <img style="height:280px;" src="<?php echo e(url('/')); ?>/uploads/ministries/<?php echo e($Ministry->image); ?>" alt="">
                                </figure>
                                <div class="church_blog_content">
                                    <div class="church_causes2_caption">
	                                    <h4><a href="<?php echo e(url('/')); ?>/ministries/<?php echo e($Ministry->slung); ?>"><?php echo e($Ministry->title); ?></a></h4>
	                                    <p style="min-height: 150px;"><?php echo e($Ministry->meta); ?></p>
                                    </div>
                                </div>
                            </div>
						</div>	
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</div>
			</section>

      
		</div>



 

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master-pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/megapipe/gracecommunitybiblechurch.org/resources/views/front/ministries.blade.php ENDPATH**/ ?>