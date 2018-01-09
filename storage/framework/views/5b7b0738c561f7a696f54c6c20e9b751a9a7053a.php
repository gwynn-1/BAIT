<?php $__env->startSection('section-body'); ?>
    <section>
        <script src="js/ap-product.js"></script>
        <link rel="stylesheet" href="css/product.css">
        <div class="body-content">
            <div class="content-title">
                <a href="/">Home</a>
                <span>    >    </span>
                <a href="category/<?php echo e($category_books->type_url); ?>"><?php echo e($category_books->name); ?></a>
                <span>    >    </span>
                <span class="current-category"><?php echo e($books_info->name); ?></span>
            </div>
            <div class="book-section col-md-9">
                <div class="book-main-image">
                    <?php if($books_info->image!=null): ?>
                        <img src="book_image/<?php echo e($books_info->image); ?>" alt="demo">
                    <?php else: ?>
                    <img src="images/convallis-pharetra.jpg" alt="demo">
                    <?php endif; ?>
                </div>
                <div class="book-info">
                    <div class="book-main-title">
                        <h2><?php echo e($books_info->name); ?></h2>
                    </div>
                    <div class="book-author">
                        <p><?php echo e($books_info->author); ?></p>
                    </div>
                    <div class="borrow-big-button">
                        Quan tâm sách
                    </div>
                </div>
                <div class="book-detail">
                    <div class="book-detail-content">
                        <p>
                            <?php echo e($books_info->detail); ?>

                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ante metus dictum at tempor commodo. Et netus et malesuada fames ac turpis egestas sed tempus. Convallis convallis tellus id interdum velit laoreet id donec. Vel pharetra vel turpis nunc eget lorem dolor sed. Arcu non odio euismod lacinia. Lectus proin nibh nisl condimentum id venenatis a condimentum. Odio euismod lacinia at quis. Sed cras ornare arcu dui. Egestas quis ipsum suspendisse ultrices. Nec ultrices dui sapien eget mi proin sed libero enim. Et tortor consequat id porta nibh venenatis cras sed felis. Duis ultricies lacus sed turpis tincidunt id aliquet. Fringilla ut morbi tincidunt augue interdum. Urna et pharetra pharetra massa massa. Pharetra sit amet aliquam id diam. Odio euismod lacinia at quis risus sed vulputate odio ut. Nulla pellentesque dignissim enim sit amet venenatis urna. Elementum nisi quis eleifend quam adipiscing vitae proin sagittis nisl. Bibendum enim facilisis gravida neque convallis a cras semper auctor.
                        </p>
                    </div>
                    <div class="expand-button">Xem thêm</div>
                </div>
                <div class="related-book">
                    <div class="content-title">
                        <span>Sách cùng thể loại</span>
                    </div>
                    <div class="owl-carousel owl-theme owl-carousel-book">
                        <?php $__currentLoopData = $same_books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item item-book">
                            <div class="head-item">
                                <div class="borrow-button">
                                    Quan tâm sách
                                </div>
                                <div class="item-book-image">
                                    <a href="b/<?php echo e($book->id); ?>/<?php echo e($book->url_book); ?>" class="link-to-book">
                                        <?php if($book->image != null): ?>
                                            <img class="book-image-sec" src="book_image/<?php echo e($book->image); ?>" alt="">
                                        <?php else: ?>
                                        <img class="book-image-sec book-image-sec-small" src="images/convallis-pharetra.jpg" alt="">
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
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <div class="comment-section">
                    <div class="content-title-second">
                        <p>bình luận</p>
                    </div>
                    <div class="comment-action-block">
                        <form action="" method="GET">
                            <textarea placeholder="Bình luận ở đây" name="comment" class="text-comment"></textarea>
                            <button type="submit" class="btn-comment">Đăng bình luận</button>
                        </form>
                    </div>
                    <div class="comment-section">
                        <div class="comment-block">
                            <div class="comment-user">
                                <span>user 1</span>
                            </div>
                            <div class="comment-content">
                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</span>
                            </div>
                            <div class="repcomment-block comment-block">
                                <div class="comment-user">
                                    <span>user 2</span>
                                </div>
                                <div class="comment-content">
                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</span>
                                </div>
                            </div>
                            <div class="repcomment-block comment-block">
                                <div class="comment-user">
                                    <span>user 2</span>
                                </div>
                                <div class="comment-content">
                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</span>
                                </div>
                            </div>
                        </div>
                        <div class="comment-block">
                            <div class="comment-user">
                                <span>user 1</span>
                            </div>
                            <div class="comment-content">
                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</span>
                            </div>
                            <div class="repcomment-block comment-block">
                                <div class="comment-user">
                                    <span>user 2</span>
                                </div>
                                <div class="comment-content">
                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="recommend-section col-md-3">
                <div class="content-title">
                    <span>Sách được yêu thích</span>
                </div>
                <div class="fav-book-section">
                    <?php $__currentLoopData = $recommend_book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="small-book-block">
                        <div class="small-image">
                            <a href="b/<?php echo e($rec->id); ?>/<?php echo e($rec->url_book); ?>" class="link-to-book">
                                <?php if($rec->image!=null): ?>
                                    <img src="book_image/<?php echo e($rec->image); ?>" alt="favorite book">
                                <?php else: ?>
                                <img src="images/convallis-pharetra.jpg" alt="favorite book">
                                <?php endif; ?>
                            </a>
                        </div>
                        <div class="book-title small-book-title">
                            <a href="b/<?php echo e($rec->id); ?>/<?php echo e($rec->url_book); ?>"><?php echo e($rec->name); ?></a>
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
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>