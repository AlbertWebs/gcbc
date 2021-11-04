<?php $__env->startSection('content'); ?>
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $Blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
				<h3>Register Event</h3>
				<ul class="breadcrumb">
				  <li class="active"><?php echo e($Blog->title); ?></li>
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


	<div class="contact_us">
		
		<section>
			<div class="container">
				<div class="row">				
					<div class="content_contact_us">
                        
                        <center>
                            <?php if(Session::has('message')): ?>
                                          <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
                           <?php endif; ?>
           
                           <?php if(Session::has('messageError')): ?>
                                          <div class="alert alert-danger"><?php echo e(Session::get('messageError')); ?></div>
                           <?php endif; ?>
                            </center>
                        
						<h4 class="custom-font-30px">Leave Your Infomation With Us</h4>
						<p>You are about to register for <?php echo e($Blog->title); ?>, Please feel the below form and we will contact you soonest possible</p>
						<form id="contact-form" class="form-contact" action="<?php echo e(url('/')); ?>/register-now" method="POST">
							<?php echo e(csrf_field()); ?>

							<div class="kode-left-comment-sec">
								<div class="col-md-12">
									<div class="kf_commet_field">
										<input placeholder="Full Name" name="name" value="" data-default="Pst. Mark Ndinyo*" size="30" required="" type="text">
									</div>
									<div class="kf_commet_field">
											<input placeholder="your Email Address" name="email" value="" data-default="example@example.com*" size="30" required="" type="text">
									</div>
									<div class="kf_commet_field">
										<input placeholder="Mobile e.g +254720000000" name="mobile" value="" data-default="0723014032" size="30" required="" type="text">
									</div>
                                    <input type="hidden" name="event" value="<?php echo e($Blog->title); ?>">
								</div>
								<div class="col-md-12">
									<div class="ch_textarea">
										<textarea placeholder="Type here message" name="message"></textarea>
									</div>
								</div>
								<p class="form_submit"><input name="submit" class="default_small_btn btn_2" value="Register Now" type="submit"></p>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>

		<!--church prayer block start-->
		<div class="church_prayer_block height padding-0">
			<div class="container">
				<div class=" padding">
					<?php $Sermons = DB::table('sermons')->inRandomOrder()->limit(1)->get(); ?>
					<?php $__currentLoopData = $Sermons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Sermons): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<h4 style="color:#ffffff; margin:0px auto;" class="text-center"><?php echo e($Sermons->meta); ?></h4><br>
					<center><p style="color:#ffffff; text-align:center margin:0px auto;"> ~ <?php echo e($Sermons->books); ?></p></center>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			
			</div>
		</div>
		<!--church prayer block end-->
	</div>
	
	

	</div> 

			
		</div>
        <!-- End Main -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master-pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/megapipe/gracecommunitybiblechurch.org/resources/views/front/register.blade.php ENDPATH**/ ?>