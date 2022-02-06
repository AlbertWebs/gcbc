<?php $__env->startSection('content'); ?>
<div id="wrap" >


        <!-- HEADER SECTION -->
        <?php echo $__env->make('admin.top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
        <?php echo $__env->make('admin.left', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--END MENU SECTION -->



        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">

                        <center><h2> Edit Event </h2></center>

                    </div>
                </div>
                  <hr />
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
                        <?php echo $__env->make('admin.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    </div>

                </div>
                  <!--END BLOCK SECTION -->
                <hr />


                  <!-- Inner Content Here -->

            <div class="inner">


              <div class="row">
               <center>
                 <?php if(Session::has('message')): ?>
							   <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
				<?php endif; ?>

                <?php if(Session::has('messageError')): ?>
							   <div class="alert alert-danger"><?php echo e(Session::get('messageError')); ?></div>
				<?php endif; ?>
                 </center>


                 <form class="form-horizontal" method="post"  action="<?php echo e(url('/admin/edit_Event')); ?>/<?php echo e($Event->id); ?>" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Title</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="title" value="<?php echo e($Event->title); ?>" placeholder="e.g Travel Websites Emerging trends " class="form-control" />
                        </div>
                    </div>







                    <div class="form-group">
                        <label class="control-label col-lg-4" >Start Date</label>

                        <div class="col-lg-8">
                            <div class="input-group">
                                <input type="text" required value="<?php echo e($Event->start); ?>" name="start"  class="form-control"  />
                                <span class="input-group-addon add-on"><i class="icon-calendar"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4" >End Date</label>

                        <div class="col-lg-8">
                            <div class="input-group">
                                <input type="text" required name="end" value="<?php echo e($Event->end); ?>"  class="form-control"  />
                                <span class="input-group-addon add-on"><i class="icon-calendar"></i></span>
                            </div>
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Author</label>

                        <div class="col-lg-8">
                            <input type="text" readonly id="text1" name="author" value="<?php echo e(Auth::user()->name); ?>" class="form-control" />
                        </div>
                    </div>






                    
                    <br><br>
                    <div class="col-lg-12 text-center">
                      <button type="submit" class="btn btn-success"><i class="icon-check icon-white"></i> Save </button>
                    </div>
                    <input type="hidden" name="image_one_cheat" value="<?php echo e($Event->image); ?>">


                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                <form>
              </div>

            </div>
                  <!-- Inner Content Ends Here -->




            </div>

        </div>
        <!--END PAGE CONTENT -->

         <!-- RIGHT STRIP  SECTION -->
        <?php echo $__env->make('admin.right', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <!-- END RIGHT STRIP  SECTION -->
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/designekta/gcbc/resources/views/admin/editEvent.blade.php ENDPATH**/ ?>