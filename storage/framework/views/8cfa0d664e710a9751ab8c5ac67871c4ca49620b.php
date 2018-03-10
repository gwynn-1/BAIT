<?php
    $keyName = isset($column['key']) ? $column['key'] : $column['name'];
    $entryValue=$entry->{$keyName};
    $displayValue = isset($column['options'][$entryValue]) ? $column['options'][$entryValue] : '';
?>

<td data-order="<?php echo e($entry->{$column['name']}); ?>">

    <?php if( $displayValue!="null"): ?>

        <form>
            <div class="pretty p-icon p-round p-pulse">
                <input type="checkbox" class="my-checkbox-<?php echo e($column['name']); ?>" <?php if($displayValue=="1"): ?> checked  <?php endif; ?> <?php if($displayValue=="0" && $column['name']=="is_keep"): ?> disabled  <?php endif; ?> />
                <div class="state p-success">
                    <i class="icon mdi mdi-check"></i>
                    <label>Có</label>
                </div>
            </div>
        </form>
    <?php elseif($displayValue=="null"): ?>
        null
    <?php endif; ?>
</td>