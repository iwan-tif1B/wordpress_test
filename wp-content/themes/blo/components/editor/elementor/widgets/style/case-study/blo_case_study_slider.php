<div class="single-project-slider">
    <div class="left-inner-content">
        <div class="counters" data-animation="fadeInDown" data-delay="0.24s"></div><!-- end counter -->
        <?php the_title('<h3  data-animation="fadeInDown" data-delay="0.28s">', '</h3>'); ?>
        <div data-animation="fadeInDown" data-delay="0.32s">
            <?php the_excerpt(); ?>
        </div>
        <a href="<?php esc_url(the_permalink()); ?>" class="text-link" data-animation="blurInBottom" data-delay="0.36s"><?php echo esc_html($blo_case_study_read_more); ?> <i class="<?php echo esc_attr($blo_case_study_button_icon); ?>"></i></a>
    </div>
    <?php
      $image_url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
    ?>
    <div class="right-inner-content"   style="background-image: url(<?php echo esc_url($image_url); ?>)"></div>
</div><!-- end single project column -->
