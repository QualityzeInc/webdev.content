<?php
/**
* Template Name: Banner Footer 
 */
?>
<?php
        // the query
        $the_query = new WP_Query(array(
            'category_name' => 'Uncategorized',
            'post_status' => 'publish',
            'posts_per_page' => 2,
        ));
        ?>
<div class="container-flush aqua-blue-bg su-posts su-posts-default-loop">
  <div class="container-custom  py-3  border-bottom" id="su-post-<?php the_ID(); ?>" class="su-post">
    <div class="row">
      <div class="col-md-8">
        <div class="newsticker">
          <div class="d-flex flex-row">
            <div class="py-2 d-none d-sm-block"><i class="fas fa-newspaper fa-5x"></i></div>
            <div class="su-post-excerptpy-2 pl-3 carousel slide" id="carouselExampleControls" data-ride="carousel">
              <h3>Top Rated Document Management Software 2019</h3>
       <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                    <p><?php the_excerpt(); ?></p>  
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    
                    </div>
                     <?php else : ?>
            <p><?php __('No News'); ?></p>
        <?php endif; ?>
               <!-- <div class="carousel-item">-->
               <!--<p>2Qualityze proven it once again. hiiiii We are listed among “Top Rated Document Management Software 2019” by SOFTWAREWORLD for making electronic document management easy and secure. For more detailsd</p>-->

               <!-- </div>  -->
                
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
        <img class="q10height" src="http://webdev.qualityze.com/wp-content/themes/wp-bootstrap-starter/customization/images/Q10.png" alt="">
      </div>
    </div>
  </div>
</div>



