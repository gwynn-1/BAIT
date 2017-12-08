@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{ backpack_avatar_url(Auth::user()) }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <small><small><a href="{{ route('backpack.account.info') }}"><span><i class="fa fa-user-circle-o"></i> {{ trans('backpack::base.my_account') }}</span></a> &nbsp;  &nbsp; <a href="{{ backpack_url('logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a></small></small>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          {{-- <li class="header">{{ trans('backpack::base.administration') }}</li> --}}
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          <li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
            <li><a href="{{ backpack_url('book_type') }}"><i class="fa fa-wpforms"></i> <span>Thể loại Sách</span></a></li>
            <li><a href="{{ backpack_url('book') }}"><i class="fa fa-book"></i> <span>Sách</span></a></li>
            <li><a href="{{ backpack_url('reader') }}"><i class="fa fa-users"></i> <span>Độc giả</span></a></li>
            <li><a href="{{ backpack_url('blog_news') }}"><i class="fa fa-newspaper-o"></i> <span>Blog & Tin tức</span></a></li>
            <li><a href="{{ backpack_url('borrow_detail') }}"><i class="fa fa-suitcase"></i> <span>Chi Tiết Sách Mượn</span></a></li>
            <li><a href="{{ backpack_url('comment_blog') }}"><i class="fa fa-comment"></i> <span>Bình luận về Blog</span></a></li>
            <li><a href="{{ backpack_url('repcomment_blog') }}"><i class="fa fa-comments"></i> <span>Reply Bình luận về Blog</span></a></li>
            <li><a href="{{ backpack_url('comment_book') }}"><i class="fa fa-comment-o"></i> <span>Bình luận về Sách</span></a></li>
            <li><a href="{{ backpack_url('repcomment_book') }}"><i class="fa fa-comments-o"></i> <span>Reply Bình luận về Sách</span></a></li>
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/elfinder') }}"><i class="fa fa-files-o"></i> <span>File manager</span></a></li>

          <!-- ======================================= -->
          {{-- <li class="header">Other menus</li> --}}
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif
