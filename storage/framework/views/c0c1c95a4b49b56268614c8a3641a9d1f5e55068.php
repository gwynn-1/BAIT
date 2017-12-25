<?php $__env->startSection('section-body'); ?>
<section>
    <script src="sliderengine/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
    <script src="sliderengine/initslider-1.js"></script>
    <div id="amazingslider-wrapper-1">
        <div id="amazingslider-1">
            <ul class="amazingslider-slides" style="display:none;">
                <?php $__currentLoopData = $breaking_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $br): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <a href="blognews/<?php echo e($br->id); ?>/<?php echo e($br->url_blog); ?>">
                        <img src="book_image/<?php echo e($br->main_image); ?>" alt="slider-111"  title="<?php echo e($br->title); ?>" />
                    </a>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                
                
                
            </ul>
            <ul class="amazingslider-thumbnails" style="display:none;">
                <?php $__currentLoopData = $breaking_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $br): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                            <img src="book_image/<?php echo e($br->main_image); ?>" alt="slider-111"  title="<?php echo e($br->title); ?>" />
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                
                
            </ul>
            <div class="amazingslider-engine"><a href="http://amazingslider.com" title="jQuery Slideshow">jQuery Slideshow</a></div>
        </div>
    </div>
    <div class="body-content">
        <div class="blog-and-news">
            <div class="content-title">
                <span>Blog & Tin Tức</span>
            </div>
            <div class="owl-carousel owl-theme owl-carousel-blog">
                <?php $__currentLoopData = $blog_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item-blog item">
                    <div>
                        <a href="blognews/<?php echo e($bn->id); ?>/<?php echo e($bn->url_blog); ?>">
                            <?php if($bn->main_image==null): ?>
                                <img src="images/blog-and-news.jpg" alt="blog">
                            <?php else: ?>
                                <img src="book_image/<?php echo e($bn->main_image); ?>" alt="blog">
                            <?php endif; ?>
                        </a>
                    </div>
                    <div class="item-title">
                        <a href="blognews/<?php echo e($bn->id); ?>/<?php echo e($bn->url_blog); ?>"><?php echo e($bn->title); ?></a>
                    </div>
                    <div class="border-blog-item"></div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <div class="recommended-book">
            <div class="content-title">
                <span>Sách hay nên đọc</span>
            </div>
            <div class="owl-carousel owl-theme owl-carousel-book">
                <?php $__currentLoopData = $recommend_book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r_books): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item item-book">
                    <div class="head-item">
                        <div class="borrow-button">
                            Quan tâm sách
                        </div>
                        <div class="item-book-image">
                            <a href="#" class="link-to-book">
                                <?php if($r_books->image==null): ?>
                                <img class="book-image-sec" src="images/convallis-pharetra.jpg" alt="">
                                <?php else: ?>
                                    <img class="book-image-sec" src="book_image/<?php echo e($r_books->image); ?>" alt="" width="314" height="348">
                                <?php endif; ?>
                            </a>
                        </div>
                    </div>
                    <div class="book-title">
                        <a href="#"><?php echo e($r_books->name); ?></a>
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

        <div class="all-book">
            <div class="content-title">
                <span>Thế giới sách</span>
            </div>
            <div class="book-wrapper">
                <?php echo $__env->make("ajax-paging.ajax-paging-index", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
    <script src="js/ap-index.js"></script>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>