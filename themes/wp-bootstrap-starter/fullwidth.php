<?php
/**
* Template Name: Full Width
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section><!-- #primary -->



</aside>
<script>
     var selectedTab =  window.location.href.split("#tab=")[1] ;
    var selectedId = $('a[href$=' + selectedTab+']:first').attr('id');

    if (typeof selectedId === "undefined") {
         $('#tab1-tab').trigger("click");
    }
    else{
        $('#'+selectedId).trigger("click");
    }
</script><!-- #secondary -->

<?php
get_footer();
