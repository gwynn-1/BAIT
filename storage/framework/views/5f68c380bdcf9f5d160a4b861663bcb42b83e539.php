<div class="books-container">
    <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-4 item-book-col">
            <div class="item-book item-all-book">
                <div class="head-item">
                    <div class="borrow-button">
                        Quan tâm sách
                    </div>
                    <div class="item-book-image">
                        <a href="b/<?php echo e($book->id); ?>/<?php echo e($book->url_book); ?>" class="link-to-book">
                            <?php if($book->image==null): ?>
                                <img class="book-image-sec" src="images/convallis-pharetra.jpg" alt="">
                            <?php else: ?>
                                <img class="book-image-sec" src="book_image/<?php echo e($book->image); ?>" alt="" width="323" height="369">
                            <?php endif; ?>
                        </a>
                    </div>
                </div>
                <div class="book-title">
                    <a href="b/<?php echo e($book->id); ?>/<?php echo e($book->url_book); ?>"><?php echo e($book->name); ?></a>
                    <?php if($book->available>0): ?>
                        <p class="available-book book-status">
                            Còn sách
                        </p>
                    <?php else: ?>
                        <p class="non-available-book book-status">
                            Hết sách
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php echo $__env->make("ajax-paging.paging-link",["paginator"=>$books], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>