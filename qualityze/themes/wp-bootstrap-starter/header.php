<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="google-site-verification" content="DHs6umbGed2vVAGhf3if8w6q3u3tuu0bkcrVW9wemy4" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index"/>
    <!--<script type='text/javascript' src='/wp-content/themes/wp-bootstrap-starter/inc/assets/js/analytics.js'></script>-->
  <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>-->
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

    <?php/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>*/?>
    
    <script>

 
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

 
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

 
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

 
})(window,document,'script','/wp-content/themes/wp-bootstrap-starter/inc/assets/js/analytics.js','ga');

 
 

 
ga('create', 'UA-84163511-1', 'auto');

 
ga('send', 'pageview');
</script>

<?php wp_head(); ?>
<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	<!-- <header id="masthead" class="site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner"> -->
	<!--<header id="masthead" class="site-header fixed-top navbar-light bg-white  shadow-sm  square" role="banner">-->
	<?php echo do_shortcode('[accept_gdpr]'); ?>
<header id="masthead" class="site-header no-sticky-mb sticky-top navbar-light bg-custom  shadow-sm  square" role="banner">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-xl p-1">
                <div class="navbar-brand mb-brand">
                    <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
                            <img src="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        </a>
                    <?php else : ?>
                        <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                    <?php endif; ?>

                </div>
                <button class="navbar-toggler mb-main-menu" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
          

                <?php
                wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'       => 'div',
                'container_id'    => 'main-nav',
                'container_class' => 'collapse navbar-collapse justify-content-end mb-responsive',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav',
                'depth'           => 5,
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
                ));

                // wp_nav_menu(array(
                //     'theme_location'    => 'secondary',
                //     'container'       => 'div',
                //     'container_id'    => 'main-nav',
                //     'container_class' => 'collapse navbar-collapse justify-content-end',
                //     'menu_id'         => false,
                //     'menu_class'      => 'navbar-nav',
                //     'depth'           => 2,
                //     'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                //     'walker'          => new wp_bootstrap_navwalker()
                //     ));
                //
                 ?>

            </nav>
        </div>
	</header><!-- #masthead -->
   
    <!-- <div id="content" class="site-content"> -->
	<!--<div id="content " class=" pt-5 mt-3 site-content"> chanhhed sticy below div class and csss header#masthead padding to zero ovride in trail.css-->

	<div id="content " class="site-content">
		<div class="container-flush">
			<div class="row no-gutters">
                <?php endif; ?>