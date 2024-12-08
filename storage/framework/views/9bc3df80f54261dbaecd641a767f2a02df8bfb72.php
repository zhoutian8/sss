 

<?php $__env->startSection('content'); ?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Comments</strong>
           
        </div>
        <div class="card-body">
            <table class="table table-bordered table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">BookName</th>
                        <th scope="col">Content</th>
                        <th scope="col">UserName</th>
                        <th scope="col">actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <tr>
                        <th scope="row"><?php echo e($comment->id); ?></th>
                        <td><?php echo e($comment->book->name); ?></td>
                        <td><?php echo e($comment->content); ?></td>
                        <td><?php echo e($comment->user->username); ?></td>
                        <td> <form action="<?php echo e(route('admin.comments.delete', $comment->id)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('magic.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/project/resources/views/admin/comments/index.blade.php ENDPATH**/ ?>