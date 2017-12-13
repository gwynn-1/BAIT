<?php $__env->startSection('header'); ?>
    <section class="content-header">
      <h1>
        <?php echo e(trans('backpack::base.dashboard')); ?><small><?php echo e(trans('backpack::base.first_page_you_see')); ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(backpack_url()); ?>"><?php echo e(config('backpack.base.project_name')); ?></a></li>
        <li class="active"><?php echo e(trans('backpack::base.dashboard')); ?></li>
      </ol>
    </section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title"><?php echo e(trans('backpack::base.login_status')); ?></div>
                </div>

                <div class="box-body"><?php echo e(trans('backpack::base.logged_in')); ?></div>
            </div>
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title">Thông báo</div>
                </div>

                <div class="box-body">
                <?php if($expire_date_count>0): ?>
                        <div class="alert alert-danger">
                            Có <?php echo e($expire_date_count); ?> chi tiết mượn sách bị quá hạn.
                            <a href="<?php echo e(url(config('backpack.base.route_prefix'))); ?>/borrow_detail">Go to Chi Tiết Sách Mượn</a>

                        </div>
                <?php endif; ?>
                <?php if($unreturn_date_count>0): ?>
                        <div class="alert alert-danger">
                            Có <?php echo e($unreturn_date_count); ?> chi tiết mượn sách không trả sách đúng hạn.
                            <a href="<?php echo e(url(config('backpack.base.route_prefix'))); ?>/borrow_detail">Go to Chi Tiết Sách Mượn</a>
                        </div>
                <?php endif; ?>
                <?php if($expire_date_count==0&&$unreturn_date_count==0): ?>
                        Không có thông báo nào
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backpack::layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>