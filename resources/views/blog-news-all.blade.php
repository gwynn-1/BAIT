@extends('layout.layout')
@section('section-body')
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
                @include("ajax-paging.ajax-paging-bn-all")
                </div>
            </div>
        </div>
    </section>
@endsection