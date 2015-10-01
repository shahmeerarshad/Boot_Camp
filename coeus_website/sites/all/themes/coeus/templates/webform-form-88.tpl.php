<?php $image_path = base_path() . drupal_get_path('theme', 'Coeus') . '/images'; ?>
<section class = "contact">
 <img  src="<?php echo $image_path;?>/contact.jpg" >
 </section>
<div class = "container form-wraper">
	<div class="row">
    <div class="col-md-12">
      <div class="main-heading clearfix">
         <h2>Register</h2>
      </div>
    </div>
  </div>
<div class="row">
	<div class="col-md-12">
		<div class="reg-form-content">
			<?php print drupal_render($form['submitted']);?>
			<?//php var_dump(array_keys($form['submitted']['resume']['upload_button']['#attributes'])); ?>
			<?php print drupal_render_children($form);?>
		</div>
	</div>
</div>
</div>



  
