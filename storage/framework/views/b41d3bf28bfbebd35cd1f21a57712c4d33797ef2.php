<?php $__env->startSection('content'); ?>
<?php $title="Our Events| Grace Community Bible Church"; ?>
<div style="min-height:124px"></div>
<div class="content">
    <div class="container">
     <iframe style="min-height:824px" src="<?php echo e(url('/getevent')); ?>">Your browser isn't compatible</iframe>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master-pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/designekta/gcbc/resources/views/front/calendars.blade.php ENDPATH**/ ?>