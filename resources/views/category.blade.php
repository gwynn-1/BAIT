@extends('layout.layout')

@section('section-body')
    <section>
        <link rel="stylesheet" href="css/category.css"/>
        <link rel="stylesheet" href="css/pretty-checkbox.css"/>
        <div class="main-section-body">
            <div class="content-title">
                <a href="/">Home</a>
                <span>    >    </span>
                <span class="current-category">{{$current_category[0]->name}}</span>
            </div>
            <div class="category-section">
                <div class="category-menu-section">
                    <div class="content-title">
                        <span>Thể loại</span>
                    </div>
                    <div class="category-menu">
                        <ul>
                            @foreach($book_type as $bt)
                                @if($bt->name == $current_category[0]->name)
                                    <li><a class="current-category" href="category/{{$bt->type_url}}">{{$bt->name}}</a></li>
                                @else
                                    <li><a href="category/{{$bt->type_url}}">{{$bt->name}}</a></li>
                                @endif
                            @endforeach
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
                    @include("ajax-paging.ajax-paging-category")
                </div>
            </div>
        </div>
        <script src="js/ap-index.js"></script>
    </section>
@endsection