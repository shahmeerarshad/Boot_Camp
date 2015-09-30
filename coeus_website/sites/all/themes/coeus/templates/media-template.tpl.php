<?php $image_path = base_path() . drupal_get_path('theme', 'Coeus') . '/images'; ?>
<div class="container-fluid">
      <section class="container">
      <div class="main-heading clearfix">
          <h2 class="pull-left">Media Coverage</h2>
      </div>
        <div class="bs-example" data-example-id="simple-carousel">
          <div id="carousel-example-next" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-next" data-slide-to="0" class=""></li>
              <li data-target="#carousel-example-next" data-slide-to="2" class="active"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="item active">
               <ul>
                  <li>
                    <img src="<?php echo $image_path;?>/img6.jpg" />
                  </li>
                  <li>
                    <img src="<?php echo $image_path;?>/img7.jpg" />
                  </li>
                  <li>
                    <img src="<?php echo $image_path;?>/img8.jpg" />
                  </li>
                  <li>
                    <img src="<?php echo $image_path;?>/img9.jpg" />
                  </li>
                  <li>
                    <img src="<?php echo $image_path;?>/img10.jpg" />
                  </li>
                  <li>
                    <img src="<?php echo $image_path;?>/img11.jpg" />
                  </li>
                  <li>
                    <img src="<?php echo $image_path;?>/img12.jpg" />
                  </li>
                  <li>
                    <img src="<?php echo $image_path;?>/img13.jpg" />
                  </li>
                </ul>
              </div>
               <div class="item">
                <ul>
                  <li>
                    <img src="<?php echo $image_path;?>/img6.jpg" />
                  </li>
                  <li>
                    <img src="<?php echo $image_path;?>/img7.jpg" />
                  </li>
                  <li>
                    <img src="<?php echo $image_path;?>/img8.jpg" />
                  </li>
                  <li>
                    <img src="<?php echo $image_path;?>/img9.jpg" />
                  </li>
                  <li>
                    <img src="<?php echo $image_path;?>/img10.jpg" />
                  </li>
                  <li>
                    <img src="<?php echo $image_path;?>/img11.jpg" />
                  </li>
                  <li>
                    <img src="<?php echo $image_path;?>/img12.jpg" />
                  </li>
                  <li>
                    <img src="<?php echo $image_path;?>/img13.jpg" />
                  </li>
                </ul>
              </div>
            </div>
            <a class="left carousel-control" href="#carousel-example-next" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-next" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </section>
    </div>