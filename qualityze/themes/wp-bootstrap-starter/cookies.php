<?php
/**
* Template Name: cookies
 */
?>
<!--<div class="container">-->
<!--  <h3>Popover Example</h3>-->
<!--  <a href="#" title="Header" data-toggle="popover" data-content="Some content">Click Me</a><br>-->
<!--  <a href="#" title="Header" data-toggle="popover" data-trigger="hover" data-content="Some content">Hover over me</a>-->
<!--</div>-->

<!--<script>-->
<!--var $=jQuery;-->
<!--$(document).ready(function(){-->
    
<!--    $('[data-toggle="popover"]').popover();   -->
<!--});-->
<!--</script>-->
<!-- Button trigger modal -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://www.qualityze.com/wp-content/themes/wp-bootstrap-starter/inc/assets/js/bootstrap.js"></script>

    <script type="text/javascript">
    // var $=jQuery;
    jQuery(function(){
         alert('hi');
            jQuery("#exampleModal").modal('show');
    })
   
    //   $(document).ready(function(){
          
    //       $("#exampleModal").modal('show');
    //   });
  </script>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade"id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

