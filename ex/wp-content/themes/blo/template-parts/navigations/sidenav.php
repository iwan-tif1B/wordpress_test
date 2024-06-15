<aside class="xs-sidenav">
    <div class="xs-close-nav">
        <span></span>
        <span></span>
    </div><!-- end xs -->
    <div class="xs-overlay" style="background-image: url(<?php echo esc_url(BLO_IMG.'/background/menubg.png');?>)"></div>
    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
        <img Width="160" height="60"  src="<?php
        echo esc_url(
            blo_src(
                'general_main_logo',
                BLO_IMG . '/logo/logo.png'
            )
        );
        ?>" alt="<?php bloginfo('name'); ?>">
    </a><!-- end navbar brand -->

    <?php

     if(is_active_sidebar('fixed_nav_widgets')){
        dynamic_sidebar('fixed_nav_widgets');
    };


     if(is_active_sidebar('fixed-nav-social-widgets')){
        dynamic_sidebar('fixed-nav-social-widgets');
    };


     ?>

<div class="clearfix"></div>

<div class="xs-copyright">
    <?php
    $copyright_text = blo_option('footer_copyright', 'Copyright &copy; 2019 Blo. All Right Reserved.');
    echo blo_kses($copyright_text);
    ?>
</div>

</aside>







