<td>
  <?php if( !empty($entry->{$column['name']}) ): ?>
    <a
      href="<?php echo e(asset($entry->{$column['name']})); ?>"
      target="_blank"
    >
      <img
        src="<?php echo e(asset( (isset($column['prefix']) ? $column['prefix'] : '') . $entry->{$column['name']})); ?>"
        style="
          max-height: <?php echo e(isset($column['height']) ? $column['height'] : "25px"); ?>;
          width: <?php echo e(isset($column['width']) ? $column['width'] : "auto"); ?>;
          border-radius: 3px;"
      />
    </a>
  <?php else: ?>
    -
  <?php endif; ?>
</td>
