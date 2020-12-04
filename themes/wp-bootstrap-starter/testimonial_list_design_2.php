<?php
/**
* Template Name: testimonial_list
 */
?>

<?php
        // the query
        $the_query = new WP_Query(array(
            'category_name' => 'News',
            'post_status' => 'publish',
            // 'posts_per_page' => 1,
        ));
        ?>

        <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            
           

<div class="container-flush  banner-adjust">
   <div class="container-custom ">

<div id="carouselTestimonial" class="carousel slide" data-ride="carousel">
   
    <div class="carousel-inner">
 
            <div class="carousel-item">
                <a class="text-white"href="<?php the_permalink() ?>">
            <h3><?php the_title(); ?></h3></a>
        <?php the_excerpt(); ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
        <p><?php __('No News'); ?></p>
        <?php endif; ?>
             
                
            </div>
            


    </div>
  <a class="carousel-control-prev" href="#carouselTestimonial" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselTestimonial" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



</div>
</div>

<!--<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script>
$(function(){
//   $( "#carouselTestimonial > .carousel-inner > .carousel-item" ).addClass(function( index ) {
//      return "item-" + index;
//     });
    
    
     $( "#carouselTestimonial > .carousel-inner > .carousel-item, .carousel-indicators li" ).first().addClass('active');

})
</script>