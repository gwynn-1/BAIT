<div class="header-menu">
    <div class="menu-inside">
        <div class="menu-categories">
            <div class="categories" onclick="MenuClick(this)">
                <div class="bar-container">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
                <span class="text-category">Thể loại</span>
            </div>
            <div class="dropdown-category">
                <ul>
                    <?php $__currentLoopData = $data['book_type']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="category/<?php echo e($bt->type_url); ?>"><?php echo e($bt->name); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
        <div class="menu-main">
            <nav>
                <ul>
                    <li><a href="<?php echo e(url("/")); ?>">Trang chủ</a></li>
                    <li><a href="#">Về chúng tôi</a></li>
                    <li><a href="<?php echo e(url('contact')); ?>">Liên hệ</a></li>
                    <li><a href="<?php echo e(url('blognews')); ?>">Blog & Tin tức</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<div class="header-menu-mobile">
    <div class="menu-head" onclick="MenuClick(this)">
        <div class="bar-container" id="bar-mobile">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
        <span class="text-menu">Menu</span>
    </div>
    <div class="menu-content">
        <ul>
            <li id="nav-category">
                <span>Thể loại</span>
                <ul>
                    <?php $__currentLoopData = $data['book_type']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="category/<?php echo e($bt->type_url); ?>"><?php echo e($bt->name); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </li>
            <li><a href="/">Trang chủ</a></li>
            <li><a href="#">Về chúng tôi</a></li>
            <li><a href="#">Liên hệ</a></li>
            <li><a href="#">Blog & Tin tức</a></li>
        </ul>
    </div>
</div>