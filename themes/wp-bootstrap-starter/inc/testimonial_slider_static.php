<?php
/**
* Template Name: testimonial_slider
 */
?>
<?php
$menuItems = wp_get_nav_menu_items('testimonial');
foreach($menuItems as $page) {
    $post = get_post($page->object_id);
    $content = apply_filters('the_content' , $post->post_content);
}
?>


<div id="carouselTestimonial" class="carousel slide" data-ride="carousel">
   
    <div class="carousel-inner">
    <?php
            $navMenu = wp_get_nav_menu_items(28);                                                    
            foreach ($navMenu as $menu) {   ?>
            <div class="carousel-item">
                            <!--<h1 class="custtittle"> -->
                            <?php  // echo '<a href="'. $menu->url .'">'. $menu->title .'</a>'; ?>
                            <!--</h1>-->
                            <!--<?php  //echo $menu->title .'</a>'; ?>-->
          <h3> <?php   echo  $menu->title .'</a>'; ?></h3> 
                <?php echo $content;?>
            </div>
    <?php   } ?>

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
 <script>
$(function(){
//   $( "#carouselTestimonial > .carousel-inner > .carousel-item" ).addClass(function( index ) {
//      return "item-" + index;
//     });
    
    
     $( "#carouselTestimonial > .carousel-inner > .carousel-item, .carousel-indicators li" ).first().addClass('active');

})
</script>