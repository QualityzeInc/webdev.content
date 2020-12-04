<?php
/**
* Template Name: post_q10
 */
?>

<div class="container-flush  banner-adjust">
   <div class="container-custom ">

          
      
        
   <div class="row">
    <?php
    global $post;
 
    $myposts = get_posts( array(
        'posts_per_page' => 10,
        'offset'         => 0,
        'category_name'       => 'q10reasons'
    ) );
 
    if ( $myposts ) {
        foreach ( $myposts as $post ) : 
            setup_postdata( $post ); ?>
            <div class="col-md-4 pb-3">
                <div class="card">
                <div class="card-body">
                    
                                <?php the_post_thumbnail( 'large','style=max-width:100%;height:auto;'); ?>
                                 <p class="card-title py-3"><a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                    </a></p>
                                      <p class="card-text">  <?php the_excerpt(); ?></p>
                                          <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more</a>


                </div>
                </div>
            </div>
        <?php
        endforeach;
        wp_reset_postdata();
    }
    ?>
</div>


</div></div>




 <?php //the_post_thumbnail('thumbnail'); ?>
           <?php //the_title(); ?>
               <?php// the_excerpt(); ?>
               <?php ///the_permalink() ?>
            