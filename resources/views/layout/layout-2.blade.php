<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="{{URL::asset("")}}">
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
    <title>{{$title}}</title>
</head>
<body>
<div class="to-the-top">
    <i class="fa fa-chevron-up fa-2x" aria-hidden="true"></i>
</div>
<div id="main-page">
    @include("layout.account-field")
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
                                    @foreach($data['book_type'] as $bt)
                                        <option value="{{$bt->id}}">{{$bt->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="border"></div>
                            <div class="search-field">
                                <input type="text" name="txtsearch" id="txtsearch" placeholder="Nhập từ khóa" />
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
                </div>
            </div>
        </div>
        @include('layout.menu-layout')
    </header>
    @include('layout.cart-notification')
    @yield("section-body")
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