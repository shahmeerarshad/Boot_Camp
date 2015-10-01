<?php $image_path = base_path() . drupal_get_path('theme', 'Coeus') . '/images'; ?>
<header>
   <div class="container">
      <div class="language-section pull-right visible-md-block visible-lg-block">
         <!-- <a href="#">EN</a> -->
         <!-- <a href="#">DE</a> -->
         <?php
            //$block = module_invoke('locale', 'block_view', 'language');
            //print render($block); 
            ?>
         <?php
            print drupal_render(menu_tree_output(menu_tree_all_data('menu-top-small')));
            ?>
      </div>
      <br clear="all">
      <div id="navbar-header">
         
         <a href="<?php print base_path();?>" class ="navbar-brand">
            <h1 class="logo"><img width="100" height="30" src="<?php echo $image_path;?>/coeus_logo.png"></h1>
         </a>
      </div>
      <?php print render($page['navigation']); ?>   
   </div>
</header>
<div id="content" class="column" role="main">
   <?php print render($page['content']);?>
</div>
<div>
   <?php print render($page['footer']); ?>      
</div>