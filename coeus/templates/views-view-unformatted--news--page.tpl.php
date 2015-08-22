<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
	<?php var_dump($classes_array);?>
  <div<?php if ($classes_array[$id]) { print ' class="carousel-inner"';  } ?>>
    <?php print $row; ?>
  </div>
<?php endforeach; ?>