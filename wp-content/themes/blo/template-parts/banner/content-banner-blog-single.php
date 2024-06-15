<?php
   $banner_image    =  '';
   $banner_title    = '';
   $header_style    = 'standard';

if ( defined( 'FW' ) ) {
   $banner_settings         = blo_option('blog_banner_setting');
   $banner_style            = blo_option('sub_page_banner_style');
   $header_style            = blo_option('header_layout_style', 'standard');

   //image
   $banner_image = ( is_array($banner_settings['banner_blog_single_image']) && $banner_settings['banner_blog_single_image']['url'] != '') ?
                        $banner_settings['banner_blog_single_image']['url'] : BLO_IMG.'/banner/bredcumbs-1.png';

   //title
   $banner_title = (isset($banner_settings['banner_blog_title']) && $banner_settings['banner_blog_title'] != '') ?
                        $banner_settings['banner_blog_title'] : get_bloginfo( 'name' );
   //show
   $show = (isset($banner_settings['blog_show_banner'])) ? $banner_settings['blog_show_banner'] : 'yes';
   // banner overlay
   $show = (isset($banner_settings['blog_show_banner'])) ? $banner_settings['blog_show_banner'] : 'yes';

   //breadcumb
   $show_breadcrumb =  (isset($banner_settings['blog_show_breadcrumb'])) ? $banner_settings['blog_show_breadcrumb'] : 'yes';

 }else{
     //default
   $banner_image             = '';
   $banner_title             = get_bloginfo( 'name' );
   $show                     = 'yes';
   $show_breadcrumb          = 'no';


 }
 if( isset($banner_image) && $banner_image != ''){
    $banner_image = 'style="background-image:url('.esc_url( $banner_image ).');"';
}
$banner_heading_class = '';
if($header_style=="transparent"):
   $banner_heading_class     = "mt-80";
endif;
?>

<?php if(isset($show) && $show == 'yes'): ?>

    <section class="xs-breadcrumb breadcrumb-height">
        <div class="breadcrumb-bg <?php echo esc_attr($banner_image == ''?'banner-solid':'banner-bg'); ?>" <?php echo wp_kses_post( $banner_image ); ?>></div>
        <div class="container">
            <div class="row breadcrumb-height align-items-center">
                <div class="col-12 d-block d-md-flex justify-content-between">
                    <span class="breadcrumb-title">
                        <?php
                        if(is_archive()){
                            the_archive_title();
                        }else {
                            echo esc_html($banner_title);
                        }
                        ?>
                    </span>

                    <?php if(isset($show_breadcrumb) && $show_breadcrumb == 'yes'): ?>
                        <?php blo_get_breadcrumbs(" . "); ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>

<?php endif; ?>