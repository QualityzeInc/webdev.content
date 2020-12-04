<?php
/**
* Template Name: testimonial_list
 */
?>

<?php
$menuItems = wp_get_nav_menu_items('testimonial');
foreach($menuItems as $page) {
    $post = get_post($page->object_id);
    $content = apply_filters('the_content' , $post->post_content);
}
?>

<div class="container-flush  banner-adjust">
   <div class="container-custom ">
    <?php
            $navMenu = wp_get_nav_menu_items(28);                                                    
            foreach ($navMenu as $menu) {   ?>
   <h2>
                    <?php   //echo '<a href="'. $menu->url .'">'. $menu->title .'</a>'; ?>  

             <?php   echo  $menu->title; ?> 
             </h2>
                <?php echo $content;?>
            
    <?php   } ?>

    </div>
</div>

