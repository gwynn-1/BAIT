<?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="cart-item-block">
    <img src="<?php echo e($item->options->image); ?>" alt="test" width="90" height="95">
    <div class="item-info">
        <div class="delete-item" data-rowid="<?php echo e($item->rowId); ?>">
            <span class="ui-icon ui-icon-close"></span>
        </div>
        <p class="book-name"><?php echo e($item->name); ?></p>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>