<?php
   $banner_image    =  '';
   $banner_title    = '';
   $header_style    = 'standard';

if ( defined( 'FW' ) ) {
   $banner_settings         = blo_option('four_zero_four_banner_setting');
   $banner_style            = blo_option('sub_page_banner_style');
   $header_style            = blo_option('header_layout_style', 'standard');

   //image
   $banner_image = ( is_array($banner_settings['banner_blog_image']) && $banner_settings['banner_blog_image']['url'] != '') ?
                        $banner_settings['banner_blog_image']['url'] : BLO_IMG.'/banner/bredcumbs-1.png';

   //title
   $banner_title = (isset($banner_settings['banner_blog_title']) && $banner_settings['banner_blog_title'] != '') ?
                        $banner_settings['banner_blog_title'] : '404';
   //show
   $show = (isset($banner_settings['four_zero_four_show_banner'])) ? $banner_settings['four_zero_four_show_banner'] : 'yes';
  

 }else{
     //default
   $banner_image             = '';
   $banner_title             = '404';
   $show                     = 'yes';

 }
 if( isset($banner_image) && $banner_image != ''){
    $banner_image = 'style="background-image:url('.esc_url( $banner_image ).');"';
}
$banner_heading_class = '';
if($header_style=="transparent"):
   $banner_heading_class     = "mt-80";
endif;  ?>

<?php if(isset($show) && $show == 'yes'): ?>

    <section class="xs-breadcrumb breadcrumb-height">
        <div class="breadcrumb-bg <?php echo esc_attr($banner_image == ''?'banner-solid':'banner-bg'); ?>" <?php echo wp_kses_post( $banner_image ); ?>></div>
        <div class="container">
            <div class="row breadcrumb-height align-items-center">
                <div class="col-12 d-block d-md-flex justify-content-between">
                    <h1 class="breadcrumb-title">
                        <?php
                        if(is_archive()){
                            the_archive_title();
                        }else {
                            echo esc_html($banner_title);
                        }
                        ?>
                    </h1>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>