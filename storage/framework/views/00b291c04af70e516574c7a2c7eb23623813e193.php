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
                    <?php $__currentLoopData = $Sermons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Sermons): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-12">
                        <div class="church_causes_listing church_music_book">
                            <?php if($Sermons->video == null): ?>
                            <figure>
                                <img style="width:300px" src="<?php echo e(url('/')); ?>/uploads/sermons/<?php echo e($Sermons->image); ?>" alt="">
                            </figure>
                            <?php else: ?> 
                            
                                <iframe width="300" height="349" src="https://www.youtube.com/embed/<?php echo e($Sermons->video); ?>?rel=0&hd=1" frameborder="0" allowfullscreen></iframe>
                                
                            
                            <?php endif; ?>
                            <div class="church_blog_content">
                                <div class="church_causes2_caption">
                                    <div class="padding_div">
                                        <h4><a href="#"><?php echo e($Sermons->title); ?></a></h4>
                                        <?php 
                                            $RawDate = $Sermons->date;
                                            $FormatDate = strtotime($RawDate);
                                            $Month = date('M',$FormatDate);
                                            $Date = date('d',$FormatDate);
                                            $Dates = date('D',$FormatDate);
                                            $Year = date('Y',$FormatDate);

                                        ?>
                                        <ul class="meta_address">
                                            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><?php $Admin = App\Admin::find($Sermons->author) ?> <?php echo e($Admin->name); ?></a></li>
                                            <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo e($Dates); ?>, <?php echo e($Month); ?> <?php echo e($Year); ?></a></li>
                                            <li><a href="#"><i class="fa fa-book" aria-hidden="true"></i><?php echo e($Sermons->books); ?></a></li>
                                        </ul>
                                    </div>
                                    <div class="caption">
                                        <p><?php echo e($Sermons->meta); ?></p> 
                                    </div>
                                </div>
                                   
                                <div class="share_social">
                                    <ul>
                                        <li class="spacial-padding"><a title="Share On Facebook" href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    
                                        <li><a download title="Download Audio" href="<?php echo e($Sermons->audio); ?>"><i class="fa fa-download" aria-hidden="true"></i> <i class="fa fa-music" aria-hidden="true"></i></a></li>
                                        <?php if($Sermons->file == null): ?>

                                        <?php else: ?>
                                        <li><a download href="<?php echo e(url('/')); ?>/uploads/sermons/<?php echo e($Sermons->file); ?>"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>

                            </div>

                            <?php if($Sermons->video == null): ?>
                            <!--church music player-->
                            <div class="audioplayer style_audio_2">
                                <audio
                                    controls
                                    src="<?php echo e($Sermons->audio); ?>">
                                        Your browser does not support the
                                        <code>audio</code> element.
                                </audio> 
             
                            </div>
                            <!--church music player ends-->
                            <?php else: ?> 

                            <?php endif; ?>
                           
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
<?php echo $__env->make('front.master-pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/megapipe/gracecommunitybiblechurch.org/resources/views/front/sermons.blade.php ENDPATH**/ ?>