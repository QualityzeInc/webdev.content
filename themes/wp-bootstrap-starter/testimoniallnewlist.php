<?php
/**
* Template Name: testimonial_listnew
 */
?>
<div class="container-flush  banner-adjust">
<div class="container-custom ">
<?php
    global $post;
    $myposts = get_posts( array(
        'posts_per_page' => 20,
        'offset'         => 0,
        'category_name'       => 'testimonial'
    ) );
    if ( $myposts ) {
        foreach ( $myposts as $post ) : 
            setup_postdata( $post ); ?>
                    <h2 class="m-0"><?php the_title();?></h2><?php the_content(); ?></p><?php endforeach;wp_reset_postdata();}?>
                    </div></div>