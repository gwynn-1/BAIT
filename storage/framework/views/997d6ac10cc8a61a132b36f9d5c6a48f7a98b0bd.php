<?php
	$keyName = isset($column['key']) ? $column['key'] : $column['name'];
	$entryValue=$entry->{$keyName};
	$displayValue = isset($column['options'][$entryValue]) ? $column['options'][$entryValue] : '';
?>

<td><?php echo e($displayValue); ?></td>
