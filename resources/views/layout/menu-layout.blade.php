<div class="header-menu">
    <div class="menu-inside">
        <div class="menu-categories">
            <div class="categories" onclick="MenuClick(this)">
                <div class="bar-container">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
                <span class="text-category">Thể loại</span>
            </div>
            <div class="dropdown-category">
                <ul>
                    @foreach($data['book_type'] as $bt)
                        <li><a href="category/{{$bt->type_url}}">{{$bt->name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="menu-main">
            <nav>
                <ul>
                    <li><a href="{{url("/")}}">Trang chủ</a></li>
                    <li><a href="#">Về chúng tôi</a></li>
                    <li><a href="{{url('contact')}}">Liên hệ</a></li>
                    <li><a href="{{url('blognews')}}">Blog & Tin tức</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<div class="header-menu-mobile">
    <div class="menu-head" onclick="MenuClick(this)">
        <div class="bar-container" id="bar-mobile">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
        <span class="text-menu">Menu</span>
    </div>
    <div class="menu-content">
        <ul>
            <li id="nav-category">
                <span>Thể loại</span>
                <ul>
                    @foreach($data['book_type'] as $bt)
                        <li><a href="category/{{$bt->type_url}}">{{$bt->name}}</a></li>
                    @endforeach
                </ul>
            </li>
            <li><a href="/">Trang chủ</a></li>
            <li><a href="#">Về chúng tôi</a></li>
            <li><a href="#">Liên hệ</a></li>
            <li><a href="#">Blog & Tin tức</a></li>
        </ul>
    </div>
</div>