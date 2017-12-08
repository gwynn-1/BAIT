<div class="box">
	<ul class="nav nav-pills nav-stacked">

	  <li role="presentation"
		<?php if(Request::route()->getName() == 'backpack.account.info'): ?>
	  	class="active"
	  	<?php endif; ?>
	  	><a href="<?php echo e(route('backpack.account.info')); ?>"><?php echo e(trans('backpack::base.update_account_info')); ?></a></li>

	  <li role="presentation"
		<?php if(Request::route()->getName() == 'backpack.account.password'): ?>
	  	class="active"
	  	<?php endif; ?>
	  	><a href="<?php echo e(route('backpack.account.password')); ?>"><?php echo e(trans('backpack::base.change_password')); ?></a></li>

	</ul>
</div>