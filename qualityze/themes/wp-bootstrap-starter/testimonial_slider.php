<?php
/**
* Template Name: testimonial_slider
 */
?>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
ul#menu-qualityze_pages li a, ul#menu-products li a{
    color: #abbed1;
}
ul#menu-products {
    padding: 0em;
    list-style: none;
}
ul#menu-qualityze_pages {
    padding: 0em;
    list-style: none;
}

#menu-qualityze_pages > li > a:focus, #menu-qualityze_pages > li > a:hover {
    color: #fff;
    text-decoration: none;
}
#menu-products > li > a:focus, #menu-products > li > a:hover {
    color: #fff;
    text-decoration: none;
}
    /* carousel */
#quote-carousel 
{
  padding: 0 10px 30px 10px;
  margin-top: 30px;
}

/* Control buttons  */
#quote-carousel .carousel-control
{
  background: none;
  color: #222;
  font-size: 2.3em;
  text-shadow: none;
  margin-top: 30px;
}
/* Previous button  */
#quote-carousel .carousel-control.left 
{
  left: -12px;
}
/* Next button  */
#quote-carousel .carousel-control.right 
{
  right: -12px !important;
}
/* Changes the position of the indicators */
#quote-carousel .carousel-indicators 
{
  right: 50%;
  top: auto;
  bottom: 0px;
  margin-right: -19px;
}
/* Changes the color of the indicators */
#quote-carousel .carousel-indicators li 
{
  background: #c0c0c0;
}
#quote-carousel .carousel-indicators .active 
{
  background: #333333;
}
#quote-carousel img
{
  width: 250px;
  height: 100px
}
/* End carousel */

.item blockquote {
    border-left: none; 
    margin: 0;
}

.item blockquote img {
    margin-bottom: 10px;
}

.item blockquote p:before {
    content: "\f10d";
    font-family: 'Fontawesome';
    float: left;
    margin-right: 10px;
}



/**
  MEDIA QUERIES
*/

/* Small devices (tablets, 768px and up) */
@media (min-width: 768px) { 
    #quote-carousel 
    {
      margin-bottom: 0;
      padding: 0 40px 30px 40px;
    }
    
}

/* Small devices (tablets, up to 768px) */
@media (max-width: 768px) { 
    
    /* Make the indicators larger for easier clicking with fingers/thumb on mobile */
    
    #quote-carousel .carousel-indicators {
        bottom: -20px !important;  
    }
    #quote-carousel .carousel-indicators li {
        display: inline-block;
        margin: 0px 5px;
        width: 15px;
        height: 15px;
    }
    #quote-carousel .carousel-indicators li.active {
        margin: 0px 5px;
        width: 20px;
        height: 20px;
    }
}
</style>
<div class="container-flush  banner-adjust">
   <div class="container-custom ">

          
      
        
   <div class="row">
    <?php
    global $post;
 
    $myposts = get_posts( array(
        'posts_per_page' => 10,
        'offset'         => 0,
        'category_name'       => 'testimonials'
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
                
        <?php
        endforeach;
        wp_reset_postdata();
    }
    ?>
</div>


</div></div>

<div id="carouselTestimonial" class="carousel slide" data-ride="carousel">
   
    <div class="carousel-inner">
 
                <div class="carousel-item">
                 <h3></h3> 
             
                </div>
                
                <div class="carousel-item active">
                 <h3></h3> 
             
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
 <script>
$(function(){
     $( "#carouselTestimonial > .carousel-inner > .carousel-item, .carousel-indicators li" ).first().addClass('active');
})


$('.carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));

  if (next.next().length>0) {
 
      next.next().children(':first-child').clone().appendTo($(this)).addClass('rightest');
      
  }
  else {
      $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
     
  }
});


// When the DOM is ready, run this function
$(document).ready(function() {
  //Set the carousel options
  $('#quote-carousel').carousel({
    pause: true,
    interval: 4000,
  });
});
</script>
