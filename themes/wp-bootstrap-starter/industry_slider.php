<?php
/**
* Template Name: industry_slider
 */
?>
<style>
    .row.industryslide {
    max-height: 220px;
    overflow: hidden;
}
    .row.industryslideopen {
    max-height: 1000px;
    /*overflow: hidden;*/
}
/*.row.industryslide:hover {*/
/*    max-height: max-content;*/
/*    cursor:pointer;*/
/*}*/
@media only screen and (max-width: 768px){
      .row.industryslideopen {
    max-height: max-content!important;}
}
</style>


<div class="container-flush border-bottom  pb-3 banner-adjust">
<div class="container-custom ">

<div class="row industryslide" id="industryslide">
<?php
    $navMenu = wp_get_nav_menu_items(13);                                                    
    foreach ($navMenu as $menu) {   ?>
 
        <div class="col-md-3 col-sm-12 py-2"><div class="card">
    <?php  echo '<img class="card-img-top" src='. get_the_post_thumbnail_url( $menu->object_id , 'medium') .'>';
        
      ?> 
     <!---- <div class="card-body bg1 p-3">--->
     <div class="card-body bg1 p-3">
       <?php   echo '<a href="'. $menu->url .'">'. $menu->title .'</a>'; ?>
        </div></div></div>
    <?php   } ?>
</div>
<div class="p-3 text-center">
    <button class="btn btn-outline-primary shadow-lg" id="showindustries">View All Industries</button>
</div>
</div></div>
<!--<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script>
// $(document).ready(function(){
//   $(".showindustries").click(function(){
//     $("p").slideUp(1000);
//   });

// });
</script>

 <script>
$(function(){
    $('#showindustries').click(function(){
       
        // $('#industryslide').css('max-height', '');
        $('#industryslide').toggleClass('industryslide industryslideopen');
        
        $(this).addClass('d-none slideDown');
        
        //var indSlider = $('#industryslide');
        
        // $( "#industryslide" ).slideDown( "slow", function() {
        //     // Animation complete.
        //     console.log("Inside Slide down");
        // });
        
        // if (indSlider.hasclass('.industryslideopen')){
        //     alert('industryslideopen');
        // }
        
    })
})
//     $(document).ready(function(){
//         var boxHeight = $(".ff").height();
//         $(".ff").mouseenter(function(){
//             $(this).animate({
               
//                 height: "500"
//             });
//         }).mouseleave(function(){
//             $(this).animate({
//                 height: boxHeight
//             });
//         });
//     });    div.animate({height: '300px', opacity: '0.5'}, "slow");

//
</script>