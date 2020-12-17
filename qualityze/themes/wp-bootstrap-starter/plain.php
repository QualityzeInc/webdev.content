<?php
/**
* Template Name: Plain Page
 */


?>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>

 
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

 
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

 
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

 
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

 
 

 
ga('create', 'UA-84163511-1', 'auto');

 
ga('send', 'pageview');
</script>

<?php wp_head(); ?>
<style>
#back2Top {
    width: 40px;
    line-height: 40px;
    overflow: hidden;
    z-index: 999;
    display: none;
    cursor: pointer;
    -moz-transform: rotate(270deg);
    -webkit-transform: rotate(270deg);
    -o-transform: rotate(270deg);
    -ms-transform: rotate(270deg);
    transform: rotate(270deg);
    position: fixed;
    bottom: 50px;  
    right: 7px;
    background-color: #f0f4f7;
    color: #555;
    text-align: center;
    font-size: 30px;
    text-decoration: none;
    border-radius: 20px;
}
#back2Top:hover {
    background-color: #DDF;
    color: #000;
}
    </style>


<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	<!-- <header id="masthead" class="site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner"> -->
	<!--<header id="masthead" class="site-header fixed-top navbar-light bg-white  shadow-sm  square" role="banner">-->

    <!-- <div id="content" class="site-content"> -->
	<!--<div id="content " class=" pt-5 mt-3 site-content"> chanhhed sticy below div class and csss header#masthead padding to zero ovride in trail.css-->

	<div id="content " class="site-content">
		<div class="container-flush">
			<div class="row no-gutters">
                <?php endif; ?>
                
                
                
                
                
                
                
                
 <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
  
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
<!--<?php//$youtubeurl_value = get_post_meta( get_the_ID(), 'youtubeurl', true ); ?>-->

 
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
<!--End of Tawk.to Script-->
</body>
</html>               