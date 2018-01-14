<?php $__env->startSection('section-body'); ?>
    <section>
        <link rel="stylesheet" href="css/blog-news-all.css">
        <script src="js/ap-blognews.js"></script>
        <div class="body-content">
            <div class="col-md-3 filter-sec">
                <div class="content-title">
                    <span>Tìm kiếm</span>
                </div>
                <div class="filter-block">
                    <form method="GET" action="">
                        <input type="text" placeholder="Nhập từ khóa" name="ts" id="txtsearch-blog">
                        <button type="submit" id="btn-search-blog">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-md-9 blog-sec">
                <div class="content-title">
                    <span>Blog và Tin tức</span>
                </div>
                <div class="blog-wrapper">
                <?php echo $__env->make("ajax-paging.ajax-paging-bn-all", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>