<?php $__env->startSection('content'); ?>
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div style="min-height:124px"></div>
<div class="content">
    <br><br><br>
	<div class="church_map">
		
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.57935674868!2d36.8736822!3d-1.232774!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd71e981f15ca8f7d!2sGrace%20Community%20Bible%20Church!5e0!3m2!1sen!2ske!4v1614412293094!5m2!1sen!2ske" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>

	<div class="contact_us">
		
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="church_location">
							<span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
							<div>
								<h6><a href="#">Office Address</a></h6>
								<p><?php echo e($Settings->location); ?><br><?php echo e($Settings->address); ?><br></p>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="church_location active">
							<span><i class="fa fa-phone" aria-hidden="true"></i></span>
							<div>
								<h6><a href="#">Phone Number</a></h6>
								<p>Mobile: <?php echo e($Settings->mobile); ?><br>Mobile: <?php echo e($Settings->mobile_one); ?></p>
							</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="church_location">
							<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
							<div>
								<h6><a href="#">Email Address</a></h6>
								<p><?php echo e($Settings->email); ?></p>
							</div>
						</div>
					</div>
				
					<div class="content_contact_us">
						<h4 class="custom-font-30px">Contact Us</h4>
						<p>If you have any questions or comments, or would just like to say hello,</p>
						<form id="contact-form" class="form-contact" action="<?php echo e(url('/')); ?>/send-message" method="POST">

							<?php echo e(csrf_field()); ?>

							<style>
								.hide-robot{
									display:none !important;
								}
								</style>
							<input name="firstnamer" type="text" id="firstnamer" class="hide-robot">
							<div class="kode-left-comment-sec">
								<div class="col-md-4">
									<div class="kf_commet_field">
										<input placeholder="Name" name="name" value="" data-default="Name*" size="30" required="" type="text">
									</div>
									<div class="kf_commet_field">
											<input placeholder="Email Address" name="email" value="" data-default="Name*" size="30" required="" type="text">
									</div>
									<div class="kf_commet_field">
										<input placeholder="Subject" name="subject" value="" data-default="Name*" size="30" required="" type="text">
									</div>
								</div>
								<div class="col-md-8">
									<div class="ch_textarea">
										<textarea placeholder="Type here message" name="message"></textarea>
									</div>
								</div>
								<p class="form_submit"><input name="submit" class="default_small_btn btn_2" value="Submit" type="submit"></p>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master-pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/designekta/gcbc/resources/views/front/contact.blade.php ENDPATH**/ ?>