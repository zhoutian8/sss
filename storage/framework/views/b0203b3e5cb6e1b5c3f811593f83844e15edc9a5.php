<?php $__env->startSection('content'); ?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Add Book</strong>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('admin.books.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="name">Book Name</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" name="content" id="content" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Book Image</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>
                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('magic.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/project/resources/views/admin/books/create.blade.php ENDPATH**/ ?>