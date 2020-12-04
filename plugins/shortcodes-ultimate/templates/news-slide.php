
<div class="container-flush aqua-blue-bg su-posts su-posts-default-loop">
  <div class="container-custom  py-3  border-bottom" id="su-post-<?php the_ID(); ?>" class="su-post">
    <div class="row">
      <div class="col-md-8">
        <div class="newsticker">
          <div class="d-flex flex-row">
            <div class="py-2 d-none d-sm-block"><i class="fas fa-newspaper fa-5x"></i></div>
            <div class="su-post-excerptpy-2 pl-3 carousel slide" id="carouselExampleControls" data-ride="carousel">
              <h3>Top Rated Document Management Software 2019</h3>
              <?php /*loop statment1*/ //if ( $posts->have_posts() ) :               ?>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                    <p>1Qualityze proven it once again. hiiiii We are listed among “Top Rated Document Management Software 2019” by SOFTWAREWORLD for making electronic document management easy and secure. For more detailsd
                    
                            <?php /*loop statment2*/// while ( $posts->have_posts() ) : $posts->the_post(); ?>
                           <?php// the_excerpt(); ?>
                          </p>      <?php //endwhile; ?>
              <?php //else : ?>
              <h4><?//php _e( 'Posts not found', 'shortcodes-ultimate' ); ?></h4>
              <?php// endif; ?>               
                    </div>
                    
                <div class="carousel-item">
               <p>2Qualityze proven it once again. hiiiii We are listed among “Top Rated Document Management Software 2019” by SOFTWAREWORLD for making electronic document management easy and secure. For more detailsd</p>

                </div>  
                
                </div>
               
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
             
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 pb-2 pt-3 col-md-4 pb-2 pt-3 text-lg-right text-md-right">
        <img class="q10height" src="wp-content/themes/wp-bootstrap-starter/customization/images/Q10.png" alt="">
      </div>
    </div>
  </div>
</div>
         