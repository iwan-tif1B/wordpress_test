<?php

if($blo_case_study->have_posts()) :
    $unique_id = uniqid();
?>


<div class="tab-content" id="tab_<?php echo esc_attr($unique_id); ?>">

    <?php

     $i = 1;

     while ($blo_case_study->have_posts()) : $blo_case_study->the_post();

     $tab_class = '';
     if($i == 1){
         $tab_class = 'active show';
     }

     ?>

    <div class="tab-pane <?php echo esc_attr($tab_class); ?>" id="tab-<?php echo esc_attr($i . "_" . $this->get_id()); ?>" role="tabpanel" aria-labelledby="xs-tab-<?php echo esc_attr($i . "_" . $this->get_id()); ?>">
        <?php if(has_post_thumbnail()) :
             $image_url =  wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
            ?>
        <div class="case-bg" style="background-image: url(<?php echo esc_url($image_url); ?>);"></div>
        <?php endif; ?>
    </div>
   <?php $i++; endwhile; ?>
</div>


<ul class="nav   xs-case-nav-slider"  role="tablist">

    <?php

    $j = 1;

    while ($blo_case_study->have_posts()) : $blo_case_study->the_post();

        $tab_item_class = '';
        if($j == 1){
            $tab_item_class = 'active';
        }


        ?>

    <li class="nav-item <?php echo esc_attr($tab_item_class . " " ); echo esc_attr($tab_read_more_button_click === "yes" ? " tab_read_more_button_click_style" : ""); ?>">
        <?php 
        if ($tab_read_more_button_click !== "yes") { ?>
            <a class="nav-link <?php echo esc_attr($tab_item_class); ?>" id="xs-tab-<?php echo esc_attr($j . "_" . $this->get_id()); ?>" data-toggle="tab" href="#tab-<?php echo esc_attr($j . "_" . $this->get_id()); ?>" role="tab" aria-controls="tab-<?php echo esc_attr($j . "_" . $this->get_id()); ?>" aria-selected="true" data-href="<?php esc_url(the_permalink()); ?>">
                <?php the_title('<span>', '</span>'); ?>
                <span><i class="<?php echo esc_attr($blo_case_study_button_icon); ?>"></i><?php echo esc_html($blo_case_study_read_more); ?></span>
            </a>
        <?php }
        ?>
        <?php 
        if ($tab_read_more_button_click === "yes") { ?>
            <span class="nav-link <?php echo esc_attr($tab_item_class); ?>" id="xs-tab-<?php echo esc_attr($j . "_" . $this->get_id()); ?>" data-toggle="tab" data-href="#tab-<?php echo esc_attr($j . "_" . $this->get_id()); ?>" role="tab" aria-controls="tab-<?php echo esc_attr($j . "_" . $this->get_id()); ?>" aria-selected="true">
                <?php the_title('<span class="nav-link-title">', '</span>'); ?>
            </span>
            <a class="read-more-button-link" href="<?php esc_url(the_permalink()); ?>" target="_blank">
                <i class="<?php echo esc_attr($blo_case_study_button_icon); ?>"></i>
                <?php echo esc_html($blo_case_study_read_more); ?>
                <span class="tab_hr_line"></span>
            </a>
        <?php }
        ?>
        <div class="study-box ekit-wid-con">
            <i class="<?php echo esc_attr($blo_case_study_tab_icon); ?>"></i>
            <div class="count-no"></div>
            <?php the_title('<h5>', '</h5>'); ?>
            
                <?php the_excerpt(); ?>
          
        </div><!-- end case study box -->
    </li>

    <?php $j++; endwhile; ?>

</ul>

<?php endif;