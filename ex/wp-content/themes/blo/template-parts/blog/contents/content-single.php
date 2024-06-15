
<?php if ( has_post_thumbnail() && !post_password_required() ) :?>
    <div class="post-media post-image">
        
        <?php echo wp_get_attachment_image(get_post_thumbnail_id($post->ID), 'full', false, array(
          'class'  => 'img-fluid', 
          'alt'    => get_the_title()
        )); ?>

        <?php
        $date_style = blo_option('blog_date_style','classic');
        if ( $date_style == "creative" ) :
            blo_post_meta_date();
        endif;
        ?>
    </div>

<?php endif; ?>
<?php

$format = get_post_format();
$video_url = blo_meta_option(get_the_ID(), 'featured_video');
$video_embade_url = blo_video_embed($video_url);
if($format == 'video' && $video_url != '') : ?>
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="<?php echo esc_url($video_embade_url); ?>"></iframe>
    </div>

<?php endif; ?>
<div class="post-body clearfix">

    <!-- Article header -->
    <header class="entry-header clearfix">
        <?php blo_post_meta(); ?>
        <h1 class="entry-title">
            <?php the_title(); ?>
        </h1>
    </header><!-- header end -->

    <!-- Article content -->
    <div class="entry-content clearfix">
        <?php
        if ( is_search() ) {
            the_excerpt();
        } else {
            the_content( esc_html__( 'Continue reading &rarr;', 'blo' ) );
            blo_link_pages();
        }
        ?>
        <div class="post-footer clearfix">
            <?php get_template_part( 'template-parts/blog/post-parts/part', 'tags' ); ?>
        </div> <!-- .entry-footer -->

        <?php
        if ( is_user_logged_in() && is_single() ) {
            ?>

            <p style="float:left;margin-top:20px;">
                <?php
                edit_post_link(
                    esc_html__( 'Edit', 'blo' ),
                    '<span class="meta-edit">',
                    '</span>'
                );
                ?>

            </p>
            <?php
        }
        ?>
    </div> <!-- end entry-content -->
</div> <!-- end post-body -->
