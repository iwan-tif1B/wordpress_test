<?php 
   $banner_image    =  '';
   $banner_title    = '';
   $header_style    = 'standard';
   
if ( defined( 'FW' ) ) { 
   $banner_settings         = blo_option('service_banner_settings'); 
   $header_style            = blo_option('header_layout_style', 'standard');
 
   //image
   $banner_image = ( is_array($banner_settings['image']) && $banner_settings['image']['url'] != '') ? 
                        $banner_settings['image']['url'] : BLO_IMG.'/banner/service_details_banner.jpg';

   //title 
   $banner_title = (isset($banner_settings['single_title']) && $banner_settings['single_title'] != '') ? 
                        $banner_settings['single_title'] : get_the_title();
   //show
   $show = (isset($banner_settings['show'])) ? $banner_settings['show'] : 'yes'; 
    
   //breadcumb 
   $show_breadcrumb =  (isset($banner_settings['show_breadcrumb'])) ? $banner_settings['show_breadcrumb'] : 'yes';

 }else{
     //default
   $banner_image             = '';
   $banner_title             =  get_the_title();
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

     <section class="banner-area <?php echo esc_attr($banner_image == ''?'banner-solid':'banner-bg'); ?>" <?php echo wp_kses_post( $banner_image ); ?>>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center">
                        <h2 class="banner-title <?php echo esc_attr($banner_heading_class); ?>">
                           <?php 
                              if(is_archive()){
                                    the_archive_title();
                              }else{
                                 echo esc_html($banner_title);
                              }
                           ?> 
                        </h2>
                         <?php if(isset($show_breadcrumb) && $show_breadcrumb == 'yes'): ?>
                            <?php blo_get_breadcrumbs(" / "); ?>
                         <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>  
  
<?php endif; ?>     