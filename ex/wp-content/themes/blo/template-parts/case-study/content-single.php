<?php
$client = '';
$meta_title = '';
$terms = get_the_terms(get_the_ID(), 'blo-case-study');

if(defined('FW')){
    $client =   fw_get_db_post_option(get_the_ID(), 'case_study_header_client', '');
    $meta_title =   fw_get_db_post_option(get_the_ID(), 'case_study_header_title', '');
}


?>
<div class="case_study_content_info">
   <div class="case_study_meta">
        <?php if($meta_title !='') : ?>
            <h3><?php echo esc_html($meta_title); ?></h3>
        <?php endif; ?>
        <div class="row blog_caase_study_header_row">
            <div class="col-sm-6">
                <ul class="blo_case_study_single_page_list">
                    <?php if($client != '') : ?>
                        <li><strong><?php echo esc_html__('Client:', 'blo') ?> </strong> <span><?php echo esc_html($client); ?></span></li>
                    <?php endif; ?>

                    <?php if(is_array($terms) && $terms != '') : ?>
                        <li><strong><?php echo esc_html__('Category:', 'blo') ?> </strong>

                            <?php
                            foreach ($terms as $term) {
                                ?>
                                <span><?php echo esc_html($term->name); ?></span>
                                <?php
                            }

                            ?>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="col-sm-6">
                <ul class="blo_case_study_single_page_list">
                    <li><strong><?php echo esc_html__('Date:', 'blo') ?></strong> <span><?php echo esc_html(get_the_date('d F Y')) ?></span></li>
                    <?php if(function_exists('blo_social_share')) : ?>
                    <li>
                        <strong><?php echo esc_html__('Share:', 'blo') ?></strong>
                        <?php blo_social_share(); ?>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
   </div>
    <!--Featured iamge -->
    <?php
    the_content();

    ?>
</div>