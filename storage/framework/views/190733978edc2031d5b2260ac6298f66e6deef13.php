  <!-- 引用公共布局 -->

<?php $__env->startSection('content'); ?>
<h3 style="margin-top:20px;">Welcome to the backend </h3>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('magic.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/project/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>