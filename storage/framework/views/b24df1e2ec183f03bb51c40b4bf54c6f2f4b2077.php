<?php $__env->startSection('content'); ?>
<div class="blog-section style-two details">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="row">
                    <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="col-lg-12">
							<div class="blog-single-items">
								<div class="blog-thumb" style='text-align:center;'>
                                <?php if($book->image): ?>
                                    <img src="<?php echo e(asset('storage/' . $book->image)); ?>" alt="<?php echo e($book->name); ?>" style="width:45%;">
                               
                                <?php endif; ?>
								</div>
								<div class="blog-content">
									<div class="blog-content-text text-left">
                                    <a href="<?php echo e(route('books.detail', $book->id)); ?>"><h5><?php echo e($book->name); ?></h5></a>
										
									</div>
								</div>
							</div>
						</div>
						
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
						
					</div>
				</div>
				
			</div>
		</div>
	</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('magic.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/project/resources/views/books/index.blade.php ENDPATH**/ ?>