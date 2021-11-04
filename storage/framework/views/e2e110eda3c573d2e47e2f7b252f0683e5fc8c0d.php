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
                    <div class="col-lg-12 text-center">
                        <h2> Edit Administrator </h2>
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
                   <!-- CHART & CHAT  SECTION -->
              
                 <!--END CHAT & CHAT SECTION -->
               
                  <!-- Inner Content Here -->
                 
            <div class="inner">
                

              <div class="row">
               <center>
                 <?php if(Session::has('message')): ?>
							   <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
				<?php endif; ?>
                 </center>

                 <form class="form-horizontal" method="post"  action="<?php echo e(url('/admin/edit_Admin')); ?>/<?php echo e($Admin->id); ?>" enctype="multipart/form-data">
                   
                 <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Name</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="name" value="<?php echo e($Admin->name); ?>" placeholder="e.g Juliet Wangui Waraga " class="form-control" />
                        </div>
                    </div>

                     <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Position</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="position" value="<?php echo e($Admin->position); ?>" placeholder="e.g Graphics Designer" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">email</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1"  name="email" value="<?php echo e($Admin->email); ?>" placeholder="e.g juliekoi2@gmail.com " class="form-control" />
                            <p class="help-block">Changing Your Email Signs Out The Current Session</p>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Facebook Link</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="facebook" value="<?php echo e($Admin->facebook); ?>"  class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Twitter Link</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="twitter" value="<?php echo e($Admin->twitter); ?>"  class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Linkedin Link</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="linkedin" value="<?php echo e($Admin->linkedin); ?>"  class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Instagram</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="instagram" value="<?php echo e($Admin->instagram); ?>" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Youtube Link</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="youtube" value="<?php echo e($Admin->youtube); ?>"  class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Google Plus Link</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="google" value="<?php echo e($Admin->google); ?>"  class="form-control" />
                        </div>
                    </div>

                     <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Password</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" readonly  placeholder="To Change Your Password Use the 'Forgot Password' Link of your Login Page" class="form-control" />
                        </div>
                    </div>

                    <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                    <h5>Something About Me</h5>
                                    <ul class="nav pull-right">
                                        <li>
                                            <div class="btn-group">
                                                <a class="accordion-toggle btn btn-xs minimize-box" data-toggle="collapse"
                                                    href="#div-1">
                                                    <i class="icon-minus"></i>
                                                </a>
                                                 <button class="btn btn-danger btn-xs close-box">
                                                    <i
                                                        class="icon-remove"></i>
                                                </button>
                                            </div>
                                        </li>
                                    </ul>
                                </header>
                                <div id="div-1" class="body collapse in">
                                    
                                        <textarea name="content" id="wysihtml5" class="form-control" rows="10"><?php echo e($Admin->content); ?></textarea>

                                    
                                </div>
                            </div>
                        </div>
                       
                    <center>
                    <div class="form-group col-lg-12">
                        <label class="control-label">Admin Image</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="<?php echo e(url('/')); ?>/uploads/admins/<?php echo e($Admin->image); ?>" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image" type="file" /></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </center>
                    </div>

                    
                   
                    <br><br>
                    <div class="col-lg-12 text-center">
                      <button type="submit" class="btn btn-success"><i class="icon-check icon-white"></i> Save</button>
                    </div>
                    
                    <input type="hidden" name="image_cheat" value="<?php echo e($Admin->image); ?>">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    
                <form>


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
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/megapipe/gracecommunitybiblechurch.org/resources/views/admin/editAdmin.blade.php ENDPATH**/ ?>