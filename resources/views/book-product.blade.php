@extends('layout.layout')

@section('section-body')
    <section>
        <script src="js/ap-product.js"></script>
        <link rel="stylesheet" href="css/product.css">
        @include('layout.cart-notification')
        <div class="body-content">
            <div class="content-title">
                <a href="/">Home</a>
                <span>    >    </span>
                <a href="category/{{$category_books->type_url}}">{{$category_books->name}}</a>
                <span>    >    </span>
                <span class="current-category">{{$books_info->name}}</span>
            </div>
            <div class="book-section col-md-9">
                <div class="book-main-image">
                    @if($books_info->image!=null)
                        <img src="book_image/{{$books_info->image}}" alt="demo">
                    @else
                    <img src="images/convallis-pharetra.jpg" alt="demo">
                    @endif
                </div>
                <div class="book-info">
                    <div class="book-main-title">
                        <h2>{{$books_info->name}}</h2>
                    </div>
                    <div class="book-author">
                        <p>{{$books_info->author}}</p>
                    </div>
                    <div class="borrow-big-button" data-id="{{$books_info->id}}" data-author="{{$books_info->author}}" data-name="{{$books_info->name}}" data-image="{{($books_info->image==null) ? "images/convallis-pharetra.jpg": $books_info->image}}">
                        Quan tâm sách
                    </div>
                </div>
                <div class="book-detail">
                    <div class="book-detail-content">
                        <p>
                            {{$books_info->detail}}
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ante metus dictum at tempor commodo. Et netus et malesuada fames ac turpis egestas sed tempus. Convallis convallis tellus id interdum velit laoreet id donec. Vel pharetra vel turpis nunc eget lorem dolor sed. Arcu non odio euismod lacinia. Lectus proin nibh nisl condimentum id venenatis a condimentum. Odio euismod lacinia at quis. Sed cras ornare arcu dui. Egestas quis ipsum suspendisse ultrices. Nec ultrices dui sapien eget mi proin sed libero enim. Et tortor consequat id porta nibh venenatis cras sed felis. Duis ultricies lacus sed turpis tincidunt id aliquet. Fringilla ut morbi tincidunt augue interdum. Urna et pharetra pharetra massa massa. Pharetra sit amet aliquam id diam. Odio euismod lacinia at quis risus sed vulputate odio ut. Nulla pellentesque dignissim enim sit amet venenatis urna. Elementum nisi quis eleifend quam adipiscing vitae proin sagittis nisl. Bibendum enim facilisis gravida neque convallis a cras semper auctor.
                        </p>
                    </div>
                    <div class="expand-button">Xem thêm</div>
                </div>
                <div class="related-book">
                    <div class="content-title">
                        <span>Sách cùng thể loại</span>
                    </div>
                    <div class="owl-carousel owl-theme owl-carousel-book">
                        @foreach($same_books as $book)
                        <div class="item item-book item-book-product item-rec-book">
                            <div class="head-item">
                                <div class="borrow-button" data-id="{{$book->id}}" data-author="{{$book->author}}" data-name="{{$book->name}}" data-image="{{($book->image==null) ? "images/convallis-pharetra.jpg": "book_image/".$book->image}}">
                                    Quan tâm sách
                                </div>
                                <div class="item-book-image">
                                    <a href="b/{{$book->id}}/{{$book->url_book}}" class="link-to-book">
                                        @if($book->image != null)
                                            <img class="book-image-sec" src="book_image/{{$book->image}}" alt="">
                                        @else
                                        <img class="book-image-sec book-image-sec-small" src="images/convallis-pharetra.jpg" alt="">
                                        @endif
                                    </a>
                                </div>
                            </div>
                            <div class="book-title">
                                <a href="b/{{$book->id}}/{{$book->url_book}}">{{$book->name}}</a>
                                @if($book->available>0)
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
            <div class="recommend-section col-md-3">
                <div class="content-title">
                    <span>Sách được yêu thích</span>
                </div>
                <div class="fav-book-section">
                    @foreach($recommend_book as $rec)
                    <div class="small-book-block">
                        <div class="small-image">
                            <a href="b/{{$rec->id}}/{{$rec->url_book}}" class="link-to-book">
                                @if($rec->image!=null)
                                    <img src="book_image/{{$rec->image}}" alt="favorite book">
                                @else
                                <img src="images/convallis-pharetra.jpg" alt="favorite book">
                                @endif
                            </a>
                        </div>
                        <div class="book-title small-book-title">
                            <a href="b/{{$rec->id}}/{{$rec->url_book}}">{{$rec->name}}</a>
                            @if($book->available>0)
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
        </div>
    </section>
@endsection