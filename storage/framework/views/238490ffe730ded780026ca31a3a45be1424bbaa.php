<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
    <div class="blog-single-items">
        <div class="col-lg-8">
        <div class="comment-form pt-50">
        <div class="comment-title mb-40">
            <h3>Your Comments</h3>

            <?php if(session('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('success')); ?>

                </div>
            <?php elseif(session('error')): ?>
                <div class="alert alert-danger">
                    <?php echo e(session('error')); ?>

                </div>
            <?php endif; ?>

            <div class="comment-list"  style='diplay:flex;width:500px;'>
                <ul>
                    <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <div class="col-lg-12">
                                <p><?php echo e($comment->content); ?>  <small>Posted on <?php echo e($comment->created_at->diffForHumans()); ?></small></p>
                               

                                <!-- 删除评论按钮 -->
                                <form action="<?php echo e(route('comments.delete', $comment->id)); ?>" method="POST" style="display:inline;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            </div>
            </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('magic.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/project/resources/views/comments/index.blade.php ENDPATH**/ ?>