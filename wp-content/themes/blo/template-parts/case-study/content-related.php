<?php
$terms = get_the_terms(get_the_ID(), 'blo-case-study');
$terms_slg = '';

if(is_array($terms) && '' != $terms){

    $terms_slg = $terms[0]->slug;
}

 $related_args = array(
'post_type' => 'blo-case-study',
'posts_per_page' => 3,
'post_status' => 'publish',
'post__not_in' => array( get_the_ID() ),
'orderby' => 'rand',
'ignore_sticky_posts'=>1,
'tax_query' => array(
array(
'taxonomy' => 'blo-case-study',
'field' => 'slug',
'terms' => $terms_slg
)
)
);




$related_posts = new WP_Query($related_args);

if($related_posts->have_posts()) :
?>
    <div class="row xs-case-study-related-post">
        <div class="col-lg-5 mx-auto">
            <div class="xs-page-headding text-center">
                <p class="text-uppercase"><?php echo esc_html__('Interested!', 'blo'); ?></p>
                <h2><?php echo esc_html__('Have a look on Similar Case Studies', 'blo') ?></h2>
            </div>
        </div>
    </div>
<div class="row case_study_related_content">
<?php

while ($related_posts->have_posts()) : $related_posts->the_post();
?>

    <div class="col-sm-4">
        <div class="xs-case-box">
            <?php if(has_post_thumbnail()): ?>
                <div class="case-thumb">
                    <?php the_post_thumbnail(array(310, 190)); ?>
                    <div class="case-meta">
                        <?php
                        foreach ($terms as $term) {
                            ?>
                            <span><?php echo esc_html($term->name); ?></span>
                            <?php
                        }

                        ?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="case-content">
                <?php the_title('<h3 class="case-title"><a href="'.get_the_permalink().'">', '</a> </h3>'); ?>
                <?php echo wp_trim_words(get_the_content(), 15, ' '); ?>

                <div class="case-footer ekit-wid-con">
                    <a href="<?php esc_url(the_permalink()); ?>" class="xs-btn xs-outline text-uppercase"><?php echo esc_html__('View Details', 'blo') ?> <span style="top: 48.53px; left: 86.5px;"></span>
                    </a>
                </div>
            </div><!-- ./case content -->
        </div>
     </div>

<?php
endwhile;
endif;
?>
</div>
