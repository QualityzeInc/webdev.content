<?php
/**
 *
 * template name: Sitemap Page
 * @package bootstrap-basic
 */


/**
 * determine main column size from actived sidebar
 */

?>



<!DOCTYPE html>
<html>
<head>
<title>Qualityze Sitemap</title>
<link rel="shortcut icon" href="https://www.qualityze.com/favicon.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
li #menu-item-3505 ul{display:none;}
html {
  scroll-behavior: smooth;
}

section {
  border-bottom: 1px solid #ccc;
  margin-top: 1em;
}

section .col-md-3 {
  border-left: 1px solid #ccc;
}

section .col-md-3:first-child {
  border: none;
}
.flex-container {
  display: flex;

}

.flex-container > div {
  margin: 0px 20px 0px 0px;
  padding: 10px;

}
.points-arrow  {
    padding-left: 0;
    list-style: none;
}
.nav-menu  {
    padding-left: 0;
    list-style: none;
}

.points-arrow2 {
   
    list-style: none;background-color: #f5f5f547;
}
#menu-industry li:before {
    content: "\f0a9";
    font-family: FontAwesome;
    display: inline-block;
    color: #00a0e4;
    margin-right: 10px;
}
ul#menu-industry {
    list-style: none;
    padding-left:0em;
}
.points-arrow li:before {
    content: "\f0a9";
    font-family: FontAwesome;
    display: inline-block;
    color: #00a0e4;
    margin-right: 10px;
    width: 1.3em;
}
.nav-menu li{

} 
.menu-products_left_nav-container ul {
    -moz-column-count: 4;
    -moz-column-gap: 20px;
    -webkit-column-count: 4;
    -webkit-column-gap: 20px;
    column-count: 2;
    column-gap: 20px;
}
.split ul {
    -moz-column-count: 4;
    -moz-column-gap: 20px;
    -webkit-column-count: 4;
    -webkit-column-gap: 20px;
    column-count: 2;
    column-gap: 20px;
}
.nav-menu li:before {
    content: "\f0a9";
    font-family: FontAwesome;
    display: inline-block;
    color: #00a0e4;
    margin-right: 10px;
    width: 1.3em;
}
.points-arrow2 li:before {
    content: "\f058";
    font-family: FontAwesome;
    display: inline-block;
    color: #00a0e4;
    margin-right: 2px;
 width: 1.3em;
}.gap{    padding-top: 20px;}
.nav>li>a {   display: inline-block!important;}
.sub-menu{list-style: none;}
</style>
<body>

<div class="container-fluid">
<div class="panel panel-default">
   <div class="panel-heading">
        <h3 class="panel-title text-center">Qualityze Site Map</h3> 
    </div>
  <ul class="nav nav-pills points-arrow2 panel-body">
    <li role="presentation"><a href="#sec1">Qualityze</a></li>
    <li role="presentation"><a href="#sec2">Products</a></li>
    <li role="presentation"><a href="#sec3">Industry</a></li>
    <li role="presentation"><a href="#sec5">Blog</a></li>
    <li role="presentation"><a href="#sec6">News</a></li>
    <li role="presentation"><a href="#sec4">Others</a></li>
    <li role="presentation"><a href="#sec7">Video</a></li>
  </ul>
    </div>
<section id="sec1" class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Qualityze</h3> 
    </div>
    <div class="panel-body">
        <ul class="points-arrow">
            <li><a title="ROR Sitemap for https://www.qualityze.com/" href="https://www.qualityze.com/">Home</a></li>
            <li><a title="About US | Qualityze EQMS Solutions" href="https://www.qualityze.com/about-us/">About Us</a></li>
            <li><a title="Why Us? | Qualityze Enterprise Quality Management Solutions" href="https://www.qualityze.com/why-us/">Why Us?</a></li>
            <li><a title="Contact Qualityze Support Team for EQMS Solutions" href="https://www.qualityze.com/contact-us/">Contact Us</a></li>
        </ul>
    </div>
