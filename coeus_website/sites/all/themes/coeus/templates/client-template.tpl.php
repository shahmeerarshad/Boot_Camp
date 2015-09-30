  <?php $image_path = base_path() . drupal_get_path('theme', 'Coeus') . '/images'; ?>
 <div class="container-fluid">
      <section class="container">
          <div>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <ul>
                    <li>
                      <img src="<?php echo $image_path;?>/brand1.png" />
                    </li>
                    <li>
                      <img src="<?php echo $image_path;?>/brand2.png" />
                    </li>
                    <li>
                      <img src="<?php echo $image_path;?>/brand3.png" />
                    </li>
                    <li>
                      <img src="<?php echo $image_path;?>/brand4.png" />
                    </li>
                    <li>
                      <img src="<?php echo $image_path;?>/brand5.png" />
                    </li>
                    <li>
                      <img src="<?php echo $image_path;?>/brand6.png" />
                    </li>
                    <li>
                      <img src="<?php echo $image_path;?>/brand7.png" />
                    </li>
                    <li>
                      <img src="<?php echo $image_path;?>/brand8.png" />
                    </li>
                  </ul>  
                </div>
                 <div class="item">
                  <ul>
                    <li>
                      <img src="<?php echo $image_path;?>/brand1.png" />
                    </li>
                    <li>
                      <img src="<?php echo $image_path;?>/brand2.png" />
                    </li>
                    <li>
                      <img src="<?php echo $image_path;?>/brand3.png" />
                    </li>
                    <li>
                      <img src="<?php echo $image_path;?>/brand4.png" />
                    </li>
                    <li>
                      <img src="<?php echo $image_path;?>/brand5.png" />
                    </li>
                    <li>
                      <img src="<?php echo $image_path;?>/brand6.png" />
                    </li>
                    <li>
                      <img src="<?php echo $image_path;?>/brand7.png" />
                    </li>
                    <li>
                      <img src="<?php echo $image_path;?>/brand8.png" />
                    </li>
                  </ul>
                </div>
              </div>
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
      </section>
    </div>