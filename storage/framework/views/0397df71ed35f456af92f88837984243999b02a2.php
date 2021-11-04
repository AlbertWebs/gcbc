<?php $__env->startSection('content'); ?>
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

	<!--sab banner start-->
	<div class="sab_banner_wrap overlay">
		<div class="sub_slider">
			<div class="banner_slide">
				<img src="<?php echo e(asset('theme/images/sab-banner-bg.png')); ?>" alt="">
			</div>
			<div class="banner_slide">
				<img src="<?php echo e(asset('theme/images/sab-banner-bg.png')); ?>" alt="">
			</div>
			<div class="banner_slide">
				<img src="<?php echo e(asset('theme/images/sab-banner-bg.png')); ?>" alt="">
			</div>
		</div>
		<div class="container">
			<div class="sab_banner_text">
				<h3>News & Events</h3>
				<ul class="breadcrumb">
				  <li class="active">News & Events</li>
				</ul>
				<div class="banner_dots">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</div>
	</div>
	<!--sab banner end-->



    <div class="content">
        <!--church blog detail wrap start-->
        <div class="church_blog_detail_wrap wrap_2">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">

                        <?php $__currentLoopData = $Blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <!--ch blog detail row start-->
                        <div class="ch_blog_detail_row post-margin">
                            <!--church blog detail text start-->
                            <div class="church_blog_detail_text">
                                <?php 
                                if($Blog->event == 1){
                                    $RawDate = $Blog->date;
                                }else{
                                    $RawDate = $Blog->created_at;
                                }
                                    
                                    $FormatDate = strtotime($RawDate);
                                    $Month = date('M',$FormatDate);
                                    $Date = date('d',$FormatDate);
                                    $Dates = date('D',$FormatDate);
                                    $Year = date('Y',$FormatDate);

                                ?>
                                <figure>
                                    <img style="max-height:400px" src="<?php echo e(url('/')); ?>/uploads/blogs/<?php echo e($Blog->image_one); ?>" alt="">
                                    <div class="box_span">
                                        <span class="date"><?php echo e($Date); ?><b><?php echo e($Month); ?></b></span>
                                        <a href="<?php echo e(url('/')); ?>/news-and-events/<?php echo e($Blog->slung); ?>" class="date"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                                    </div>
                                </figure>
                                <h3 class="custom-font-30px"><?php echo e($Blog->title); ?></h3>
                                <ul class="church_meta_date meta_2 meta_3">
                                    <li><a href="#">By <?php $Admin = App\Admin::find($Blog->author) ?> <?php echo e($Admin->name); ?>.</a></li>
                                    <li><a href="#"><?php echo e($Dates); ?>, <?php echo e($Month); ?> <?php echo e($Date); ?>, <?php echo e($Year); ?>  </a></li>
                               
                                </ul>
                                <p><i><blockquote><?php echo e($Blog->meta); ?></blockquote></i></p>
                                <br>
                                <hr>
                                <p><?php echo html_entity_decode($Blog->content); ?></p>
                                <br>
                                <?php if($Blog->registration == 0): ?>

                                <?php else: ?>
                                <?php if($Blog->link == null): ?>
                                <a href="<?php echo e(url('/')); ?>/registration/<?php echo e($Blog->slung); ?>" class="default_btn theme-bg_btn">Register Now</a>
                                <?php else: ?>
                                <a target="new" href="<?php echo e($Blog->link); ?>" class="default_btn theme-bg_btn">Register Now</a>
                                <?php endif; ?>
                                <?php endif; ?>
                            </div>
                            <!--church blog detail text end-->
                        </div>
                        <!--ch blog detail row end-->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     


                       
                    </div>
                    <?php echo $__env->make('blog.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
        <!--church blog detail wrap end-->

        
    </div>
    



<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/megapipe/gracecommunitybiblechurch.org/resources/views/blog/blog.blade.php ENDPATH**/ ?>