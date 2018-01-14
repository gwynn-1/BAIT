<div class="blog-blocks">
    <?php $__currentLoopData = $blog_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="blog-big-block">
        <div class="blog-image">
            <a href="bn/<?php echo e($bn->id); ?>/<?php echo e($bn->url_blog); ?>">
                <?php if($bn->main_image!=null): ?>
                    <img src="book_image/<?php echo e($bn->main_image); ?>">
                <?php else: ?>
                <img src="images/blog-and-news.jpg">
                    <?php endif; ?>
            </a>
        </div>
        <div class="blog-info">
            <div class="blog-title">
                <a href="bn/<?php echo e($bn->id); ?>/<?php echo e($bn->url_blog); ?>"><?php echo e($bn->title); ?></a>
            </div>
            <div class="blog-describe">
                <p>
                    <?php echo e($bn->description); ?>

                </p>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php echo $__env->make("ajax-paging.paging-link",["paginator"=>$blog_news], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>