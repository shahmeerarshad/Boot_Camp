<header>
  <div class="container"> 
  <div class="language-section pull-right visible-md-block visible-lg-block">
          <a href="#">EN</a>
          <a href="#">DE</a>
          <a href="contact.html">Contact</a>
    </div>     
    <br clear="all">
    <div id="navbar-header">
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="navbar-brand " id="logo"><img src="<?php print $logo; ?>" img width="100" height="30" /></a>
      <?php endif; ?>
    </div>
    <?php print render($page['navigation']); ?>      
  </div>
</header>
             
              <div id="content" class="column" role="main">

                
           <?php

        
       
         print render($page['content']);

?>
      
         
        </div>
    <div>
    <?php print render($page['footer']); ?>      
        </div>
        