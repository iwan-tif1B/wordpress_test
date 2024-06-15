

	<?php
         wp_nav_menu([
            'menu'            => 'primary',
            'theme_location'  => 'primary',
            'container'       => 'div',
            'container_id'    => 'primary-nav',
            'container_class' => 'collapse navbar-collapse',
            'menu_id'         => 'main-menu',
            'menu_class'      => 'navbar-nav ml-auto',
            'depth'           => 3,
            'walker'          => new blo_navwalker(),
            'fallback_cb'     => 'blo_navwalker::fallback',
         ]);
	?>

