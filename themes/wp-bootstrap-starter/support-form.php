<?php
/**
* Template Name: ceo 
 */
?>

<style>
    .zsFontClass {
        color: #000000;
        font-family: 'Open Sans', sans-serif;
        font-size: 14px
    }
    border-custom{
            border-color: #455870!important;
    }
</style>
<style>
    .manfieldbdr {
        border-left: 1px solid #ff6448!important
    }
    
    .hleft {
        text-align: left;
    }
    
    input[type=file]::-webkit-file-upload-button {
        cursor: pointer;
    }
    
    .wtcsepcode {
        margin: 0px 15px;
        color: #aaa;
        float: left;
    }
    
    .wtccloudattach {
        float: left;
        color: #00a3fe!important;
        cursor: pointer;
        text-decoration: none!important;
    }
    
    .wtccloudattach:hover {
        text-decoration: none!important;
    }
    
    .wtcuploadinput {
        cursor: pointer;
        float: left;
        width: 62px;
        margin-top: -20px;
        opacity: 0;
        clear: both;
    }
    
    .wtcuploadfile {
        float: left;
        color: #00a3fe;
    }
    
    .filenamecls {
        margin-right: 15px;
        float: left;
        margin-top: 5px;
    }
    
    .clboth {
        clear: both;
    }
    
    #zsFileBrowseAttachments {
        clear: both;
        margin: 5px 0px 10px;
    }
    
    .zsFontClass {
        vertical-align: top;
    }
    
    #tooltip-zc {
        font: normal 12px Arial, Helvetica, sans-serif;
        line-height: 18px;
        position: absolute;
        padding: 8px;
        margin: 20px 0 0;
        background: #fff;
        border: 1px solid #528dd1;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        border-radius: 5px;
        color: #eee;
        -webkit-box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.2);
        -moz-box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.2);
        z-index: 10000;
        color: #777
    }
    
    .wtcmanfield {
        color: #f00;
        font-size: 16px;
        position: relative;
        top: 2px;
        left: 1px;
    }
    
    #zsCloudAttachmentIframe {
        width: 100%;
        height: 100%;
        z-index: 99999!important;
        position: fixed;
        left: 0px;
        top: 0px;
        border-style: none;
        display: none;
        background-color: #fff;
    }
    
    .wtchelpinfo {
        background-position: -246px -485px;
        width: 15px;
        height: 15px;
        display: inline-block;
        position: relative;
        top: 2px;
        background-image: url('https://css.zohostatic.com/support/1012079/images/zs-mpro.png');
    }
    
    .zsMaxSizeMessage {
        font-size: 13px;
    }
