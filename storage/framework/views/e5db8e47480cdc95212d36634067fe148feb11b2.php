<?php $__env->startSection('section-body'); ?>
    <section>
        <link rel="stylesheet" href="css/cart-page.css">
        <script src="js/cart.js"></script>
        <?php if(session()->has("accept_cart_failed")): ?>
            <script>
                $(document).ready(function () {
                    swal({
                        text : "<?php echo e(session("accept_cart_failed")); ?>",
                        icon : "error"
                    });
                });

            </script>
        <?php endif; ?>
        <div class="body-content">
            <div class="cart-available">
            <?php if($count > 0): ?>
                <div class="user-info-section">
                    <div class="title-user title-cart-page">
                        <p>Thông tin độc giả</p>
                    </div>
                    <div class="info-user">
                        <div class="info-section">
                            <div class="field-section">
                                <span>Tên độc giả : </span>
                            </div>
                            <div class="field-content-section">
                                <span id="name"><?php echo e($reader->name); ?></span>
                            </div>
                        </div>
                        <div class="info-section">
                            <div class="field-section">
                                <span>Email : </span>
                            </div>
                            <div class="field-content-section">
                                <span id="email"><?php echo e($reader->email); ?></span>
                            </div>
                        </div>
                        <div class="info-section">
                            <div class="field-section">
                                <span>SĐT : </span>
                            </div>
                            <div class="field-content-section">
                                <span id="sdt"><?php echo e($reader->sdt); ?></span>
                            </div>
                        </div>
                        <div class="info-section">
                            <div class="field-section">
                                <span>Trường : </span>
                            </div>
                            <div class="field-content-section">
                                <span id="school"><?php echo e($reader->school); ?></span>
                            </div>
                        </div>
                        <div class="info-section">
                            <div class="field-section">
                                <span>MSSV : </span>
                            </div>
                            <div class="field-content-section">
                                <span id="mssv"><?php echo e($reader->mssv); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart-info-section">
                <div class="title-cart title-cart-page">
                    <p>Đơn hàng : <span><?php echo e($count); ?></span> sách</p>
                </div>
                <div class="cart-items-block">
                    <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="cart-item">
                            <div class="image-cart">
                                <img src="<?php echo e($item->options->image); ?>" alt=""/>
                            </div>
                            <div class="cart-info">
                                <div class="book-name">
                                    <p><?php echo e($item->name); ?></p>
                                </div>
                                <div class="book-section">
                                    <div class="book-author">
                                        <p><?php echo e($item->options->author); ?></p>
                                    </div>
                                    <div class="delete-button" data-rowid="<?php echo e($item->rowId); ?>">
                                        <i class="fa fa-trash fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="cart-upload-button" onclick="location.href = '/checkout/acceptcart';return false;">
                    <span>Mượn sách</span>
                </div>
            </div>
            <?php else: ?>
                <p class='empty-cart'>Danh sách quan tâm trống, hãy trở lại trang chủ để tiếp tục.</p>
            <?php endif; ?>
            </div>

            <div class="recommended-book">
                <div class="content-title">
                    <span>Sách hay nên đọc</span>
                </div>
                <div class="owl-carousel owl-theme owl-carousel-book">
                    <?php $__currentLoopData = $recommend_book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r_books): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item item-book item-rec-book">
                            <div class="head-item">
                                <div class="borrow-button" data-id="<?php echo e($r_books->id); ?>" data-author="<?php echo e($r_books->author); ?>" data-name="<?php echo e($r_books->name); ?>" data-image="<?php echo e(($r_books->image==null) ? "images/convallis-pharetra.jpg": "book_image/".$r_books->image); ?>">
                                    Quan tâm sách
                                </div>
                                <div class="item-book-image">
                                    <a href="b/<?php echo e($r_books->id); ?>/<?php echo e($r_books->url_book); ?>" class="link-to-book">
                                        <?php if($r_books->image==null): ?>
                                            <img class="book-image-sec" src="images/convallis-pharetra.jpg" alt="">
                                        <?php else: ?>
                                            <img class="book-image-sec" src="book_image/<?php echo e($r_books->image); ?>" alt="" width="314" height="348">
                                        <?php endif; ?>
                                    </a>
                                </div>
                            </div>
                            <div class="book-title">
                                <a href="b/<?php echo e($r_books->id); ?>/<?php echo e($r_books->url_book); ?>"><?php echo e($r_books->name); ?></a>
                                <?php if($r_books->available>0): ?>
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
<?php echo $__env->make('layout.layout-2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>