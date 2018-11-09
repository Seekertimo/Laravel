<?php $__env->startSection('title','home'); ?>

<?php $__env->startSection('page_title'); ?>
    Homepage
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <h1>HOMEPAGE</h1>
    <p>Welcome op onze website.</p>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>