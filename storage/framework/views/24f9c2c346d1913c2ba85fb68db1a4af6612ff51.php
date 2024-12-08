 

<?php $__env->startSection('content'); ?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Users</strong>
            <a href="<?php echo e(route('admin.users.create')); ?>" class="btn btn-primary btn-sm float-right">Add User</a>
        </div>
        <div class="card-body">
           
            <table class="table table-bordered table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($user->id); ?></th>
                        <td><?php echo e($user->username); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td>
                            <!-- 编辑按钮 -->
                            <a href="<?php echo e(route('admin.users.edit', $user->id)); ?>" class="btn btn-primary btn-sm">Edit</a>

                            <!-- 删除按钮 -->
                            <form action="<?php echo e(route('admin.users.destroy', $user->id)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('magic.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/project/resources/views/admin/users/index.blade.php ENDPATH**/ ?>