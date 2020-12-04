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

        <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            
                <?php the_excerpt(); ?>



            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p><?php __('No News'); ?></p>
        <?php endif; ?>
<div class="container-flush aqua-blue-bg">
  <div class="container-custom">
    <div class="row">

        <!-- <div class="col-md-8  py-2">
          <div class="newsticker row">
                <div class="col-md-2">
                <i class="fas fa-newspaper fa-4x"></i> 
                </div>    
                <div class="col-md-10">
                <h3>1Top Rated Document Management Software 2019</h3>    
                <p>Qualityze proven it once again. We are listed among “Top Rated Document Management Software 2019” by SOFTWAREWORLD for making electronic document management easy and secure. For more detailsd</p>
                 </div>     
        </div> 
        </div> -->
        <div class="col-md-8">
          <div class="newsticker">
                <div class="d-flex flex-row">
                  <div class="py-2 d-none d-sm-block"><i class="fas fa-newspaper fa-5x"></i></div>
                  <div class="py-2 pl-3">
                      <h3>1Top Rated Document Management Software 2019</h3>
                      <p>Qualityze proven it once again. We are listed among “Top Rated Document Management Software 2019” by SOFTWAREWORLD for making electronic document management easy and secure. For more detailsd</p>
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


