<?php $__env->startSection('section-body'); ?>
    <section>
        <link rel="stylesheet" href="css/category.css"/>

        <?php echo $__env->make('layout.cart-notification', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="main-section-body">
            <div class="content-title">
                <a href="/">Home</a>
                <span>    >    </span>
                <span class="current-category"><?php echo e($current_category[0]->name); ?></span>
            </div>
            <div class="category-section">
                <div class="category-menu-section">
                    <div class="content-title">
                        <span>Thể loại</span>
                    </div>
                    <div class="category-menu">
                        <ul>
                            <?php $__currentLoopData = $data['book_type']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($bt->name == $current_category[0]->name): ?>
                                    <li><a class="current-category" href="category/<?php echo e($bt->type_url); ?>"><?php echo e($bt->name); ?></a></li>
                                <?php else: ?>
                                    <li><a href="category/<?php echo e($bt->type_url); ?>"><?php echo e($bt->name); ?></a></li>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>

                    <div class="content-title">
                        <span>Filter</span>
                    </div>

                    <div class="filter-book">
                        <form>
                            <div class="pretty p-switch p-fill">
                                <input type="radio" name="sort" id="all-sort" value="all" checked autocomplete="off"/>
                                <div class="state">
                                    <label>All</label>
                                </div>
                            </div>
                            <div class="pretty p-switch p-fill">
                                <input type="radio" name="sort" value="recommend" autocomplete="off"/>
                                <div class="state">
                                    <label>Sách hay trong tuần</label>
                                </div>
                            </div>
                            <div class="pretty p-switch p-fill">
                                <input type="radio" name="sort" value="available" autocomplete="off"/>
                                <div class="state">
                                    <label>Sách đang còn</label>
                                </div>
                            </div>
                            <div class="pretty p-switch p-fill">
                                <input type="radio" name="sort" value="favorite" autocomplete="off"/>
                                <div class="state">
                                    <label>Sách được yêu thích</label>
                                </div>
                            </div>
                        </form>
                        <form id="form-sort">
                            <div class="show-items">
                                <label for="txtsort" class="show-item-label">Tìm kiếm :</label>
                                <input type="text" name="txtsort" class="txtsort" placeholder="Từ khóa" autocomplete="off"/>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="book-wrapper">
                    <?php echo $__env->make("ajax-paging.ajax-paging-category", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
        </div>
        <script src="js/ap-index.js"></script>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>