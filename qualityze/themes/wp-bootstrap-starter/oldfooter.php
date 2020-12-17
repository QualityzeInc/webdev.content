<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
// <img  src="http://webdev.qualityze.com/wp-content/uploads/2019/12/laptop-play-icon.png" class="d-none card-img-top" alt="" id="modalActivate" data-toggle="modal" data-target="#exampleModalPreview">

?>
<style>

.cust-dialog {
      max-width: 800px;
      margin: 30px auto;
  }

.cust-body {
  position:relative;
  padding:0px;
}
.close {
  position:absolute;
  right:-30px;
  top:0;
  z-index:999;
  font-size:2rem;
  font-weight: normal;
  color:#fff;
  opacity:1;
}
   
</style>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer py-3 <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<div class="container-custom">
            <div class="site-info">
                &copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
                <span class="sep"> | </span>
                <a class="credits" href="#" target="_blank" title="Qualityze" alt="Qualityze">All rights reserved.<?php //echo esc_html__('Bootstrap WordPress Theme','wp-bootstrap-starter'); ?></a>

            </div><!-- close .site-info -->
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->
<!-- Modal -->

<!--<?php// $key_1_value = get_post_meta( get_the_ID(), 'key_1', true ); ?>-->
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog cust-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body cust-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>

                    <div class="embed-responsive embed-responsive-16by9">
                        <!--<iframe src="https://www.youtube.com/embed/9Zz9yKbEjYs?rel=0" allowscriptaccess="always" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture">-->
                            
                        <!--</iframe>-->
                          <!--<iframe class="embed-responsive-item" src="echo $youtubeurl_value" id="video"  allowscriptaccess="always" allow="autoplay">-->
                              
                          <!--</iframe>-->
                   </div>
                </div>
            </div>
        </div>
    </div>


<!--   <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">-->
<!--        <div class="modal-dialog cust-dialog" role="document">-->
<!--            <div class="modal-content">-->
<!--                <div class="modal-body cust-body">-->
<!--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--                        <span aria-hidden="true">×</span>-->
<!--                    </button>-->

<!--                    <div class="embed-responsive embed-responsive-16by9">-->
                        <!--<iframe src="https://www.youtube.com/embed/9Zz9yKbEjYs?rel=0" allowscriptaccess="always" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture">-->
                            
                        <!--</iframe>-->
<!--                          <iframe class="embed-responsive-item" src="<?php echo $youtubeurl_value ?>" allow="autoplay"></iframe>-->
<!--                   </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<script>
    $(document).ready(function() {
   // inspired by http://jsfiddle.net/arunpjohny/564Lxosz/1/
   $('.table-responsive-stack').find("th").each(function (i) {
      
      $('.table-responsive-stack td:nth-child(' + (i + 1) + ')').prepend('<span class="table-responsive-stack-thead">'+ $(this).text() + ':</span> ');
      $('.table-responsive-stack-thead').hide();
   });
$( '.table-responsive-stack' ).each(function() {
  var thCount = $(this).find("th").length; 
   var rowGrow = 100 / thCount + '%';
   //console.log(rowGrow);
   $(this).find("th, td").css('flex-basis', rowGrow);   
});
function flexTable(){
   if ($(window).width() < 768) {
      
   $(".table-responsive-stack").each(function (i) {
      $(this).find(".table-responsive-stack-thead").show();
      $(this).find('thead').hide();
   });
      
    
   // window is less than 768px   
   } else {
      
      
   $(".table-responsive-stack").each(function (i) {
      $(this).find(".table-responsive-stack-thead").hide();
      $(this).find('thead').show();
   });
      
      

   }
// flextable   
}      
 
flexTable();
   
window.onresize = function(event) {
    flexTable();
};
// document ready  
});
</script>
<script>
	
/*Scroll to top when arrow up clicked BEGIN*/
$(window).scroll("load",function() {
    var height = $(window).scrollTop();
    if (height > 100) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
});
//$(document).on('ready page:load', function(){
 $(document).ready (function() {
    $("#back2Top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, 'slow');
        return false;
    });

});
 /*Scroll to top when arrow up clicked END*/
 
 
 
 
 $(".top").click(function() {
    $('html, body').animate({
        scrollTop: $(".bottom").offset().top
    }, 2000);
});
</script>
<?php wp_footer(); ?>

<a id="back2Top" title="Back to top" href="#">&#10148;</a>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/customization/css/modal-video.min.css">


<script
	src="https://code.jquery.com/jquery-2.2.4.min.js"
	integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
	crossorigin="anonymous"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/customization/js/jquery-modal-video.min.js"></script>
	<script>
		$(".js-video-button").modalVideo({
			youtube:{
				controls:0,
				nocookie: true
			}
		});
	</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5aafafb7d7591465c708b0e2/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
</body>
</html>