</style>
<script src="https://js.zohostatic.com/support/static/jquery-3.1.0.min.js"></script>
<script src="https://js.zohostatic.com/support/fbw_v3/jquery.encoder.min.js"></script>
<script>
    var zctt = function() {
        var tt, mw = 400,
            top = 10,
            left = 0,
            doctt = document;
        var ieb = doctt.all ? true : false;
        return {
            showtt: function(cont, wid) {
                if (tt == null) {
                    tt = doctt.createElement('div');
                    tt.setAttribute('id', 'tooltip-zc');
                    doctt.body.appendChild(tt);
                    doctt.onmousemove = this.setpos;
                    doctt.onclick = this.hidett;
                }
                tt.style.display = 'block';
                tt.innerHTML = cont;
                tt.style.width = wid ? wid + 'px' : 'auto';
                if (!wid && ieb) {
                    tt.style.width = tt.offsetWidth;
                }
                if (tt.offsetWidth > mw) {
                    tt.style.width = mw + 'px'
                }
                h = parseInt(tt.offsetHeight) + top;
                w = parseInt(tt.offsetWidth) + left;
            },
            hidett: function() {
                tt.style.display = 'none';
            },
            setpos: function(e) {
                var u = ieb ? event.clientY + doctt.body.scrollTop : e.pageY;
                var l = ieb ? event.clientX + doctt.body.scrollLeft : e.pageX;
                var cw = doctt.body.clientWidth;
                var ch = doctt.body.clientHeight;
                if (l < 0) {
                    tt.style.left = left + 'px';
                    tt.style.right = '';
                } else if ((l + w + left) > cw) {
                    tt.style.left = '';
                    tt.style.right = ((cw - l) + left) + 'px';
                } else {
                    tt.style.right = '';
                    tt.style.left = (l + left) + 'px';
                }
                if (u < 0) {
                    tt.style.top = top + 'px';
                    tt.style.bottom = '';
                } else if ((u + h + left) > ch) {
                    tt.style.top = '';
                    tt.style.bottom = ((ch - u) + top) + 'px';
                } else {
                    tt.style.bottom = '';
                    tt.style.top = (u + top) + 'px';
                }
            }
        };
    }();
    var zsWebFormMandatoryFields = new Array('First Name', 'Contact Name', 'Email', 'Subject');
    var zsFieldsDisplayLabelArray = new Array('First Name', 'Last Name', 'Email', 'Subject');

    function zsValidateMandatoryFields() {
        var name = '';
        var email = '';
        var isError = 0;
        for (var index = 0; index < zsWebFormMandatoryFields.length; index++) {
            isError = 0;
            var fieldObject = document.forms['zsWebToCase_124588000000186001'][zsWebFormMandatoryFields[index]];
            if (fieldObject) {
                if (((fieldObject.value).replace(/^\s+|\s+$/g, '')).length == 0) {
                    alert(zsFieldsDisplayLabelArray[index] + ' cannot be empty ');
                    fieldObject.focus();
                    isError = 1;
                    return false;
                } else {
                    if (fieldObject.name == 'Email') {
                        if (!fieldObject.value.match(/[A-Za-z0-9._%\-+]+@[A-Za-z0-9.\-]+\.[a-zA-Z]{2,22}/)) {
                            isError = 1;
                            alert('Enter a valid email-Id');
                            fieldObject.focus();
                            return false;
                        }
                    }
                }
                if (fieldObject.nodeName == 'SELECT') {
                    if (fieldObject.options[fieldObject.selectedIndex].value == '-None-') {
                        alert(zsFieldsDisplayLabelArray[index] + ' cannot be none');
                        fieldObject.focus();
                        isError = 1;
                        return false;
                    }
                }
                if (fieldObject.type == 'checkbox') {
                    if (fieldObject.checked == false) {
                        alert('Please accept ' + zsFieldsDisplayLabelArray[index]);
                        fieldObject.focus();
                        isError = 1;
                        return false;
                    }
                }
            }
        }
        if (isError == 0) {
            document.getElementById('zsSubmitButton_124588000000186001').setAttribute('disabled', 'disabled');
        }
    }

    function zsResetWebForm(webFormId) {
        document.forms['zsWebToCase_' + webFormId].reset();
        document.getElementById('zsSubmitButton_124588000000186001').removeAttribute('disabled');
    }
    
    
</script>

<div class="container-flush">
   <div class="container-custom pt-5">
      <div class="row">
         <div class="col-md-3 border border-custom d-none">
             <div>         <h2>News</h2>
      <?php
        // the query
        $the_query = new WP_Query(array(
            'category_name' => 'video',
            'post_status' => 'publish',
            'posts_per_page' => 1,
        ));
        
        ?> 
                <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
               <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
           
                <?php the_excerpt(); ?>
            

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p><?php __('No News'); ?></p>
        <?php endif; ?>
        </div>
         
        
              <div>    
             
           
         <?php
        // the query
        $blogs = new WP_Query(array(
            'category_name' => 'blogs',
            'post_status' => 'publish',
            'posts_per_page' => 1,
        ));
        
        
        ?>


        
        <h2>Blogs</h2>
          <?php if ($blogs->have_posts()) : ?>
            <?php while ($blogs->have_posts()) : $blogs->the_post(); ?>
               <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
           
                <?php the_excerpt(); ?>
            

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p><?php __('No News'); ?></p>
        <?php endif; ?>  </div>

          </div>
       <div class="col-md-12 border border-custom p-2">
