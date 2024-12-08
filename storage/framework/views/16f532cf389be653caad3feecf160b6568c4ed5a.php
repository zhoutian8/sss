<?php $__env->startSection('content'); ?>
<div class="slider-area d-flex align-items-center" style="background-color: #f7f7f7; padding: 50px 0;">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <div style="background-color: #fff; border-radius: 10px; padding: 30px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                    <h2 style="text-align: center; color: #c79787;">Login</h2>

                    <!-- 显示错误信息 -->
                    <?php if(session('success')): ?>
                        <p style="color: green; text-align: center;"><?php echo e(session('success')); ?></p>
                    <?php endif; ?>

                    <?php if($errors->any()): ?>
                        <ul style="color: red; text-align: center;">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php endif; ?>
                    
                    <form action="<?php echo e(route('login.store')); ?>" method="POST" style="margin-top: 20px;">
                        <?php echo csrf_field(); ?>
                        <div style="margin-bottom: 15px;">
                            <label for="email" style="display: block; color: #333; margin-bottom: 5px;">Email</label>
                            <input type="email" name="email" id="email" value="<?php echo e(old('email')); ?>" 
                                   style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                        </div>
                        <div style="margin-bottom: 15px;">
                            <label for="password" style="display: block; color: #333; margin-bottom: 5px;">Password</label>
                            <input type="password" name="password" id="password" 
                                   style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                        </div>
                        <button type="submit" 
                                style="background-color: #c79787; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; width: 100%; font-size: 16px;">
                            Login
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('magic.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/project/resources/views/login/login.blade.php ENDPATH**/ ?>