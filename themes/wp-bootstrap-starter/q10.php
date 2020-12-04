<?php
/**
* Template Name: q10
 */
?>
<?php

?>
<div class="container-flush  banner-adjust">
   <div class="container-custom ">
      <div class="row industryslide" id="industryslide">
         <?php
            $navMenu = wp_get_nav_menu_items(29);                                                    
            foreach ($navMenu as $menu) {   ?>
         <div class="col-md-3 col-sm-12 py-2">
            <div class="card">
               <?php  echo '<img class="card-img-top" src='. get_the_post_thumbnail_url( $menu->object_id , 'full') .'>';
                  ?> 
               <div class="card-body bg1 p-3">
                  <?php   echo '<a href="'. $menu->url .'">'. $menu->title .'</a>'; ?>
              
               </div>
            </div>
         </div>
         <?php   } ?>
      </div>
   </div>
</div>