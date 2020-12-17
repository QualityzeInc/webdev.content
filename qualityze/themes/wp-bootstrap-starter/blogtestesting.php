<?php
/**
* Template Name: Banner Footer 
 */
?>

    
<div class="container-flush">
  <div class="container-custom">
    <div class="row">

 <div class="content col-md-6 news_page">

                       <h1>Latest News</h1>     

                       <?php $args = array(
                            'post_type' => 'post' ,
                            'orderby' => 'date' ,
                            'order' => 'DESC' ,
                            'posts_per_page' => 6,
                            'category'         => 'testblog',
                            'paged' => get_query_var('paged'),
                            'post_parent' => $parent
                       ); ?>
                       <?php query_posts($args); ?>




                       <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>

                                <div class="large-4 medium-4 small-4 columns">
                                    <div class="latest_news_cont">
                                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>

                                    <a href="<?php the_permalink() ?>"><h5><?php the_title(); ?></h5></a>
                                    <?php the_excerpt(); ?>
                                    <p style="text-align:center;"><a href="<?php the_permalink() ?>" class="readmore_news">Read more</a></p>
<br>
<div class="clear"></div>
                                       </div>
                                    </div>

                            <?php endwhile; ?>
                        <?php endif; ?>


<div class="clear"></div>

            </div><!--end of content-->



<div class="clear"></div>

    </div>    
  </div>
</div>

