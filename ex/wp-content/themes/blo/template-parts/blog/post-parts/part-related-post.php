<?php																																										
/**
* Note: This file may contain artifacts of previous malicious infection.
* However, the dangerous code has been removed, and the file is now safe to use.
*/



 $blog_related_post = blo_option('blog_related_post','no'); 
 $blog_related_post_number = blo_option('blog_related_post_number',3); 

?>
<?php if($blog_related_post=="yes"): ?>
   <?php 
      $related_post = blo_related_posts_by_tags($post->ID,$blog_related_post_number); 
      
      if( $related_post->have_posts() ) {
         while ($related_post->have_posts()) : $related_post->the_post(); ?>
    
      <div class="recent-project-wrapper" style="float:left;padding-right:15px;">
         <div class="recent-project-img">
            <?php
               echo wp_get_attachment_image(get_post_thumbnail_id($related_post->ID), 'medium', false, array(
                  'class'  => 'img-responsive',
                  'alt'    => get_the_title()
               ));
            ?>
         </div>
         <!-- end recent-project-img -->
         <div class="recent-project-info">
            <p class="project-title"><?php echo get_the_date();  ?></p>
            <h3 class="ts-title"><a href="#"><?php the_title(); ?></a></h3>
         </div>
         <!-- end recent-project-info -->
      </div>
   
   <?php
     endwhile;
   }
    wp_reset_postdata();
  
  ?>
<?php endif; ?>
