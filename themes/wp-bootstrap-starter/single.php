<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
<style>
    .entry-content img
    {
    width: 100%;
    cursor: pointer;
    margin-bottom: 10px;
    }
  
</style>
<div class="container-flush">

    <div class="container-custom">

        <div class="row">

            <div class="col-md-12 py-4">
                	<section id="primary check" class="content-area hello">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			    the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</section><!-- #primary -->

            </div>

        </div>

    </div>

<?php
get_sidebar();
get_footer();
