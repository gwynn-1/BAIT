<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="<?php echo e(URL::asset("")); ?>">
    <link rel="icon" type="image/png" href="images/logo-bait.png"/>


    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owl-carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link id="mainlayout" rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/pretty-checkbox.css"/>
    <script src="js/mainscript.js" type="text/javascript"></script>
    <script src="owl-carousel/owl.carousel.min.js"></script>
    <title><?php echo e($title); ?></title>
</head>
<body>
<div class="to-the-top">
    <i class="fa fa-chevron-up fa-2x" aria-hidden="true"></i>
</div>
<div id="main-page">
    <?php echo $__env->make("layout.account-field", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
                        <form action="/search" enctype="multipart/form-data">
                            <div class="category-filter">
                                <select name="category" id="category" autocomplete="off">
                                    <option value="All" selected>Tất cả</option>
                                    <?php $__currentLoopData = $data['book_type']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($bt->id); ?>"><?php echo e($bt->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="border"></div>
                            <div class="search-field">
                                <input type="text" name="key" id="txtsearch" placeholder="Nhập từ khóa" />
                                <button type="submit" id="btn-search">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </div>
                            <div class="autocomplete">
                                <ul>

                                </ul>
                            </div>
                        </form>
                    </div>
                    <?php if(auth()->guard("readers")->check()): ?>
                    <div class="borrow-box">
                        <div class="link-to-borrow">
                                <span>
                                Quan tâm : <span>0</span> sách
                                </span>
                        </div>
                        <div class="cart-block">
                            <div class="cart-border"></div>
                            <div id="cart-items">
                            </div>
                            <div class="button-borrow-sec">
                                <a href="/checkout/cart" class="button-borrow">
                                    <span>Mục Yêu Thích</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php echo $__env->make('layout.menu-layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </header>
    <?php echo $__env->make('layout.cart-notification', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent("section-body"); ?>
    <footer>
        
        <div class="main-footer">
            <div class="col-md-3 logo-contact">
                <div class="logo-footer">
                    <img src="images/logo-bait.png" alt="Câu lạc bộ BAIT" width="50" height="50">

                </div>
                <div class="contact-footer">
                    <div class="destination contact-el">
                        <div class="des-image contact-image">
                            <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPGc+Cgk8cGF0aCBkPSJNMjU2LDBDMTY3LjY0MSwwLDk2LDcxLjYyNSw5NiwxNjBjMCwyNC43NSw1LjYyNSw0OC4yMTksMTUuNjcyLDY5LjEyNUMxMTIuMjM0LDIzMC4zMTMsMjU2LDUxMiwyNTYsNTEybDE0Mi41OTQtMjc5LjM3NSAgIEM0MDkuNzE5LDIxMC44NDQsNDE2LDE4Ni4xNTYsNDE2LDE2MEM0MTYsNzEuNjI1LDM0NC4zNzUsMCwyNTYsMHogTTI1NiwyNTZjLTUzLjAxNiwwLTk2LTQzLTk2LTk2czQyLjk4NC05Niw5Ni05NiAgIGM1MywwLDk2LDQzLDk2LDk2UzMwOSwyNTYsMjU2LDI1NnoiIGZpbGw9IiNGRkZGRkYiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
                        </div>
                        <div class="des-content contact-content">
                            <span>Khu phố 6, P.Linh Trung, Q.Thủ Đức, TP.Hồ Chí Minh.</span>
                        </div>
                    </div>
                    <div class="phone contact-el">
                        <div class="phone-image contact-image">
                            <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCIgdmlld0JveD0iMCAwIDM0LjU0NiAzNC41NDYiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDM0LjU0NiAzNC41NDY7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPGc+Cgk8cGF0aCBkPSJNMjkuMzMsMTkuMzM5Yy0yLjMyNi0wLjU0NS01LjMtMS45NjktNi4zNzctMy43MzdjLTAuNjAzLTAuOTg0LTAuNjY2LTIuMDk0LTAuMTc5LTMuMDQyICAgYzAuMDI3LTAuMDUxLDAuMDc0LTAuMTI4LDAuMTA5LTAuMTg4Yy0wLjAyOC0wLjIwOSwwLjAyMS0wLjQ4NiwwLjE3Mi0wLjg0N2MwLjAxMS0wLjAyNCwwLjAxMi0wLjAyNywwLjAyLTAuMDQ0SDExLjEyMiAgIGMwLjAwNiwwLjAxNCwwLjAwNiwwLjAxNCwwLjAxNCwwLjAzMmMwLDAsMC4wMDEsMC4wMDEsMC4wMDEsMC4wMDJjMC4yNjgsMC40MTgsMC41MDIsMC43OTIsMC42MjcsMS4wMzMgICBjMC40OTUsMC45NjEsMC40MzEsMi4wNy0wLjE3LDMuMDU1Yy0xLjA4LDEuNzctNC4wNTMsMy4xOTMtNi4zODEsMy43MzhMNC41NywzMC4xMjRjLTAuMDcsMS4xODMsMC43MDUsMi4xNDksMS43MjMsMi4xNDloMjEuOTU4ICAgYzEuMDE4LDAsMS43OTItMC45NjcsMS43MjEtMi4xNDlMMjkuMzMsMTkuMzM5eiBNMTMuNjgzLDI2Ljc2NWgtMi4wNjJjLTAuMzgsMC0wLjY4OC0wLjMwOS0wLjY4OC0wLjY4OHMwLjMwOC0wLjY4OCwwLjY4OC0wLjY4OCAgIGgyLjA2MmMwLjM3OSwwLDAuNjg4LDAuMzA5LDAuNjg4LDAuNjg4UzE0LjA2MiwyNi43NjUsMTMuNjgzLDI2Ljc2NXogTTEzLjY4MywyNC4xNDNoLTIuMDYyYy0wLjM4LDAtMC42ODgtMC4zMDgtMC42ODgtMC42ODcgICBjMC0wLjM4MiwwLjMwOC0wLjY4OCwwLjY4OC0wLjY4OGgyLjA2MmMwLjM3OSwwLDAuNjg4LDAuMzA2LDAuNjg4LDAuNjg4QzE0LjM3MSwyMy44MzUsMTQuMDYyLDI0LjE0MywxMy42ODMsMjQuMTQzeiAgICBNMTMuNjgzLDIxLjUyMWgtMi4wNjJjLTAuMzgsMC0wLjY4OC0wLjMwOC0wLjY4OC0wLjY4OGMwLTAuMzc5LDAuMzA4LTAuNjg4LDAuNjg4LTAuNjg4aDIuMDYyYzAuMzc5LDAsMC42ODgsMC4zMDksMC42ODgsMC42ODggICBTMTQuMDYyLDIxLjUyMSwxMy42ODMsMjEuNTIxeiBNMTguMzA0LDI2Ljc2NWgtMi4wNjFjLTAuMzgsMC0wLjY4OC0wLjMwOS0wLjY4OC0wLjY4OHMwLjMwOS0wLjY4OCwwLjY4OC0wLjY4OGgyLjA2MiAgIGMwLjM3OSwwLDAuNjg4LDAuMzA5LDAuNjg4LDAuNjg4QzE4Ljk5MSwyNi40NTYsMTguNjgzLDI2Ljc2NSwxOC4zMDQsMjYuNzY1eiBNMTguMzA0LDI0LjE0M2gtMi4wNjEgICBjLTAuMzgsMC0wLjY4OC0wLjMwOC0wLjY4OC0wLjY4N2MwLTAuMzgyLDAuMzA5LTAuNjg4LDAuNjg4LTAuNjg4aDIuMDYyYzAuMzc5LDAsMC42ODgsMC4zMDYsMC42ODgsMC42ODggICBDMTguOTkxLDIzLjgzNSwxOC42ODMsMjQuMTQzLDE4LjMwNCwyNC4xNDN6IE0xOC4zMDQsMjEuNTIxaC0yLjA2MWMtMC4zOCwwLTAuNjg4LTAuMzA4LTAuNjg4LTAuNjg4ICAgYzAtMC4zNzksMC4zMDktMC42ODgsMC42ODgtMC42ODhoMi4wNjJjMC4zNzksMCwwLjY4OCwwLjMwOSwwLjY4OCwwLjY4OEMxOC45OTEsMjEuMjEyLDE4LjY4MywyMS41MjEsMTguMzA0LDIxLjUyMXogICAgTTIyLjkyNCwyNi43NjVoLTIuMDYyYy0wLjM3OSwwLTAuNjg3LTAuMzA5LTAuNjg3LTAuNjg4czAuMzA4LTAuNjg4LDAuNjg3LTAuNjg4aDIuMDYyYzAuMzgxLDAsMC42ODgsMC4zMDksMC42ODgsMC42ODggICBDMjMuNjEyLDI2LjQ1NiwyMy4zMDYsMjYuNzY1LDIyLjkyNCwyNi43NjV6IE0yMi45MjQsMjQuMTQzaC0yLjA2MmMtMC4zNzksMC0wLjY4Ny0wLjMwOC0wLjY4Ny0wLjY4NyAgIGMwLTAuMzgyLDAuMzA4LTAuNjg4LDAuNjg3LTAuNjg4aDIuMDYyYzAuMzgxLDAsMC42ODgsMC4zMDYsMC42ODgsMC42ODhDMjMuNjEyLDIzLjgzNSwyMy4zMDYsMjQuMTQzLDIyLjkyNCwyNC4xNDN6ICAgIE0yMi45MjQsMjEuNTIxaC0yLjA2MmMtMC4zNzksMC0wLjY4Ny0wLjMwOC0wLjY4Ny0wLjY4OGMwLTAuMzc5LDAuMzA4LTAuNjg4LDAuNjg3LTAuNjg4aDIuMDYyYzAuMzgxLDAsMC42ODgsMC4zMDksMC42ODgsMC42ODggICBDMjMuNjEyLDIxLjIxMiwyMy4zMDYsMjEuNTIxLDIyLjkyNCwyMS41MjF6IE0zNC4zNzIsMTMuMTE0Yy0wLjA0MywwLjIxNi0wLjA0NSwwLjQ0MS0wLjEzLDAuNjQ2ICAgYy0wLjQ5NywxLjIwMi0xLjQyOSwyLjE5Ny0yLjExNSwzLjMwNWMtMC44ODUsMS40MTQtOC40MDYtMS42MzQtNy40MzctMy41MjFjMC4zNjUtMC42OTgsMS43ODktMi42MjYsMS44OTYtMy40MDEgICBjMC4wOTgtMC42OTItMC44MTgtMS4yMzMtMS42NjQtMS4zMDJjLTIuMjMyLTAuMTgxLTUuMDgzLTAuMDE3LTcuNDUyLTAuMDAydjAuMDAyYy0wLjA2MywwLTAuMTMzLTAuMDAxLTAuMTk4LTAuMDAxICAgYy0wLjA2NCwwLTAuMTM0LDAuMDAxLTAuMTk3LDAuMDAxVjguODM5Yy0yLjM2OS0wLjAxNS01LjIyLTAuMTc4LTcuNDUyLDAuMDAyYy0wLjg0NiwwLjA2OS0xLjc2MiwwLjYxLTEuNjY1LDEuMzAyICAgYzAuMTA4LDAuNzc1LDEuNTMxLDIuNzAzLDEuODk2LDMuNDAxYzAuOTcxLDEuODg3LTYuNTUsNC45MzUtNy40MzUsMy41MjFjLTAuNjg4LTEuMTA4LTEuNjE4LTIuMTAzLTIuMTE2LTMuMzA1ICAgYy0wLjA4NC0wLjIwNS0wLjA4Ni0wLjQzLTAuMTI5LTAuNjQ2Yy0xLjEwNC00LjkzLDMuMTQ4LTkuOTYsOS41NTEtMTAuNDc2YzIuNDQ1LTAuMTk4LDQuODk2LTAuMzEsNy4zNS0wLjM1NFYyLjI3MiAgIGMwLjA2NiwwLjAwMSwwLjEzMSwwLjAwNSwwLjE5NywwLjAwNmMwLjA2NS0wLjAwMSwwLjEzMS0wLjAwNSwwLjE5OC0wLjAwNnYwLjAxMmMyLjQ1MiwwLjA0NCw0LjkwMywwLjE1Niw3LjM1LDAuMzU0ICAgQzMxLjIyMiwzLjE1MywzNS40NzQsOC4xODUsMzQuMzcyLDEzLjExNHoiIGZpbGw9IiNGRkZGRkYiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
                        </div>
                        <div class="phone-content contact-content">
                            <span>+84 xxx xxx xxxx</span>
                        </div>
                    </div>
                    <div class="mailclub contact-el">
                        <div class="mailclub-image contact-image">
                            <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDY3LDYxSDQ1QzIwLjIxOCw2MSwwLDgxLjE5NiwwLDEwNnYzMDBjMCwyNC43MiwyMC4xMjgsNDUsNDUsNDVoNDIyYzI0LjcyLDAsNDUtMjAuMTI4LDQ1LTQ1VjEwNiAgICBDNTEyLDgxLjI4LDQ5MS44NzIsNjEsNDY3LDYxeiBNNDYwLjc4Niw5MUwyNTYuOTU0LDI5NC44MzNMNTEuMzU5LDkxSDQ2MC43ODZ6IE0zMCwzOTkuNzg4VjExMi4wNjlsMTQ0LjQ3OSwxNDMuMjRMMzAsMzk5Ljc4OHogICAgIE01MS4yMTMsNDIxbDE0NC41Ny0xNDQuNTdsNTAuNjU3LDUwLjIyMmM1Ljg2NCw1LjgxNCwxNS4zMjcsNS43OTUsMjEuMTY3LTAuMDQ2TDMxNywyNzcuMjEzTDQ2MC43ODcsNDIxSDUxLjIxM3ogTTQ4MiwzOTkuNzg3ICAgIEwzMzguMjEzLDI1Nkw0ODIsMTEyLjIxMlYzOTkuNzg3eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
                        </div>
                        <div class="mailclub-content contact-content">
                            <span>bait@gmail.com</span>
                        </div>
                    </div>

                </div>
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