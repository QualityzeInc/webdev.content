<?php
/**
* Template Name: testimonial_slider static
 */

/**<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
*/
?>


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

<?php
$menuItems = wp_get_nav_menu_items('testimonial');
foreach($menuItems as $page) {
    $post = get_post($page->object_id);
    $content = apply_filters('the_content' , $post->post_content);
}
?>
<div class="container-flush clear pt-3 pb-5 text-center testimonial-dark">
	<div class="quotes-left d-none d-sm-block"><img width="80px"height="69px" src="/wp-content/uploads/2020/09/q-start.png"></div>
	<div class="quotes-right d-none d-sm-block"><img width="80px"height="69px" src="/wp-content/uploads/2020/09/q-end.png"></div>
	<div class="container-custom">
		<h2 class="p-0 m-0 text-center">Customer Testimonials</h2>
		<div id="carouselTestimonial" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<h3>Arin Keshishian – Next Generation QMS</h3>
					<p>As a consultant working with various companies. I was asked by medical device start-up client to identify a Electronic Document Management System that would be easy to transition as the company grew. After doing thorough research, Qualityze was our first choice. The interface was user-friendly and their dedication to compliance was key! My client is so happy with Qualityze, such that I have implemented Qualityze with other clients, both start-ups and mid to large-scale companies. Thank you Qualityze for the easy implementation and continuous support! </p> <b>Arin Keshishian – Consultant, Top Quality Engineering</b> </div>
				<div class="carousel-item">
					<h3>Sarah Miller – Qualityze, Great Customer Service &amp; Partnership!!!</h3>
					<p>It has been over a year since implementing Qualityze as a document control system to help streamline, manage and improve our documentation processes, flows and efficiencies. Our implementation team from Qualityze was very helpful and listened to our needs and were able to configure the solutions on the fly. The creative and detailed workflows were well thought out and provided a lot of options for configuring various records to keep us organized and structured. The user reports generated provided great insight and visibility on task and activities that needed our attention right away, keeping us compliant to our processes and procedures. Thank you Qualityze!! </p> <b>Sarah Miller – R&amp;D Documentation Specialist, Care/Of</b> </div>
			</div>
			<a class="carousel-control-prev" href="#carouselTestimonial" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
			<a class="carousel-control-next" href="#carouselTestimonial" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
		</div>
	</div>
</div>