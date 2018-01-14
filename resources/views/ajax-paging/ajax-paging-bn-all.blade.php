<div class="blog-blocks">
    @foreach($blog_news as $bn)
    <div class="blog-big-block">
        <div class="blog-image">
            <a href="bn/{{$bn->id}}/{{$bn->url_blog}}">
                @if($bn->main_image!=null)
                    <img src="book_image/{{$bn->main_image}}">
                @else
                <img src="images/blog-and-news.jpg">
                    @endif
            </a>
        </div>
        <div class="blog-info">
            <div class="blog-title">
                <a href="bn/{{$bn->id}}/{{$bn->url_blog}}">{{$bn->title}}</a>
            </div>
            <div class="blog-describe">
                <p>
                    {{$bn->description}}
                </p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@include("ajax-paging.paging-link",["paginator"=>$blog_news])