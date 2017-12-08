<?php
	// if not otherwise specified, the hidden input should take up no space in the form
    if (!isset($field['wrapperAttributes']) || !isset($field['wrapperAttributes']['class']))
    {
        $field['wrapperAttributes']['class'] = "hidden";
    }
?>

<!-- hidden input -->
<div <?php echo $__env->make('crud::inc.field_wrapper_attributes', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> >
  <input
  	type="hidden"
    name="<?php echo e($field['name']); ?>"
    value="<?php echo e(old($field['name']) ? old($field['name']) : (isset($field['value']) ? $field['value'] : (isset($field['default']) ? $field['default'] : '' ))); ?>"
    <?php echo $__env->make('crud::inc.field_attributes', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  	>
</div>