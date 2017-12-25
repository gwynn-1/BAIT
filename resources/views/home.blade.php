@extends('layout.layout')

@section('section-body')
<section>
    <script src="sliderengine/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
    <script src="sliderengine/initslider-1.js"></script>
    <div id="amazingslider-wrapper-1">
        <div id="amazingslider-1">
            <ul class="amazingslider-slides" style="display:none;">
                @foreach($breaking_news as $br)
                <li>
                    <a href="blognews/{{$br->id}}/{{$br->url_blog}}">
                        <img src="book_image/{{$br->main_image}}" alt="slider-111"  title="{{$br->title}}" />
                    </a>
                </li>
                @endforeach
            </ul>
            <ul class="amazingslider-thumbnails" style="display:none;">
                @foreach($breaking_news as $br)
                    <li>
                            <img src="book_image/{{$br->main_image}}" alt="slider-111"  title="{{$br->title}}" />
                    </li>
                @endforeach
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
                @foreach($blog_news as $bn)
                <div class="item-blog item">
                    <div>
                        <a href="blognews/{{$bn->id}}/{{$bn->url_blog}}">
                            @if($bn->main_image==null)
                                <img src="images/blog-and-news.jpg" alt="blog">
                            @else
                                <img src="book_image/{{$bn->main_image}}" alt="blog">
                            @endif
                        </a>
                    </div>
                    <div class="item-title">
                        <a href="blognews/{{$bn->id}}/{{$bn->url_blog}}">{{$bn->title}}</a>
                    </div>
                    <div class="border-blog-item"></div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="recommended-book">
            <div class="content-title">
                <span>Sách hay nên đọc</span>
            </div>
            <div class="owl-carousel owl-theme owl-carousel-book">
                @foreach($recommend_book as $r_books)
                <div class="item item-book">
                    <div class="head-item">
                        <div class="borrow-button">
                            Quan tâm sách
                        </div>
                        <div class="item-book-image">
                            <a href="#" class="link-to-book">
                                @if($r_books->image==null)
                                <img class="book-image-sec" src="images/convallis-pharetra.jpg" alt="">
                                @else
                                    <img class="book-image-sec" src="book_image/{{$r_books->image}}" alt="" width="314" height="348">
                                @endif
                            </a>
                        </div>
                    </div>
                    <div class="book-title">
                        <a href="#">{{$r_books->name}}</a>
                            @if($r_books->available>0)
                            <p class="available-book book-status">
                                Còn sách
                            </p>
                            @else
                            <p class="non-available-book book-status">
                                Hết sách
                            </p>
                            @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="all-book">
            <div class="content-title">
                <span>Thế giới sách</span>
            </div>
            <div class="book-wrapper">
                @include("ajax-paging.ajax-paging-index")
            </div>
        </div>
    </div>
    <script src="js/ap-index.js"></script>
</section>
@endsection