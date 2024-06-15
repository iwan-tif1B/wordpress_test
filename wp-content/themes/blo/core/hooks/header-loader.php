<?php

function blo_header_builder_kit(){
    if(!is_customize_preview()){
        return;
    }

    $header_settings       = blo_option('theme_header_default_settings');
    $header_builder_enable = blo_option('header_builder_enable');

    if($header_builder_enable=='yes'){
        $args = [
            'posts_per_page'   => -1,
            'orderby'          => 'id',
            'order'            => 'DESC',
            'post_status'      => 'publish',
            'post_type'        => 'elementskit_template',
            'meta_query' => [
                [
                    'key'     => 'elementskit_template_activation',
                    'value'   => 'yes',
                    'compare' => '=',
                ],
            ],
        ];
        $headers = get_posts($args);
        foreach($headers as $header){
            update_post_meta($header->ID, 'elementskit_template_activation', '');
        }
    }
}
add_action( 'wp_loaded', 'blo_header_builder_kit' );