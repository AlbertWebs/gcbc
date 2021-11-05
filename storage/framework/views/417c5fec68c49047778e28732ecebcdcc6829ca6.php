<?php 
     $Updates = DB::table('updates')->where('status','0')->get();
 ?>
 <?php if($Updates->isEmpty()): ?>

 <?php else: ?> 
 <center>
 <?php $__currentLoopData = $Updates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $update): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
             
            <?php
                                $original_string = $update->content;
                                $num_words = 20;
                                $words = array();
                                $words = explode(" ", $original_string, $num_words);
                                $shown_string = "";
                                

                                if(count($words) == 20){
                                  $words[19] = "...";
                                }

                                $shown_string = implode(" ", $words);

                ?>
                <?php echo html_entity_decode($shown_string); ?>

            
            <a href="<?php echo e(url('/admin/update')); ?>/<?php echo e($update->id); ?>" class="alert-link">Read Update</a>.
        </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</center>
 <?php endif; ?>

 <center>
 <?php if(Session::has('message-comment')): ?>
<div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <div class="alert alert-success"><?php echo e(Session::get('message-comment')); ?></div>
</div> 
							   
<?php endif; ?>
</center>

                    <div style="text-align: center;">
                      

                            <a class="quick-btn" href="<?php echo e(url('/admin/allMessages')); ?>">
                                <i class="icon-envelope icon-2x"></i>
                                <span>Messages</span>
                                <span class="label label-success"><?php $Messages = DB::table('messages')->get(); $Count = count($Messages); echo $Count ?></span>
                            </a>

             
                            <a class="quick-btn" href="<?php echo e(url('/admin/admins')); ?>">
                                <i class="icon-user-md icon-2x"></i>
                                <span>Admins</span>
                                <span class="label label-danger"><?php $Admins = DB::table('admins')->get(); $Count = count($Admins); echo $Count ?></span>
                            </a>

                            <a class="quick-btn" href="<?php echo e(url('/admin/Sermons')); ?>">
                                <i class="icon-home icon-2x"></i>
                                <span>Sermons</span>
                                <span class="label label-danger"><?php $Admins = DB::table('product')->get(); $Count = count($Admins); echo $Count ?></span>
                            </a>

                            <a class="quick-btn" href="<?php echo e(url('/admin/blogs')); ?>">
                                <i class="icon-pencil icon-2x"></i>
                                <span>Events</span>
                                <span class="label label-danger"><?php $Admins = DB::table('blogs')->get(); $Count = count($Admins); echo $Count ?></span>
                            </a>

                        
                            
                            
                            
                    </div><?php /**PATH /home/designekta/gcbc/resources/views/admin/panel.blade.php ENDPATH**/ ?>