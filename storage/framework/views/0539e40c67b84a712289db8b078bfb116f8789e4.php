<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="<?php echo e(URL::asset("")); ?>">
    <link rel="icon" type="image/png" href="images/logo-bait.png"/>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/js/bootstrap.min.js">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owl-carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link id="mainlayout" rel="stylesheet" href="css/layout.css">
    <script src="js/mainscript.js" type="text/javascript"></script>

    <script src="owl-carousel/owl.carousel.min.js"></script>
    <title><?php echo e($title); ?></title>
</head>
<body>
<div class="to-the-top">
    <i class="fa fa-chevron-up fa-2x" aria-hidden="true"></i>
</div>
<div id="main-page">
    <div id="account-field">
        <div class="login-signup">
            <div class="login-signup-button">
                <p>Login</p>
            </div>
            <div class="login-signup-button">
                <p>Sign up</p>
            </div>
        </div>
        <div class="user-field">
            <div class="logout-button login-signup-button">
                <p>Thoát</p>
            </div>
            <div class="user-name">
                Xin chào <a href="#" id="user"><i class="fa fa-user-circle-o" aria-hidden="true"></i>     Huy</a>
            </div>
        </div>
    </div>

    <header id="main-header">
        <div class="header-content">
            <div id="book-logo" class="col-xs-12 col-sm-12 col-md-3">
                <a href="/" class="logo-link">
                    <img src="images/logo-bait.png" alt="Logo" width="100" height="100">
                </a>
            </div>
            <div id="sticky-box" class="col-xs-12 col-sm-12 col-md-9">
                <div class="sticky">
                    <div class="search-box">
                        <form action="" enctype="multipart/form-data">
                            <div class="category-filter">
                                <select name="category" id="category">
                                    <option value="All" selected>Tất cả</option>
                                    <?php $__currentLoopData = $book_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($bt->id); ?>"><?php echo e($bt->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="border"></div>
                            <div class="search-field">
                                <input type="text" name="txtsearch" id="txtsearch" placeholder="Nhập từ khóa" />
                                <button type="submit" name="btnsubmit" id="btn-search">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </div>
                            <div class="autocomplete">
                                <ul>

                                </ul>
                            </div>
                        </form>
                    </div>
                    <div class="borrow-box">
                        <a href="javascript:void()" class="link-to-borrow">
                                <span>
                                Quan tâm : <span>2</span> sách
                                </span>
                        </a>
                        <div class="cart-block">
                            <div class="cart-border"></div>
                            <div class="cart-item-block">
                                <img src="images/convallis-pharetra.jpg" alt="test" width="90" height="95">
                                <div class="item-info">
                                    <div class="delete-item">
                                        <span class="ui-icon ui-icon-close"></span>
                                    </div>
                                    <p class="book-name">Convallis pharestra</p>
                                    <p class="book-author">S.James</p>
                                </div>
                            </div>
                            <div class="cart-item-block">
                                <img src="images/convallis-pharetra.jpg" alt="test" width="90" height="95">
                                <div class="item-info">
                                    <div class="delete-item">
                                        <span class="ui-icon ui-icon-close"></span>
                                    </div>
                                    <p class="book-name">Convallis pharestra</p>
                                    <p class="book-author">S.James</p>
                                </div>
                            </div>
                            <div class="button-borrow-sec">
                                <a href="#" class="button-borrow">
                                    <span>Mượn</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                            <?php $__currentLoopData = $book_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="category/<?php echo e($bt->type_url); ?>"><?php echo e($bt->name); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
                <div class="menu-main">
                    <nav>
                        <ul>
                            <li><a href="/">Trang chủ</a></li>
                            <li><a href="#">Về chúng tôi</a></li>
                            <li><a href="#">Liên hệ</a></li>
                            <li><a href="#">Blog & Tin tức</a></li>
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
                            <?php $__currentLoopData = $book_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
    </header>
    <?php echo $__env->yieldContent("section-body"); ?>
    <footer>
        <div class="main-footer">
            <div class="col-md-3 logo-footer">
                <img src="images/logo-bait.png" alt="Câu lạc bộ BAIT" width="170" height="170">
            </div>
            <div class="col-md-6 describe">
                <div id="des-content">
                    <h2>Trường Đại học Công Nghệ Thông Tin TP.HCM</h2>
                    <br/>
                    <h1>Câu lạc bộ Sách & Hành động UIT</h1>
                </div>
            </div>
            <div class="col-md-3 fanpage">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fclb.sachvahanhdong.uit%2F&tabs&width=190&height=180&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1272572049539289" width="190" height="180" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            </div>
        </div>
    </footer>
</div>
</body>
</html>