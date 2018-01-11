<?php $__env->startSection('section-body'); ?>
    <section>
        <link rel="stylesheet" type="text/css" href="css/blog-news.css">
        <div class="body-content">
            <div class="left-section col-md-9">
                <div class="news-blog-section">
                    <div class="news-title">
                        <h2><?php echo e($blog_news->title); ?></h2>
                    </div>
                    <div class="news-created-date">
                        <p><?php echo e($blog_news->created_at); ?></p>
                    </div>
                    <div class="news-blog-content">
                        <?php echo $blog_news->content; ?>

                    </div>
                    <div class="news-author">
                        <p> <span>Tác giả : </span><?php echo e($blog_news->author); ?></p>
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
            <div class="right-section col-md-3">
                <div class="content-title">
                    <span>Tin nổi bật</span>
                </div>
                <div class="hot-news-blog">
                    <?php $__currentLoopData = $breaking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="dynamic-news-block">
                        <div class="news-blog-image <?php if($key==0): ?> image-show <?php endif; ?>">
                            <a href="bn/<?php echo e($news->id); ?>/<?php echo e($news->url_blog); ?>">
                                <?php if($news->main_image!=null): ?>
                                    <img src="book_image/<?php echo e($news->main_image); ?>" >
                                <?php else: ?>
                                <img src="images/blog-and-news.jpg" >
                                <?php endif; ?>
                            </a>
                        </div>
                        <div class="news-blog-title">
                            <a href="bn/<?php echo e($news->id); ?>/<?php echo e($news->url_blog); ?>"><?php echo e($news->title); ?></a>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>