<p class="text-center"><strong>Please fill out the following form and we’ll get right back to you</strong> or Call Technical Support at +1 877-207-8616</p>

<div id="zohoSupportWebToCase" align="center">
    <form id="zsWebToCase_124588000000186001" action="https://support.qualityze.com/support/WebToCase" enctype="multipart/form-data" method="POST" name="zsWebToCase_124588000000186001">
        
        <table class="table zsFormClass" border="0" width="100%" cellspacing="0" cellpadding="5">
            <tbody>
                <tr>
                    <td class="zsFontClass" colspan="2"><strong>Support Request</strong></td>
                </tr>
                <tr>
                    <td class="zsFontClass " align="left" nowrap="nowrap" width="25%">First Name</td>
                    <td align="left" width="75%">
                        <input class="manfieldbdr form-control" maxlength="120" name="First Name" type="text" value="" />
                    </td>
                </tr>
                <tr>
                    <td class="zsFontClass " align="left" nowrap="nowrap" width="25%">Last Name</td>
                    <td align="left">
                        <input class="manfieldbdr form-control" maxlength="120" name="Contact Name" type="text" />
                    </td>
                </tr>
                <tr>
                    <td class="zsFontClass " align="left" nowrap="nowrap">Email</td>
                    <td align="left" width="75%">
                        <input class="manfieldbdr form-control" maxlength="120" name="Email" type="text" value="" />
                    </td>
                </tr>
                <tr>
                    <td class="zsFontClass " align="left" nowrap="nowrap" width="25%">Phone</td>
                    <td align="left" width="75%">
                        <input class="manfieldbdr form-control" maxlength="120" name="Phone" type="text" value="" />
                    </td>
                </tr>
                <tr>
                    <td class="zsFontClass " align="left" nowrap="nowrap" width="25%">Product</td>
                    <td align="left" width="75%">
                        <select class="form-control" name="Product">
                            <option value="-None-">-None-</option>
                            <option value="NC">Nonconformance Management</option>
                            <option value="CAPA">CAPA Management</option>
                            <option value="DOCUMENT">Document Management</option>
                            <!--<option value="QUALITY CENTRAL">QUALITY CENTRAL</option>-->
                            <option value="CHANGE">Change Management</option>
                             <option value="Training">Training Management</option>
                             <option value="AUDIT">Audit Management</option>
                              <option value="Supplier Quality">Suppli Quality Management</option>
                               <option value="Calibration">Calibration Management</option>
                               <option value="Complaints">Complaints Management</option>
                                  <option value="Maintenance">Maintenance Management</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="zsFontClass " align="left" nowrap="nowrap" width="25%">Subject</td>
                    <td align="left" width="75%">
                        <input class="manfieldbdr form-control" maxlength="255" name="Subject" type="text" value="" />
                    </td>
                </tr>
                <tr>
                    <td class="zsFontClass " align="left" nowrap="nowrap" width="25%">Description</td>
                    <td align="left" width="75%">
                        <textarea class="manfieldbdr form-control" maxlength="3000" name="Description"></textarea>
                        <div class="_e725ae-textarea_btn _e725ae-show _e725ae-anonymous _e725ae-field_hovered _e725ae-not_focused" style="z-index: 2; opacity: 1; transform: translate(631.25px, 334px);"></div>
                        &nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2" align="right" width="25%">
                        <input class="btn btn-default btn-lg" type="button" value="Reset" />
                        <input id="zsSubmitButton_124588000000186001" class="btn btn-danger btn-lg" type="submit" value="Submit" />
                    </td>
                </tr>
            </tbody>
        </table>
<input name="xnQsjsdp" type="hidden" value="7AYHzhjVYuYw-lEYqg3rXQ$$" />
        <input name="xmIwtLD" type="hidden" value="PARECRpFjcAp8sRjpcOeJG-*B6-MHnNR" />
        <input name="actionType" type="hidden" value="Q2FzZXM=" />
        <input name="returnURL" type="hidden" value="http://www.qualityze.com/qualityze-support/" />
    </form>
</div>


</div></div></div></div>