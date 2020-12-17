
<?php
/**
* Template Name: Banner Footer Dynamic
 */
?>
<?php
        // the query
        $the_query = new WP_Query(array(
            'category_name' => 'News',
            'post_status' => 'publish',
            'posts_per_page' => 1,
        ));
        ?>

        <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            
           
<div class="container-flush aqua-blue-bg">
  <div class="container-custom">
    <div class="row">
        <div class="col-md-8">
          <div class="newsticker">
                <div class="d-flex flex-row">
                  <div class="py-2 d-none d-sm-block"><i class="fas fa-newspaper fa-5x"></i></div>
                  <div class="py-2 pl-3">
                      <a class="text-white"href="<?php the_permalink() ?>">
                      <!--<h3>Top Rated Document Management Software <?php echo date("Y"); ?></h3>-->
                           
                                 <h3><?php the_title(); ?></h3> </a>
                                
                           <?php the_excerpt(); ?>
                                                           

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p><?php __('No News'); ?></p>
        <?php endif; ?>
                  </div>
                </div>
          </div>
        </div>

        <div class="col-md-4 pb-2 col-sm-6 pt-3 text-lg-right text-md-right d-none">
        <img class="q10height" src="/wp-content/uploads/2020/09/Q360.png" alt="">
        </div>

    </div>    
  </div>
</div>
