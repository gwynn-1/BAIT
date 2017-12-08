<!-- select2 -->
<div <?php echo $__env->make('crud::inc.field_wrapper_attributes', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> >
    <label><?php echo $field['label']; ?></label>
    <?php echo $__env->make('crud::inc.field_translatable_icon', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $entity_model = $crud->model; ?>
    <select
        name="<?php echo e($field['name']); ?>"
        style="width: 100%"
        <?php echo $__env->make('crud::inc.field_attributes', ['default_class' =>  'form-control select2_field'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        >

        <?php if($entity_model::isColumnNullable($field['name'])): ?>
            <option value="">-</option>
        <?php endif; ?>

        <?php if(isset($field['model'])): ?>
            <?php $__currentLoopData = $field['model']::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $connected_entity_entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(old($field['name']) == $connected_entity_entry->getKey() || (is_null(old($field['name'])) && isset($field['value']) && $field['value'] == $connected_entity_entry->getKey())): ?>
                    <option value="<?php echo e($connected_entity_entry->getKey()); ?>" selected><?php echo e($connected_entity_entry->{$field['attribute']}); ?></option>
                <?php else: ?>
                    <option value="<?php echo e($connected_entity_entry->getKey()); ?>"><?php echo e($connected_entity_entry->{$field['attribute']}); ?></option>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </select>

    
    <?php if(isset($field['hint'])): ?>
        <p class="help-block"><?php echo $field['hint']; ?></p>
    <?php endif; ?>
</div>




<?php if($crud->checkIfFieldIsFirstOfItsType($field, $fields)): ?>

    
    <?php $__env->startPush('crud_fields_styles'); ?>
        <!-- include select2 css-->
        <link href="<?php echo e(asset('vendor/adminlte/plugins/select2/select2.min.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    <?php $__env->stopPush(); ?>

    
    <?php $__env->startPush('crud_fields_scripts'); ?>
        <!-- include select2 js-->
        <script src="<?php echo e(asset('vendor/adminlte/plugins/select2/select2.min.js')); ?>"></script>
        <script>
            jQuery(document).ready(function($) {
                // trigger select2 for each untriggered select2 box
                $('.select2_field').each(function (i, obj) {
                    if (!$(obj).hasClass("select2-hidden-accessible"))
                    {
                        $(obj).select2({
                            theme: "bootstrap"
                        });
                    }
                });
            });
        </script>
    <?php $__env->stopPush(); ?>

<?php endif; ?>

