<style>
    @media only screen and (max-width: 768px){
        .footer-1 {
	display: inline-block!important;
	flex-direction: inherit!important;
	}
    section#custom_html-3{
  display:none!important;}
   #social-icon {
  display:block!important;}
  #back2Top{    
    bottom: 90px;!important;}
}
 #social-icon {
  display:none;}
</style>
<?php

if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) {?>
        <div id="footer-widget" class="row mt-5  m-0 py-2 <?php if(!is_theme_preset_active()){ echo 'footer-custom'; } ?>">
            <div class="container-custom">
                <div class="row">
                    <?php if ( is_active_sidebar( 'footer-1' )) : ?>
                        <div class="col-6 col-md-3 footer-1"><?php dynamic_sidebar( 'footer-1' ); ?></div>
                     
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-2' )) : ?>
                        <div class="col-6 col-md-4"><?php dynamic_sidebar( 'footer-2' ); ?></div>
                    <?php endif; ?>
                   
                    <?php if ( is_active_sidebar( 'footer-3' )) : ?>
                        <div class="col-6 col-md-2"><?php dynamic_sidebar( 'footer-3' ); ?></div>
                    <?php endif; ?>
                    
                     <?php if ( is_active_sidebar( 'footer-4' )) : ?>
                        <div class="col-6 col-md-3 "><?php dynamic_sidebar( 'footer-4' ); ?></div>
                    <?php endif; ?>
              <div class="col">
                  <section id="social-icon" class="widget_text widget widget_custom_html" style="
    /* display: none; */
"><h3 class="widget-title">Find the latest updates on</h3><div class="textwidget custom-html-widget"><div class="footer-icons">
<a href="https://www.linkedin.com/company/qualityze-inc/"><i class="fab fa-linkedin fa-2x pr-3"></i></a>
<a href="https://appexchange.salesforce.com/listingDetail?listingId=a0N3000000DY0fKEAT"><i class="fab fa-salesforce fa-3x pr-3"></i></a>
<a href="https://www.youtube.com/channel/UCbKQjx4H_YAE0ZkYbHTYeNg"><i class="fab fa-youtube fa-2x  pr-3"></i></a>
<a href="https://www.facebook.com/Qualityze/"><i class="fab fa-facebook-square fa-2x  pr-3"></i></a><a href="https://www.twitter.com/qualityze/"><i class="fab fa-twitter-square fa-2x  pr-3"></i></a></div></div></section></div>
                    
                </div>
            </div>
        </div>

<?php }