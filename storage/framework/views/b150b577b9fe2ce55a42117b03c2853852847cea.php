<?php $__env->startSection('content'); ?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Edit Book</strong>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('admin.books.update', $book->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="form-group">
                    <label for="name">Book Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="<?php echo e($book->name); ?>" required>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" name="content" id="content" rows="4" required><?php echo e($book->content); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Book Image</label>
                    <input type="file" class="form-control" name="image" id="image">
                    <?php if($book->image): ?>
                        <img src="<?php echo e(asset('storage/' . $book->image)); ?>" width="100" height="100">
                    <?php endif; ?>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('magic.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/project/resources/views/admin/books/edit.blade.php ENDPATH**/ ?>