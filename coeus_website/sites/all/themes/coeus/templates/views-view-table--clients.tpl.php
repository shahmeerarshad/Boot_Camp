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
                    <?php foreach ($rows as $row_count => $row): ?>

                     <?php if ($row_count < 8):?>
                    <li>
                     <?php echo $row['field_client_image']; ?>
                    </li>
                     <?php endif;?>
                     <?php endforeach; ?>
                 
                  </ul>  
                </div>
                 <div class="item">
                  <ul>
                    <?php foreach ($rows as $row_count => $row): ?>
                     <?php if ($row_count > 7):?>

                    <li>
                       <?php echo $row['field_client_image']; ?>
                    </li>

                     <?php endif;?>
                     <?php endforeach; ?>
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