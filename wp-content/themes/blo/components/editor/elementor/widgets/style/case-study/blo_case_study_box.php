<div class="col-lg-4 col-md-6">
    <div class="xs-case-box">
        <?php if(has_post_thumbnail()) : ?>
        <div class="case-thumb">
            <a href="<?php echo esc_url(the_permalink()); ?>">
                 <?php the_post_thumbnail('full');
                 $categories = get_the_terms( get_the_ID(), 'blo-case-study' );
                 ?>
                <div class="case-meta">
                    <?php foreach ($categories as $cat) : ?>
                    <span><?php echo esc_html($cat->name); ?></span>
                    <?php endforeach; ?>
                </div>
            </a>
        </div>
        <?php endif; ?>
        <div class="case-content">
            <?php the_title(' <h3 class="case-title"><a href="'.get_the_permalink().'">', '</a></h3>'); ?>
            <p>
                <?php the_excerpt(); ?>
            </p>

            <div class="case-footer ekit-wid-con">
                <a href="<?php esc_url(the_permalink()); ?>" class="xs-btn xs-outline text-uppercase"><?php echo esc_html($blo_case_study_read_more); ?>
                    <span style="top: 48.53px; left: 86.5px;"></span>
                </a>
            </div>
        </div><!-- ./case content -->
    </div><!-- end single career -->
</div>