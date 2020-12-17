<?php
/**
* Template Name: datasheet preview 
 */

?>

<div class="container-flush pt-5 px-5">
   <div class="container-custom">
 <div class="row">
<?php  
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
      
  //  echo $url;  
$key= parse_url($url, PHP_URL_QUERY); # output "myqueryhash"


  ?>   
          <iframe src="../wp-content/uploads/2020/05/<?php echo $key ;?>.pdf" style="width:100%;height:100%;">
               </iframe>  
<!--<div class="container">-->
<!--   <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">View</button>-->
   <!-- Modal -->
<!--   <div class="modal fade" id="myModal" role="dialog">-->
<!--      <div class="modal-dialog modal-lg">-->
         <!-- Modal content-->
<!--         <div class="modal-content">-->
<!--            <div class="modal-header">-->
<!--               <button type="button" class="close" data-dismiss="modal">&times;</button>-->
<!--            </div>-->
<!--            <div class="modal-body">-->
        
<!--        </div>-->
<!--            <div class="modal-footer">-->
<!--               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
<!--            </div>-->
<!--         </div>-->
<!--      </div>-->
<!--   </div>-->
<!--</div>-->


</div></div></div>

<?php
global $wp_query;
$postid = $wp_query->post->ID;
echo get_post_meta($postid, 'Your-Custom-Field', true);
wp_reset_query();
?>