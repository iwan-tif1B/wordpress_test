<div class="col-lg-4 col-md-6 blog-style-two">
    <article class="single-home-blog wow fadeInUp animated" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;">
        
        <?php if(has_post_thumbnail()) : ?>
        <div class="xs-post-thumbnail">
            <a href="<?php esc_url(the_permalink()); ?>">
                <?php the_post_thumbnail(); ?>
            </a>
        </div>
        <?php endif; ?>
        <div class="entry-content__">

                <?php the_title('<header class="entry-header"><h2 class="entry-title"><a href="'.get_the_permalink().'">', '</a></h2> </header>'); ?>

               <?php the_excerpt(); ?>

            <footer class="entry-footer ekit-wid-con">
                <a href="<?php esc_url(the_permalink()); ?>" class="blo-btn-case-study-box-style-2"><?php echo esc_html($blo_case_study_read_more); ?> <i class="<?php echo esc_attr($blo_case_study_button_icon); ?>"></i></a>
            </footer><!-- end entry footer -->
        </div>
    </article><!-- end article -->
</div>