</section>

   <section id="sec2"class="panel panel-default">
    <div class="panel-heading">
            <h3 class="panel-title">All Menu</h3> 
    </div>
    <div class="panel-body">
          <?php
    if (is_page('projects')) {
        if ( is_active_sidebar( 'sidebar-navigation' )) {
            dynamic_sidebar( 'sidebar-navigation' );
        }
    }
    

?>    <?php if ( is_page('projects') ) : ?>
<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => 'conditional-menu-name', 'menu_class' => 'nav-menu' ) ); ?>
<?php else : ?>
<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => 'products_left_nav', 'menu_class' => 'nav-menu' ) ); ?>
<?php endif; ?>
    </div>
  </section>
  <section id="sec3"class="panel panel-default split">
      
          <div class="panel-heading">
            <h3 class="panel-title">Industry</h3> 
            </div>

   <div class="panel-body">
    <?php wp_nav_menu(13); ?>
    </div>
  </section>
  <section id="sec4"class="panel panel-default split">
   <div class="panel-heading">
            <h3 class="panel-title">Others</h3> 
            </div>


    <div class="panel-body">

              <ul class="points-arrow">
        <li><a title="News | Qualityze" href="https://www.qualityze.com/news/">News</a></li>
  <li><a title="Videos | Qualityze" href="https://www.qualityze.com/videos/">Videos</a></li>
  <li><a title="Quality Management Partners | Qualityze EQMS Software
" href="https://www.qualityze.com/partners/">Partners</a></li>
  <li><a title="Qualityze Careers | Job Openings at Qualityze" href="https://www.qualityze.com/careers/">Careers</a></li> 

   <li><a title="Client Testimonials | What Customers Say About Qualityze &amp; its Solutions
" href="https://www.qualityze.com/client-testimonials/">Testimonials</a></li>
  <li><a title="" href="https://www.qualityze.com/services/">Services</a></li>
         
  <li><a title="Request Demo | Qualityze" href="https://www.qualityze.com/request-demo/">Request Demo</a></li>
  <li><a title="Qualityze Support | Contact Us for QMS Solutions" href="https://www.qualityze.com/support/">Support</a></li>
        </ul>
 
    </div>
  </section>
<section id="sec5"class="panel panel-default split">
   <div class="panel-heading">
            <h3 class="panel-title">Blogs</h3> 
            </div>

    <div class="panel-body">
   
     
          <ul class="points-arrow">
 <?php $args = array(
                            'post_type' => 'post' ,
                            'orderby' => 'date' ,     'post_status' => array( 'publish' ),

                            'order' => 'ASC' ,
                             'posts_per_page' => 100,
                            	'cat' => '17',
                            'paged' => get_query_var('paged'),
                            'post_parent' => $parent
                       ); ?>
                       <?php query_posts($args); ?>
                       <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                                     <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                            <?php endwhile; ?>
                        <?php endif; ?></li>
  
        </ul>
 
    </div>
  </section>
<section id="sec6"class="panel panel-default split">
   <div class="panel-heading">
            <h3 class="panel-title">News</h3> 
            </div>


    <div class="panel-body flex-container">
   
   
          <ul class="points-arrow">
 <?php $args = array(
                            'post_type' => 'post' ,
                                 'post_status' => array( 'publish' ),

                            'orderby' => 'date' ,
                            'order' => 'ASC' ,
                            'posts_per_page' => 100,
                            	'cat' => '18',
                            'paged' => get_query_var('paged'),
                            'post_parent' => $parent
                       ); ?>
                       <?php query_posts($args); ?>
                       <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                                     <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                            <?php endwhile; ?>
                        <?php endif; ?></li>
  
        </ul>
      </div>

  </section>
  <section id="sec7"class="panel panel-default">
    <div class="panel-heading">
            <h3 class="panel-title">Video</h3> 
    </div>
    <div class="panel-body">
          <ul class="points-arrow">
    <li><a href="https://www.qualityze.com/videos/">Video</a></li>
        </ul>
    </div>
  </section>
 

</div>
<!-- /container -->
<script>
$('#menu-item-6241').removeAttr('id');
$('#menu-item-5781').removeAttr('id');

</script>
</body>
</html> 

