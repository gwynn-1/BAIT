@extends('layout.layout')

@section('section-body')
<section>
    <link rel="stylesheet" href="css/search.css">
    <div class="body-content">
        <div class="title-result">
            <p>Có <span id="result-count">{{$count}}</span> kết quả cho : <span id="keyword">{{$key}}</span> {{($name_category!=null) ? "thuộc loại ".$name_category->name : ""}}</p>
        </div>

        <div class="books-container">
            @if(isset($books))
            @foreach($books as $key=>$book)
                <div class="col-sm-3 item-book-col">
                    <div class="item-book item-all-book">
                        <div class="head-item">
                            <div class="borrow-button" data-id="{{$book->id}}" data-name="{{$book->name}}" data-image="{{($book->image==null) ? "images/convallis-pharetra.jpg": "book_image/".$book->image}}">
                                Quan tâm sách
                            </div>
                            <div class="item-book-image">
                                <a href="b/{{$book->id}}/{{$book->url_book}}" class="link-to-book">
                                    @if($book->image==null)
                                        <img class="book-image-sec" src="images/convallis-pharetra.jpg" alt="">
                                    @else
                                        <img class="book-image-sec" src="book_image/{{$book->image}}" alt="" width="323" height="369">
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
                </div>
            @endforeach
            @endif
        </div>
    </div>
</section>
@endsection