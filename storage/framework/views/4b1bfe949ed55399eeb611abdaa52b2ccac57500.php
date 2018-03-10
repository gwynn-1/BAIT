<?php $__env->startSection('section-body'); ?>
<section>
    <link rel="stylesheet" href="css/search.css">
    <div class="body-content">
        <div class="title-result">
            <p>Có <span id="result-count"><?php echo e($count); ?></span> kết quả cho : <span id="keyword"><?php echo e($key); ?></span> <?php echo e(($name_category!=null) ? "thuộc loại ".$name_category->name : ""); ?></p>
        </div>

        <div class="books-container">
            <?php if(isset($books)): ?>
            <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-3 item-book-col">
                    <div class="item-book item-all-book">
                        <div class="head-item">
                            <div class="borrow-button" data-id="<?php echo e($book->id); ?>" data-name="<?php echo e($book->name); ?>" data-image="<?php echo e(($book->image==null) ? "images/convallis-pharetra.jpg": "book_image/".$book->image); ?>">
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
            <?php endif; ?>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>