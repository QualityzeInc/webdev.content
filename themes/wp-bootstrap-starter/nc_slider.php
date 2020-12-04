<?php
/**
* Template Name: Product Nc 
 */
?>
<!--<div class="container-flush">-->
<!--   <div class="container-custom pt-5">-->
<!--      <div class="row">-->
     
<!--hi  Product Nc -->

<!--   </div>-->
<!--</div>-->
<!--</div>-->
<style>
    .product-screenshot .btn-default:active {
    background: #5587dc7a;
}
 #id2 , #id3{
  display:none;
 }
 
#capa ,#dc ,#cm ,#au ,#sq ,#tr ,#cmp ,#ma ,#cal{display:none;}
</style>
<script>
var getSlider = function( paneId ){
 console.log(paneId);
 $.get(paneId, function (data) {
 $("#sliderWrapper").html(data);
 
 alert("Load was performed.");
 });
 }
</script>
<script type="text/javascript">
function show(elementId) { 
 document.getElementById("id1").style.display="none";
 document.getElementById("id2").style.display="none";
 document.getElementById("id3").style.display="none";
 document.getElementById(elementId).style.display="block";
}
function show(elementId) { 
document.getElementById("nc").style.display="none";
document.getElementById("capa").style.display="none";
document.getElementById("dc").style.display="none";
document.getElementById("au").style.display="none";
document.getElementById("cm").style.display="none";
document.getElementById("sq").style.display="none";
document.getElementById("tr").style.display="none";
document.getElementById("cmp").style.display="none";
document.getElementById("ma").style.display="none";
document.getElementById("cal").style.display="none";
document.getElementById(elementId).style.display="block";
}
</script>