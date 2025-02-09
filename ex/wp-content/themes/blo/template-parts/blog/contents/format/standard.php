<div class="post-media post-image">
   <?php if(has_post_thumbnail()): ?>   
      <a href="<?php echo esc_url(get_the_permalink()); ?>">
        <?php echo wp_get_attachment_image(get_post_thumbnail_id($post->ID), 'full', false, array(
          'class'  => 'img-fluid', 
          'alt'    => get_the_title()
        )); ?>
      </a>
      <?php 
           if ( is_sticky() ) {
					echo '<sup class="meta-featured-post"> <i class="fa fa-thumb-tack"></i> ' . esc_html__( 'Sticky', 'blo' ) . ' </sup>';
           }
       ?>      
</div>
   <?php endif; ?>

<div class="post-body clearfix">
      <div class="entry-header">
        <?php blo_post_meta(); ?>
        <h2 class="entry-title">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
   
      </div>
      <?php 
           if ( is_sticky() && !has_post_thumbnail() ) {
					echo '<sup class="meta-featured-post"> <i class="fa fa-thumb-tack"></i> ' . esc_html__( 'Sticky', 'blo' ) . ' </sup>';
           }
        
       ?>  
      <div class="post-content">
         <div class="entry-content">
            <p>
                <?php blo_excerpt( 40, null ); ?>
            </p>
         </div>
        <?php
            if(!is_single()):
         
              printf('<div class="post-footer readmore-btn-area"><a class="readmore" href="%1$s">Continue <i class="icon icon-arrow-right"></i></a></div>',
              get_the_permalink()
                );
            endif; 
        ?>
      </div>
  
</div>
<!-- post-body end-->