@extends('layout.layout')

@section('section-body')
    <section>
        <link rel="stylesheet" type="text/css" href="css/blog-news.css">
        <div class="body-content">
            <div class="left-section col-md-9">
                <div class="news-blog-section">
                    <div class="news-title">
                        <h2>{{$blog_news->title}}</h2>
                    </div>
                    <div class="news-created-date">
                        <p>{{$blog_news->created_at}}</p>
                    </div>
                    <div class="news-blog-content">
                        {!! $blog_news->content !!}
                    </div>
                    <div class="news-author">
                        <p> <span>Tác giả : </span>{{$blog_news->author}}</p>
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
            <div class="right-section col-md-3">
                <div class="content-title">
                    <span>Tin nổi bật</span>
                </div>
                <div class="hot-news-blog">
                    @foreach($breaking as $key=>$news)
                    <div class="dynamic-news-block">
                        <div class="news-blog-image @if($key==0) image-show @endif">
                            <a href="bn/{{$news->id}}/{{$news->url_blog}}">
                                @if($news->main_image!=null)
                                    <img src="book_image/{{$news->main_image}}" >
                                @else
                                <img src="images/blog-and-news.jpg" >
                                @endif
                            </a>
                        </div>
                        <div class="news-blog-title">
                            <a href="bn/{{$news->id}}/{{$news->url_blog}}">{{$news->title}}</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection