@extends('layout.layout-2')

@section('section-body')
    <section>
        <link rel="stylesheet" href="css/cart-page.css">
        <script src="js/cart.js"></script>
        @if(session()->has("accept_cart_failed"))
            <div id="cart-accept-fail" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-body">
                            <p style="text-align: center;color: red; font-weight: bold">{!! session("accept_cart_failed") !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function () {
                    $("#cart-accept-fail").modal("show");
                });
            </script>
        @endif
        <div class="body-content">
            <div class="cart-available">
            @if($count > 0)
                <div class="user-info-section">
                    <div class="title-user title-cart-page">
                        <p>Thông tin độc giả</p>
                    </div>
                    <div class="info-user">
                        <div class="info-section">
                            <div class="field-section">
                                <span>Tên độc giả : </span>
                            </div>
                            <div class="field-content-section">
                                <span id="name">{{$reader->name}}</span>
                            </div>
                        </div>
                        <div class="info-section">
                            <div class="field-section">
                                <span>Email : </span>
                            </div>
                            <div class="field-content-section">
                                <span id="email">{{$reader->email}}</span>
                            </div>
                        </div>
                        <div class="info-section">
                            <div class="field-section">
                                <span>SĐT : </span>
                            </div>
                            <div class="field-content-section">
                                <span id="sdt">{{$reader->sdt}}</span>
                            </div>
                        </div>
                        <div class="info-section">
                            <div class="field-section">
                                <span>Trường : </span>
                            </div>
                            <div class="field-content-section">
                                <span id="school">{{$reader->school}}</span>
                            </div>
                        </div>
                        <div class="info-section">
                            <div class="field-section">
                                <span>MSSV : </span>
                            </div>
                            <div class="field-content-section">
                                <span id="mssv">{{$reader->mssv}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart-info-section">
                <div class="title-cart title-cart-page">
                    <p>Đơn hàng : <span>{{$count}}</span> sách</p>
                </div>
                <div class="cart-items-block">
                    @foreach($cart as $item)
                        <div class="cart-item">
                            <div class="image-cart">
                                <img src="{{$item->options->image}}" alt=""/>
                            </div>
                            <div class="cart-info">
                                <div class="book-name">
                                    <p>{{$item->name}}</p>
                                </div>
                                <div class="book-section">
                                    <div class="book-author">
                                        <p>{{$item->options->author}}</p>
                                    </div>
                                    <div class="delete-button" data-rowid="{{$item->rowId}}">
                                        <i class="fa fa-trash fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="cart-upload-button" onclick="location.href = '/checkout/acceptcart';return false;">
                    <span>Mượn sách</span>
                </div>
            </div>
            @else
                <p class='empty-cart'>Danh sách quan tâm trống, hãy trở lại trang chủ để tiếp tục.</p>
            @endif
            </div>

            <div class="recommended-book">
                <div class="content-title">
                    <span>Sách hay nên đọc</span>
                </div>
                <div class="owl-carousel owl-theme owl-carousel-book">
                    @foreach($recommend_book as $r_books)
                        <div class="item item-book item-rec-book">
                            <div class="head-item">
                                <div class="borrow-button" data-id="{{$r_books->id}}" data-author="{{$r_books->author}}" data-name="{{$r_books->name}}" data-image="{{($r_books->image==null) ? "images/convallis-pharetra.jpg": "book_image/".$r_books->image}}">
                                    Quan tâm sách
                                </div>
                                <div class="item-book-image">
                                    <a href="b/{{$r_books->id}}/{{$r_books->url_book}}" class="link-to-book">
                                        @if($r_books->image==null)
                                            <img class="book-image-sec" src="images/convallis-pharetra.jpg" alt="">
                                        @else
                                            <img class="book-image-sec" src="book_image/{{$r_books->image}}" alt="" width="314" height="348">
                                        @endif
                                    </a>
                                </div>
                            </div>
                            <div class="book-title">
                                <a href="b/{{$r_books->id}}/{{$r_books->url_book}}">{{$r_books->name}}</a>
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
        </div>


    </section>
@endsection