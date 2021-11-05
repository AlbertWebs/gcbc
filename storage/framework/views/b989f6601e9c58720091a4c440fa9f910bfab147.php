<footer>
  
    <div class="footer_board">
        <div class="container">
            <div class="background-logos">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer_detail">
                            <h4 class="footer_title"><?php echo e($Settings->sitename); ?></h4>
                            <p><?php echo html_entity_decode($Settings->welcome); ?></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer_blog">
                            <h4 class="footer_title">Events & News</h4>
                            <?php $Blog = DB::table('blogs')->limit(2)->get(); $Count = 1; ?>
                            <?php $__currentLoopData = $Blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="footer_blog_post <?php if($Count == 1): ?> padding-top-0 <?php else: ?> <?php endif; ?>">
                                <figure>
                                    <img style="width:70px; height:56px;" src="<?php echo e(url('/')); ?>/uploads/blogs/<?php echo e($item->image_one); ?>" alt="">
                                </figure>
                                <div class="footer-post-content">
                                    <a href="<?php echo e(url('/')); ?>/news-and-events/<?php echo e($item->slung); ?>"><?php echo e($item->title); ?></a>
                                    
                                    <?php 
                                        if($item->event == 1){
                                            $RawDate = $item->date;
                                        }else{
                                            $RawDate = $item->created_at;   
                                        }
                                        
                                        $FormatDate = strtotime($RawDate);
                                        $Month = date('M',$FormatDate);
                                        $Date = date('d',$FormatDate);
                                        $Year = date('Y',$FormatDate);

                                    ?>
                                    <span><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo e($Date); ?> <?php echo e($Month); ?> <?php echo e($Year); ?></span>
                                </div>
                            </div>
                            <?php $Count = $Count+1; ?> 
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                         
                        </div>
                    </div> 
                    <div class="col-md-4">
                        <div class="footer_blog">
                            <h4 class="footer_title">Our Address</h4>
                            <p><?php echo e($Settings->sitename); ?></p>
                            <span><i class="fa fa-envelope" aria-hidden="true"></i><?php echo e($Settings->email); ?></span>
                            <span><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo e($Settings->location); ?></span>
                            <span><i class="fa fa-book" aria-hidden="true"></i><?php echo e($Settings->address); ?></span>
                            <span><i class="fa fa-phone" aria-hidden="true"></i><?php echo e($Settings->mobile); ?> | <?php echo e($Settings->mobile_one); ?></span>
                        </div>
                        
                        
                        <div class="widget_social">
                            <br> <br>
                            <ul>
                                
                                <li><a class="blue_light" href="<?php echo e($Settings->twitter); ?>"><span><i class="fa fa-twitter"></i></span>follow us</a></li>
                                <li><a class="blue" href="<?php echo e($Settings->twitter); ?>"><span><i class="fa fa-facebook"></i></span>Like us</a></li>
                                <li><a class="pink" href="<?php echo e($Settings->instagram); ?>"><span><i class="fa fa-instagram"></i></span>follow us</a></li>
                                
                                <li><a class="red" href="<?php echo e($Settings->youtube); ?>"><span><i class="fa fa-youtube"></i></span>Youtube</a></li>
                            </ul>
                        </div>
                        
                    </div>       
                </div>
            </div>
            <hr>
            
          
        </div>
        

    </div>
</footer><?php /**PATH /home/designekta/gcbc/resources/views/front/footer.blade.php ENDPATH**/ ?>