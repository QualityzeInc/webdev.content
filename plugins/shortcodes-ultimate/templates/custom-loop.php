<div class="su-posts su-posts-default-loop">
	<div class="container-custom">	<h2><u>B</u>logs</h2></div>
	<?php if ( $posts->have_posts() ) : ?>

		<?php while ( $posts->have_posts() ) : $posts->the_post(); ?>

			<div class="container-custom  py-4  border-bottom" id="su-post-<?php the_ID(); ?>" class="su-post">
			
					<div class="row">	

					<div class="col-md-6">
						
						<?php if ( has_post_thumbnail( get_the_ID() ) ) : ?>
					<a class="" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large_size'); ?></a><?php endif; ?>
			<!-- su-post-thumbnail -->

						</div>
					<div class="col-md-6">	

						<h2 class="su-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

						<div class="su-post-meta">
						<?php _e( 'Posted', 'shortcodes-ultimate' ); ?>: <?php the_time( get_option( 'date_format' ) ); ?>
						</div>

						<div class="su-post-excerpt">
							<?php the_excerpt(); ?>
						</div>
					</div>
					</div>	


			</div>

		<?php endwhile; ?>

	<?php else : ?>
		<h4><?php _e( 'Posts not found', 'shortcodes-ultimate' ); ?></h4>
	<?php endif; ?>

</div>
