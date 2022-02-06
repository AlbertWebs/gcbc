<div id="left" >
            <div class="media user-media well-small">
                <a class="user-link" href="<?php echo e(url('/admin')); ?>/editAdmin/<?php echo e(Auth::user()->id); ?>">
                    <img width="64" height="64" class="media-object img-thumbnail user-img" alt="<?php echo e(Auth::user()->name); ?>" src="<?php echo e(url('/')); ?>/uploads/admins/<?php echo e(Auth::user()->image); ?>" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"><small><b> <?php echo e(Auth::user()->name); ?></b></small> </h5>
                    <ul class="list-unstyled user-info">

                        <li>
                             <a href="<?php echo e(url('/admin')); ?>/editAdmin/<?php echo e(Auth::user()->id); ?>" class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online

                        </li>

                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">


                <li class="panel active">
                    <a href="<?php echo e(url('/admin')); ?>" >
                        <i class="icon-home"></i> Dashboard


                    </a>
                </li>

                <li class="panel active">
                    <a target="new" href="<?php echo e(url('/')); ?>" >
                        <i class="icon-globe"></i> Visit Website


                    </a>
                </li>
                <li class="panel">
                    <a href="#error-navv" data-parent="#error-navv" data-toggle="collapse" class="accordion-toggle" data-target="#error-navv">
                        <i class="icon-folder-open"></i>  Pages

                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-success">4</span>&nbsp;
                    </a>
                    <ul class="collapse" id="error-navv">
                        <li><a href="<?php echo e(url('/admin/about')); ?>"><i class="icon-angle-right"></i> About  </a></li>

                        
                    </ul>
                </li>

                <li><a href="<?php echo e(url('admin/addSermon')); ?>"><i class="icon-plus"></i>  <i class="icon-cross"></i> Add Sermon </a></li>
                <li><a href="<?php echo e(url('admin/addEvent')); ?>"><i class="icon-plus"></i>  <i class="icon-cross"></i> Add Event </a></li>
                <li><a href="<?php echo e(url('admin/addBlog')); ?>"><i class="icon-plus"></i>  <i class="icon-map-marker"></i> Add Blog/Event </a></li>
                <li><a href="<?php echo e(url('admin/addCategory')); ?>"><i class="icon-plus"></i>  <i class="icon-book"></i> Add Category </a></li>

                <li><a href="<?php echo e(url('admin/addAdmin')); ?>"><i class="icon-plus"></i>  <i class="icon-user-md"></i> Add Admin </a></li>

                <li><a href="<?php echo e(url('admin/sitesettings')); ?>"><i class="icon-cog"></i> Site Settings </a></li>
                <li><a href="<?php echo e(url('admin/logout')); ?>"><i class="icon-signin"></i> Log Out </a></li>





            </ul>

        </div>
<?php /**PATH /home/designekta/gcbc/resources/views/admin/left.blade.php ENDPATH**/ ?>