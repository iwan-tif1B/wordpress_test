<div class="ekit-location elementor-repeater-item-<?php echo esc_attr( $location[ '_id' ] ); ?> ekit-location-on-click <?php echo esc_attr($hotspot_line_class . ' ' . $location['ekit_hotspot_follow_line_direction']);?> <?php echo esc_attr($ekit_hotspot_all_time_show_hide == 'yes' ? 'ekit-all-activated active' : ''); ?> <?php echo ($ekit_hotspot_all_time_show_hide != 'yes' && $location['ekit_hotspot_active'] == 'yes') ? 'active' : ''; ?>">
    <div class="ekit-location_outer">
        <div class="ekit-hotspot-vertical-line">
            <?php if ($ekit_hotspot_show_caret == 'yes') { ?>
                <div class="ekit_hotspot_arrow"></div>
            <?php } ?>
        </div>
        <div class="<?php echo esc_attr($ekit_hotspot_location_wraper_image_position); ?> ekit-location_inner">
            <?php

                if($location['ekit_hotspot_logo']['id'] !='') :
                $image_id = $location['ekit_hotspot_logo']['id'];
                $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);

            ?>
                <div class="ekit_hotspot_image">
                <?php 
                    echo wp_get_attachment_image($location['ekit_hotspot_logo']['id'], 'full', "", 
                    array( 
                    "alt"   => get_the_title($location['ekit_hotspot_logo']['id']),
                    ) );  
                ?>
                    <img src='<?php echo esc_url($location['ekit_hotspot_logo']['url']); ?>' alt='<?php echo esc_attr($image_alt); ?>'>
                </div>
            <?php endif;

                if($location['ekit_hotspot_address'] || $location['ekit_hotspot_title']) :
            ?>
                <div class='media-body'>
                    <?php if ($location['ekit_hotspot_title'] != '') : ?>
                    <h3 class="ekit-hotspot-title"><?php echo esc_html($location['ekit_hotspot_title'], 'elementskit-lite')?></h3>
                    <?php endif; ?>
                    <?php if ($location['ekit_hotspot_address'] != '') : ?>
                    <div class='ekit-location-des'>
                        <?php echo do_shortcode($location['ekit_hotspot_address']); ?>
                    </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="ekit-location_indicator">
        <?php if ($ekit_hotspot_show_glow == 'yes') { ?>
            <div class="ekit_hotspot_pulse_1"></div>
            <div class="ekit_hotspot_pulse_2"></div>
        <?php }; ?>
        <div class="ekit-hotspot-horizontal-line">
            <?php if ($ekit_hotspot_show_caret == 'yes') { ?>
                <div class="ekit_hotspot_arrow"></div>
            <?php } ?>
        </div>
    </div>
</div>