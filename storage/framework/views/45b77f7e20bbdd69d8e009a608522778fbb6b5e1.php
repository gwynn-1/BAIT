<?php if(Auth::check()): ?>
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?php echo e(backpack_avatar_url(Auth::user())); ?>" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?php echo e(Auth::user()->name); ?></p>
            <small><small><a href="<?php echo e(route('backpack.account.info')); ?>"><span><i class="fa fa-user-circle-o"></i> <?php echo e(trans('backpack::base.my_account')); ?></span></a> &nbsp;  &nbsp; <a href="<?php echo e(backpack_url('logout')); ?>"><i class="fa fa-sign-out"></i> <span><?php echo e(trans('backpack::base.logout')); ?></span></a></small></small>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          <li><a href="<?php echo e(backpack_url('dashboard')); ?>"><i class="fa fa-dashboard"></i> <span><?php echo e(trans('backpack::base.dashboard')); ?></span></a></li>
            <li><a href="<?php echo e(backpack_url('book_type')); ?>"><i class="fa fa-wpforms"></i> <span>Thể loại Sách</span></a></li>
            <li><a href="<?php echo e(backpack_url('book')); ?>"><i class="fa fa-book"></i> <span>Sách</span></a></li>
            <li><a href="<?php echo e(backpack_url('reader')); ?>"><i class="fa fa-users"></i> <span>Độc giả</span></a></li>
            <li><a href="<?php echo e(backpack_url('blog_news')); ?>"><i class="fa fa-newspaper-o"></i> <span>Blog & Tin tức</span></a></li>
            <li><a href="<?php echo e(backpack_url('borrow_detail')); ?>"><i class="fa fa-suitcase"></i> <span>Chi Tiết Sách Mượn</span></a></li>
            <li><a href="<?php echo e(backpack_url('comment_blog')); ?>"><i class="fa fa-comment"></i> <span>Bình luận về Blog</span></a></li>
            <li><a href="<?php echo e(backpack_url('repcomment_blog')); ?>"><i class="fa fa-comments"></i> <span>Reply Bình luận về Blog</span></a></li>
            <li><a href="<?php echo e(backpack_url('comment_book')); ?>"><i class="fa fa-comment-o"></i> <span>Bình luận về Sách</span></a></li>
            <li><a href="<?php echo e(backpack_url('repcomment_book')); ?>"><i class="fa fa-comments-o"></i> <span>Reply Bình luận về Sách</span></a></li>
            <?php if(auth()->check() && auth()->user()->hasRole("Staff")): ?>
            <li><a href="<?php echo e(url(config('backpack.base.route_prefix', 'admin')."/user-read")); ?>"><i class="fa fa-user-circle"></i> <span>User</span></a></li>
            <?php endif; ?>
            <li><a href="<?php echo e(url(config('backpack.base.route_prefix', 'admin') . '/elfinder')); ?>"><i class="fa fa-files-o"></i> <span>File manager</span></a></li>

            <?php if(auth()->check() && auth()->user()->hasRole("Admin")): ?>
            <!-- Users, Roles Permissions -->
            <li class="treeview">
              <a href="#"><i class="fa fa-group"></i> <span>Users, Roles, Permissions</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo e(url(config('backpack.base.route_prefix', 'admin') . '/user')); ?>"><i class="fa fa-user"></i> <span>Users</span></a></li>
                <li><a href="<?php echo e(url(config('backpack.base.route_prefix', 'admin') . '/role')); ?>"><i class="fa fa-group"></i> <span>Roles</span></a></li>
                <li><a href="<?php echo e(url(config('backpack.base.route_prefix', 'admin') . '/permission')); ?>"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
              </ul>
            </li>
            <?php endif; ?>
          <!-- ======================================= -->
          
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
<?php endif; ?>
