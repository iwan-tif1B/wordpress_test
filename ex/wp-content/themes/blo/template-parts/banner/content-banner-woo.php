<?php
$banner_image    = '';
$banner_title    = '';
$banner_style    = 'full';
$header_style    = 'standard';

if ( defined( 'FW' ) ) {

    $banner_settings          = blo_option('blo_shop_banner_setting');
    $banner_image             = blo_meta_option( get_the_ID(), 'blo_shop_banner_image' );

    //title
    if(blo_meta_option( get_the_ID(), 'blo_shop_banner_page_title' ) != ''){
        $banner_title = blo_meta_option( get_the_ID(), 'blo_shop_banner_page_title' );
    }elseif($banner_settings['blo_shop_banner_page_title'] != ''){
        $banner_title = $banner_settings['blo_shop_banner_page_title'];
    }else{
        $banner_title   = get_the_title();
    }

    //image
    if(is_array($banner_image) && $banner_image['url'] != '' ){
        $banner_image = $banner_image['url'];
    }elseif( is_array($banner_settings['blo_shop_banner_image']) && $banner_settings['blo_shop_banner_image']['url'] != ''){
        $banner_image = $banner_settings['blo_shop_banner_image']['url'];
    }else{

        $banner_image = BLO_IMG.'/banner/bredcumbs-1.png';
    }

    $show = (isset($banner_settings['blo_shop_page_show_banner'])) ? $banner_settings['blo_shop_page_show_banner'] : 'yes';
    // breadcumb
    $show_breadcrumb =  (isset($banner_settings['blo_shop_page_show_breadcrumb'])) ? $banner_settings['blo_shop_page_show_breadcrumb'] : 'yes';


}else{
    //default
    $page_sub_menu             = '';
    $banner_image             = '';
    $banner_title             = get_the_title();
    $show                     = 'yes';
    $show_breadcrumb          = 'no';

}
if( $banner_image != ''){
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
                    <h1 class="breadcrumb-title">
                        <?php
                        if(is_archive()){
                            the_archive_title();
                        }elseif(is_single()){
                            the_title();
                        }
                        else{
                            echo wp_kses_post( $banner_title);
                        }
                        ?>
                    </h1>
                    <?php if(isset($show_breadcrumb) && $show_breadcrumb == 'yes'): ?>
                        <?php blo_get_breadcrumbs(" . "); ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>


<?php endif;
