<?php
get_header();

if(is_shop()){

    get_template_part( 'template-parts/banner/content', 'banner-woo' );

}elseif (is_single()){
    get_template_part( 'template-parts/banner/content', 'banner-woo-single' );
}

$sidebar = blo_option('blo_woo_shop_page_setting', 'rsidbar');
$sidebar_enable_class = 'col-md-12';

if($sidebar != 'fluid'){
    $sidebar_enable_class = 'col-md-8';
}

?>

<div class="woo-xs-content">
    <div class="container">
        <div class="row">
            <?php
            if ( is_active_sidebar( 'sidebar-woo' )  && !is_product()) {
                if($sidebar == 'lidebar'){
                    get_sidebar( 'woo' );
                }
            }
            ?>
            <div id="content" class="<?php echo esc_attr($sidebar_enable_class); ?>">
                <div class="main-content-inner wooshop clearfix">
                    <?php if ( have_posts() ) : ?>
                        <?php woocommerce_content(); ?>
                    <?php endif; ?>
                </div> <!-- close .col-sm-12 -->
            </div><!--/.row -->
            <?php
            if ( is_active_sidebar( 'sidebar-woo' )  && !is_product()) {
                if($sidebar == 'rsidbar'){
                    get_sidebar( 'woo' );
                }
            }
            ?>
        </div><!--/.row -->
    </div><!--/.row -->
</div><!--/.row -->


<?php get_footer(); ?>