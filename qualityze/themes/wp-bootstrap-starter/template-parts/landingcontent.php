<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!--<div class="post-thumbnail">-->
		<?php //the_post_thumbnail(); ?>
	<!--</div>-->

	<div class="entry-content">
		<?php
        if ( is_single() ) :
			the_content();
        else :
            the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'wp-bootstrap-starter' ) );
        endif;

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-bootstrap-starter' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
<!-- Footer -->
  <!-- Site footer -->
    <footer class="site-footer">
      <!--<div class="container">-->
      <!--  <div class="row">-->
      <!--    <div class="col-sm-12 col-md-6">-->
      <!--      <h6>About</h6>-->
      <!--      <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>-->
      <!--    </div>-->

      <!--    <div class="col-xs-6 col-md-3">-->
      <!--      <h6>Categories</h6>-->
      <!--      <ul class="footer-links">-->
      <!--        <li><a href="http://scanfcode.com/category/c-language/">C</a></li>-->
      <!--        <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>-->
      <!--        <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>-->
      <!--        <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>-->
      <!--        <li><a href="http://scanfcode.com/category/android/">Android</a></li>-->
      <!--        <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>-->
      <!--      </ul>-->
      <!--    </div>-->

      <!--    <div class="col-xs-6 col-md-3">-->
      <!--      <h6>Quick Links</h6>-->
      <!--      <ul class="footer-links">-->
      <!--        <li><a href="http://scanfcode.com/about/">About Us</a></li>-->
      <!--        <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>-->
      <!--        <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>-->
      <!--        <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>-->
      <!--        <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>-->
      <!--      </ul>-->
      <!--    </div>-->
      <!--  </div>-->
       
      <!-- <hr></div>-->
      
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
         <a href="http://qualityze.com/">Qualityze</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
             


<!--	<a href="https://www.twitter.com/qualityze"><i class="fab fa-twitter-square fa-2x  pr-3"></i></a>-->
<!--<a href="https://www.linkedin.com/company/qualityze-inc"><i class="fab fa-linkedin fa-2x  pr-3"></i></a>-->
<!--			<a href="https://appexchange.salesforce.com/listingDetail?listingId=a0N3000000DY0fKEAT">-->
<!--	<i class="fab fa-salesforce fa-3x  pr-3"></i>-->
<!--</a>-->
	
	
<!--		<a href="https://www.youtube.com/channel/UCbKQjx4H_YAE0ZkYbHTYeNg"><i class="fab fa-youtube fa-2x  pr-3"></i></a>-->


            <ul class="social-icons">
              <li><a href="https://www.facebook.com/Qualityze"><i class="fab fa-facebook-square fa-1x"></i></a></li>
              <li><a class="twitter" href="https://www.twitter.com/qualityze"><i class="fab fa-twitter-square fa-1x"></i></a></li>
              <li><a class="linkedin" href="https://www.linkedin.com/company/qualityze-inc"><i class="fab fa-linkedin fa-1x"></i></a></li>   
              <li><a class="youtube" href="https://www.youtube.com/channel/UCbKQjx4H_YAE0ZkYbHTYeNg"><i class="fab fa-youtube fa-1x"></i></a></li>   
                            <li><a class="salesforce" href="https://appexchange.salesforce.com/listingDetail?listingId=a0N3000000DY0fKEAT"><i class="fab fa-salesforce "></i></a></li>   

            </ul>
          </div>
        </div>
      </div>
</footer>
<!-- Footer -->
</article><!-- #post-## -->
