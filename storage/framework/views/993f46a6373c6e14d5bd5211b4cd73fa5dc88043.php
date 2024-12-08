<?php $__env->startSection('content'); ?>
<div class="blog-section style-two details">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="blog-single-items">
						<div class="blog-thumb">
                        <?php if($book->image): ?>
                        <img src="<?php echo e(asset('storage/' . $book->image)); ?>" alt="<?php echo e($book->name); ?>">
                        <?php endif; ?>
						</div>
						<div class="blog-content">
							<div class="blog-content-text text-left">
								<h5><?php echo e($book->name); ?></h5>
								<p><?php echo e($book->content); ?></p>
								
								
								

							</div>
						</div>
						<?php if(auth()->check()): ?>
                            <!-- 登录用户可以评论 -->
                            <div class="comment-form pt-50">
                                <div class="comment-title mb-40">
                                    <h3>Comments</h3>
                                    <ul>
                                        <?php $__currentLoopData = $book->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <?php echo e($comment->content); ?> 
                                                <small>by <b><?php echo e($comment->user->username); ?></b> on <?php echo e($comment->created_at->diffForHumans()); ?></small>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>

                                <form action="<?php echo e(route('books.comments.store', $book->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <textarea name="content" class="mb-20" id="comment-msg-box" cols="30" rows="4" placeholder="Message"></textarea>
                                    <input type="submit" value="Post Comment" class="submit-comment">
                                </form>
                            </div>
                        <?php else: ?>
                            <!-- 未登录用户 -->
                            <p>Please <a href="<?php echo e(route('login.create')); ?>">login</a> to leave a comment.</p>
                        <?php endif; ?>
					</div>
				</div>
				
			</div>
		</div>
	</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('magic.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/project/resources/views/books/detail.blade.php ENDPATH**/ ?>