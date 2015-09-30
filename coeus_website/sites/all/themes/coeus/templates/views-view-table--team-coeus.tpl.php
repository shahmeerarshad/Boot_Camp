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

<section class="container services clearfix pt80 pb80">
      <div class="main-heading clearfix">
         <h2><?php  print t('Join our team at coues') ;?></h2>
      </div>
      <div class="mt30">
        <p><?php print t('Coeus offers continuous growth, a multi cultural environment and the opportunity to work with a team of highly motivated technologists, project managers, interface designers and consultants. With offices around the world, there are international travel opportunities and a chance to contribute to varying product solving challenges, UI, machine learning and scalability, etc. 

      Whether it’s for engineering, sales, marketing or design we look forward to hearing from you!');?></p>
         </div>
      <div class="row mt30">
        <div class="col-xs-12 col-sm-12 col-md-6 col-log-6">
          <img src="<?php echo $image_path;?>/career-img.png">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-log-6">
          <h4><?php  print t('Hiring Process:') ;?></h4>
          
          <p><?php print t('There is a three step interview process in which technical and analytical abilities are measured along with a cultural fit with the company.  We are always looking for technologists with cross skills and our team members unlike in other organisations have the opportunity to shift between departments. We invest in engineering, project management and in a team of highly competent and trained consultants.');?></p>
        </div>
      </div>
      <br clear="all" />
    <h2 class="ml20 mb10"> <?php print t('Coeus Event Society');?></h2>
      <div class="mb20">
        <img src="<?php echo $image_path;?>/event-soceity.jpg" />
      </div>
      <div class="main-heading clearfix">
          <h2 class="ml20"><?php print t('Join our team at coues');?></h2>
      </div>
<div class="col-md-12">
        <div class="team-comments container-fluid">
         <div class="comments-section row clearfix">
         <?php foreach ($rows as $row_count => $row): ?>        
         
          
            <div class="col-xs-12 col-sm-12 col-md-6 col-log-6">
              <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-3 col-log-3">
                  <?php echo $row['field_team_image']; ?>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-9 col-log-9">
                  <p><strong><?php echo $row['field_team_name'] ?></strong> | <?php echo $row['field_team_designation'] ?></p>
                  <p><?php echo $row['field_team_description'] ?></p>
                </div>
              </div>
            </div>
          
     
    <?php endforeach;?>
    </div>
            
          </div>
        </div>

</section>