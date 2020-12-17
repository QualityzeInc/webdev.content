<?php
/**
* Template Name: ceo 
 */
?>
<?php
        // the query
        $the_query = new WP_Query(array(
            'category_name' => 'Blogs',
            'post_status' => 'publish',
            'posts_per_page' => 1,
        ));
        ?>

        <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            
<div class="container-flush">
    <div class="container-custom pt-4">
        <div class="row">
            <div class="col-md-7">
                <div class="row">
            	   <div class="col-md-4 col-4 px-3">
            		  <img src="/wp-content/uploads/2020/09/qualityze-salesforce-isv-platinum-partner.jpg" loading="lazy" class="ceo-img sales-force-img card-img py-4" alt="..." style="">
            	   </div>
            	   <div class="col-md-8 px-3 col-8 pb-3">
            		  <h4 style="margin-bottom: 5px;">Salesforce.com : Platform as a Service (PaaS)</h4>
            		  <!--<h4>Salesforce1 : Platform as a Service (PaaS)</h4>-->
            		  <p class="card-text" style="margin-bottom: 5px;">
            			 Salesforce is the world’s leading reliable and secure enterprise cloud platform. By choosing Qualityze
            			 on Salesforce.com platform
            		  </p>
            		  <a href="/platform-overview" target="_blank"class="text-primary">Read more </a>
            	   </div>
            	</div>
            </div>
            <div class="col-md-5 pb-3 side-news">
             <p class="mb-2 mt-3"><b><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></b></p>
                <?php echo limit_words(get_the_excerpt(), '25'); ?>
                 <a href="<?php the_permalink() ?>" target="_blank"class="text-primary">Read more </a>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <p><?php __('No News'); ?></p>
                    <?php endif; ?>
            </div>
        </div>
    <!--<div class="col" id="ceo-image">-->
    <!--    <img src="/wp-content/uploads/2020/03/ceo-corner@2x.png" class="card-img" alt="...">-->
    <!--</div>-->
   </div>
</div>
