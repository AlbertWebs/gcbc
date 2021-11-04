<?php $__env->startSection('content'); ?>
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $About; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div style="min-height:124px"></div>


        <div class="content">
            <div class="container">
            <hr>
                <h3>Who we are</h3>
            <hr>
            </div>
            
            <div class="church_aboutus">
                <div class="container">
                    <div class="church_about_us">
                        <div class="church_heading align_left">
                            <h3>About Us</h3>
                            <p><?php echo html_entity_decode($about->content); ?></p>
                        </div>
         
                    </div>
                   
                </div>

            </div>
            
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
                                    <h3 class="text-center"><?php echo html_entity_decode($about->purpose); ?></h3>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!--church caption wrap ends-->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            
            
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="soft_column">
                        <figure>
                            <img src="<?php echo e(asset('theme/extra-images/our_soft_col_img04.jpg')); ?>" alt="">
                            <div class="soft_column_caption">
                                <h4>New Here?</h4>
                                <a href="#" class="default_small_btn theme-bg_btn">Join Us</a>
                            </div>
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="soft_column">
                        <figure>
                            <img src="<?php echo e(asset('theme/extra-images/our_soft_col_img05.jpg')); ?>" alt="">
                            <div class="soft_column_caption">
                                <h4>Our Locations</h4>
                                <a href="<?php echo e(url('/')); ?>/contact-us" class="default_small_btn theme-bg_btn">Find Us Now</a>
                            </div>
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="soft_column">
                        <figure>
                            <img src="<?php echo e(asset('theme/extra-images/our_soft_col_img06.jpg')); ?>" alt="">
                            <div class="soft_column_caption">
                                <h4>Constitution</h4>
                                <a href="#" class="default_small_btn theme-bg_btn">Read More</a>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mission" class="church_soft_services bg_none">
        <div class="container">
            <div class="church_heading align_center">
                <h3>Our Vision & Mission</h3>
                <span ><sup class="icon-cross"></sup></span>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                    <div class="soft_column">
                        <figure>
                            <img src="<?php echo e(url('/')); ?>/uploads/images/<?php echo e($about->image); ?>" alt="">
                            <div class="soft_column_caption">
                                <h4>Mission Statement</h4>
                                <p style="font-size:24px;"><?php echo html_entity_decode($about->mission); ?></p>
                                
                            </div>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                    <div class="soft_column">
                        <figure>
                            <img src="<?php echo e(url('/')); ?>/uploads/images/<?php echo e($about->image); ?>" alt="">
                            <div class="soft_column_caption">
                                <h4>Our Vision</h4>
                                <p style="font-size:24px;"><?php echo html_entity_decode($about->vision); ?></p>
                                
                            </div>
                        </figure>
                    </div>
                </div>
               

            </div>
        </div>
    </section>

    <section id="values">
        <div class="container">
         
            <div class="chu_prayer_dashboard">
                <h4 class="custom-font-30px">Our Core Values</h4>
                <div class="row">
                    <?php $Values = DB::table('values')->get(); ?>
                    <?php $__currentLoopData = $Values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6" style="min-height:300px">
                        <div class="chu_prayer_columns">
                            <div class="pull-left prayer_title">
                                <h4><a href="#values"><?php echo e($item->title); ?></a></h4>
                                <small><?php echo e($Settings->sitename); ?></small>
                            </div>
                            <div class="pull-right prayer_icons_styles">
                               
                                <a href="#" class="pull-right"><i class="icon-cross-1 fa-2x"></i></a>
                            </div>
                            <div class="chu_caption">
                                <p>
                                    <?php echo e($item->content); ?>

                                </p>
                            </div>
                          
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   
                    
                </div>
            </div>
        </div>
    </section>
		
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master-pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/megapipe/gracecommunitybiblechurch.org/resources/views/front/about.blade.php ENDPATH**/ ?>