<?php $__env->startSection('content'); ?>
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div style="min-height:124px"></div>
<div class="content">
    <div class="container">
    <hr>
        <h3>Sermons</h3>
    <hr>
    </div>
        
        <section>
            <div class="container">
                <div class="row">
                    <?php $__currentLoopData = $Sermons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sermons): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="church_causes_columns">
                            <?php if($sermons->video == null): ?>
                            <figure>
                                
                                <img  src="<?php echo e(url('/')); ?>/uploads/sermons/<?php echo e($sermons->image); ?>" alt="">
                                
                            </figure>
                            <?php else: ?>
                            
                                <iframe width="300" height="349" src="https://www.youtube.com/embed/<?php echo e($sermons->video); ?>?rel=0&hd=1" frameborder="0" allowfullscreen></iframe>
                            
                            <?php endif; ?>
                            <div class="church_blog_content">
                                <div class="church_causes2_caption">
                                    <h4><a href="#"><?php echo e($sermons->title); ?></a></h4>
                                    <p><?php echo e($sermons->meta); ?></p>
                                </div>
                                <?php if($sermons->audio == null): ?>

                                <?php else: ?>
                                <div class="chu_progress_causes">
                                    <div class="skillbar1 clearfix" data-percent="20%">
                                        <audio
                                            controls
                                            src="<?php echo e($sermons->audio); ?>">
                                                Your browser does not support the
                                                <code>audio</code> element.
                                        </audio> 
                                    </div>
                                </div>
                                <?php endif; ?>
                                <div class="chu-detail_donars">
                                    <ul class="donars_right">
                                        <li><small><?php echo e($sermons->books); ?></small></li>
                                        <li><small><?php $Admin = App\Admin::find($sermons->author) ?> <?php echo e($Admin->name); ?></small></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>	
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>

        

        

       
    </div>
	
	

	</div> 

			
		</div>
        <!-- End Main -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master-pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/designekta/gcbc/resources/views/front/sermons.blade.php ENDPATH**/ ?>