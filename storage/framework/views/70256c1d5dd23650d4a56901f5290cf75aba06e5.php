<?php $__env->startSection('content'); ?>
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div style="min-height:124px"></div>


<div class="content">
	<div class="container">
	<hr>
		<h3>PayBill Number</h3>
	<hr>
	</div>

            
            <section>
                <div class="container">
                  <div class="row text-center">
                    <img width="500" class="paybill" style="" src="<?php echo e(url('/')); ?>/uploads/banners/GCBC-mpesa-03-min.png" alt="">
                  </div>
                </div>
              </section>
            


            <section style="padding:0px; margin:0 auto !important">
                <div class="weekly-groups_services full-width-services text-center">
                    <ul class="services_weekly">
                        <li style="min-height:310px !important">
                            <div class="weekly_column">
                                <span class="fa fa-calendar-minus-o" aria-hidden="true"></span>
                                <h4><a href="#">GOD-CENTERED</a></h4>
                                <p>
                                    God is holy, glorious, and sovereign over all things. As a church, we are committed to knowing, loving, obeying, and glorifying the Father, Son, and Holy Spirit in all we do.
                                </p>
                                
                            </div>
                        </li>
                        <li style="min-height:310px !important">
                            <div class="weekly_column">
                                <span class="fa fa-hourglass-end" aria-hidden="true"></span>
                                <h4><a href="#">SCRIPTURE-GUIDED</a></h4>
                                <p>
                                    The Bible is ultimately authoritative in the life of the believer and the church. This leads us to a commitment to Bible exposition in all our ministries, whether for adults, youth, or even children.
                                </p>
                                
                            </div>
                        </li>
                        <li style="min-height:310px !important">
                            <div class="weekly_column">
                                <span class="fa fa-users" aria-hidden="true"></span>
                                <h4><a href="#">WORSHIP-ORIENTED</a></h4>
                                <p>
                                    Reverence, awe, joy, fear, and submission are true responses to God???s glory and salvation. We seek to cultivate worship that rightly exalts God while humbling and dignifying people by placing them in their right place below Him.
                                </p>
                                
                            </div>
                        </li>
                    </ul>
                </div>
            </section>


		</div>







<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master-pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/designekta/gcbc/resources/views/front/give_paybill.blade.php ENDPATH**/ ?>