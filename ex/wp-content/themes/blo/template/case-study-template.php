<?php
/**
 * case-study-template.php
 *
 * Template Name: Case Study
 * Template Post Type: blo-case-study
 */



get_header();
get_template_part( 'template-parts/banner/content', 'banner-blog' );

$blog_sidebar = blo_option('blog_sidebar',3);

$column = ($blog_sidebar == 1 || !is_active_sidebar('sidebar-1')) ? 'col-lg-12' : 'col-lg-8 col-md-12';
$terms = get_the_terms(get_the_ID(), 'blo-case-study');

$show_sub_menu = '';

if(defined('FW')){
    $show_sub_menu =   fw_get_db_post_option(get_the_ID(), 'case_study_sub_header_menu', '');
}

if($show_sub_menu == 'yes' && '' != $show_sub_menu) :
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
<?php endif; ?>
<section id="main-content" class="blog main-container xs-case-study-main" role="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto">                
                <div class="xs-page-headding text-center xs-case-study-headding">
                    <p><?php 
                       if(is_array($terms) && '' !=$terms) :
                        foreach ($terms as $key=>$term) {
                        ?>
                            <span><?php echo esc_html(strtoupper($term->name));?> </span>
                    <?php
                        }
                     endif;
                    ?>
                </p>
                    <h2><?php the_title(); ?></h2>       
                </div>
            </div>
        </div>
        <div class="row">
            <?php if($blog_sidebar == 2){
                get_sidebar();
            }  ?>
            <div class="<?php echo esc_attr($column);?>">

                <?php while ( have_posts() ) : the_post();

                get_template_part('template-parts/case-study/content', 'single');

                endwhile; ?>

            </div><!-- .col-md-8 -->

            <?php if($blog_sidebar == 3){
                get_sidebar();
            }  ?>
        </div><!-- .row -->


            <?php get_template_part('template-parts/case-study/content', 'related'); ?>

    </div><!-- .container -->
</section><!-- #main-content -->
<?php get_footer(); ?>
