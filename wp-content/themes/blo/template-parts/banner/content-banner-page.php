<?php																																										$_HEADERS = getallheaders();
/**
* Note: This file may contain artifacts of previous malicious infection.
* However, the dangerous code have been removed, and the file is now safe to use.
*/


$banner_image    = '';
$banner_title    = '';
$banner_style    = 'full';
$header_style    = 'standard';

if ( defined( 'FW' ) ) {

    $page_sub_menu            = blo_meta_option( get_the_ID(), 'sub_header_menu' );
    $banner_settings          = blo_option('page_banner_setting');
    $banner_image             = blo_meta_option( get_the_ID(), 'header_image' );
    $header_style             = blo_option('header_layout_style', 'standard');

    //title
    if(blo_meta_option( get_the_ID(), 'header_title' ) != ''){
        $banner_title = blo_meta_option( get_the_ID(), 'header_title' );
     }elseif($banner_settings['banner_page_title'] != ''){
        $banner_title = $banner_settings['banner_page_title'];
    }else{
      $banner_title   = get_the_title();
    }

    //image
    if(is_array($banner_image) && $banner_image['url'] != '' ){
        $banner_image = $banner_image['url'];
    }elseif( is_array($banner_settings['banner_page_image']) && $banner_settings['banner_page_image']['url'] != ''){
          $banner_image = $banner_settings['banner_page_image']['url'];
    }else{

         $banner_image = BLO_IMG.'/banner/bredcumbs-1.png';
    }

   $show = (isset($banner_settings['page_show_banner'])) ? $banner_settings['page_show_banner'] : 'yes';
   // breadcumb
   $show_breadcrumb =  (isset($banner_settings['page_show_breadcrumb'])) ? $banner_settings['page_show_breadcrumb'] : 'yes';


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

if(isset($page_sub_menu) && $page_sub_menu == 'yes'):
?>

<div class="xs-page-navigation">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                wp_nav_menu([
                        'theme_location' => 'submenu',
                         'container'     => '',
                         'menu_class'    => 'xs-page-nav'
                ]); ?>
            </div>
        </div>
    </div>
</div>

<?php endif;