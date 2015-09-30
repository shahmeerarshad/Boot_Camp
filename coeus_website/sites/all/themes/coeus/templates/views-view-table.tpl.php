<?php

/**
 * @file
 * Template to display a view as a table.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $header: An array of header labels keyed by field id.
 * - $caption: The caption for this table. May be empty.
 * - $header_classes: An array of header classes keyed by field id.
 * - $fields: An array of CSS IDs to use for each field id.
 * - $classes: A class or classes to apply to the table, based on settings.
 * - $row_classes: An array of classes to apply to each row, indexed by row
 *   number. This matches the index in $rows.
 * - $rows: An array of row items. Each row is an array of content.
 *   $rows are keyed by row number, fields within rows are keyed by field ID.
 * - $field_classes: An array of classes to apply to each field, indexed by
 *   field id, then row number. This matches the index in $rows.
 * @ingroup views_templates
 */
?>




<div class="container-fluid">
   <section class ="container">
      <div class="main-heading clearfix">
         <h2 class="pull-left">News</h2>
      </div>
      <div class="bs-example" data-example-id="simple-carousel2">
         <div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#carousel-example-generic2" data-slide-to="0" class=""></li>
               <li data-target="#carousel-example-generic2" data-slide-to="1" class="active"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
               <div class="item active">
                  <div class="content row">
                     <?php foreach ($rows as $row_count => $row): ?>
                     <?php $i++; ?>
                     <?php if ($row_count < 3 ):?>
                     <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <h4><?php echo $row['field_heading'] ?></h4>
                        <p><?php echo $row['field_news'] ?></p>
                     </div>
                     <?php endif;?>
                     <?php endforeach; ?>
                  </div>
               </div>
               <div class="item">
                  <div class="content row">
                     <?php foreach ($rows as $row_count => $row): ?>
                     <?php if ($row_count > 2  ):?>
                     <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <h4><?php echo $row['field_heading'] ?></h4>
                        <p><?php echo $row['field_news'] ?></p>
                     </div>
                     <?php endif;?>
                     <?php endforeach; ?>
                  </div>
               </div>
            </div>
            <a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
      </div>
   </section>
</div>







