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
 <?php $image_path = base_path() . drupal_get_path('theme', 'Coeus') . '/images'; ?>
 <section>
      <img src="<?php echo $image_path;?>/events.jpg" />
    </section>
     <section class="container no-l-p no-r-p events-section clearfix pt80 pb80">
      <div class="main-heading clearfix">
          <h2 class="pl20">Upcoming Events</h2>
      </div>

      <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">

    <ul id="myTabs" class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Global Events</a></li>
      <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Internal Events</a></li>
      </ul>

    <div id="myTabContent" class="tab-content">
      <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
        <?php foreach ($rows as $row_count => $row): ?>

          <?php if($row['field_event_type']=="GLOBAL"):?>
           <?php echo $row['field_event_image'] ;?>  
        <div class="ml20 mt20">
              <h3><?php echo $row['field_event_name'] ;?></h3>
              <p><?php echo $row['field_event_date'] ;?></p>
              <p class="mt10"><?php echo $row['field_event_address'] ;?></p><strong><strong>
              <p><?php echo $row['field_event_description'] ;?></p>
            </strong></strong>
        </div>
              <?php endif;?>
              <?php endforeach; ?>
      </div>

      <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
             <?php foreach ($rows as $row_count => $row): ?>

              <?php if($row['field_event_type']=="INTERNAL"):?>
              <?php echo $row['field_event_image'] ;?>  
              <div class="ml20 mt20">
              <h3><?php echo $row['field_event_name'] ;?></h3>
              <p><?php echo $row['field_event_date'] ;?></p>
              <p class="mt10"><?php echo $row['field_event_address'] ;?></p><strong><strong>
              <p><?php echo $row['field_event_description'] ;?></p>
            </strong></strong>
        </div>
              <?php endif;?>
              <?php endforeach; ?>
        </div>
        
      </div>
      
     
    </div>
  
    </section>