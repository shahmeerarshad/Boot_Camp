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
                <?php foreach ($rows as $row_count => $row): ?>

                     <?php if ($row_count < 8):?>
                    <li>
                     <?php echo $row['field_media_image']; ?>
                    </li>
                     <?php endif;?>
                     <?php endforeach; ?>                  
                </ul>
              </div>
               <div class="item">
                <ul>
                    <?php foreach ($rows as $row_count => $row): ?>
                     <?php if ($row_count < 8):?>
                    <li>
                     <?php echo $row['field_media_image']; ?>
                    </li>
                     <?php endif;?>
                     <?php endforeach; ?>        
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