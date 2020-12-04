<?php
if ( $su_posts->have_posts() ) :
	while ( $su_posts->have_posts() ) :
		$su_posts->the_post();
		echo '<h2>' . get_the_title() . '</h2>';
		the_excerpt();
	endwhile;
else :
	echo 'Posts not found here';
endif;
?>