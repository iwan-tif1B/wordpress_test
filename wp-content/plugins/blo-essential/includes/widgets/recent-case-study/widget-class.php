<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * recent post widget
 */
class BLO_Recent_Case_study extends WP_Widget {

    function __construct() {

        $widget_opt = array(
            'classname'		 => 'BLO-widget',
            'description'	 => esc_html__('Recent case study','BLO-essential')
        );

        parent::__construct( 'xs-recent-case-study', esc_html__( 'Recent case study', 'BLO-essential' ), $widget_opt );
    }

    function widget( $args, $instance ) {

        global $wp_query;

        echo wp_kses_post($args[ 'before_widget' ]);

        if ( !empty( $instance[ 'title' ] ) ) {

            echo wp_kses_post($args[ 'before_title' ]) . apply_filters( 'widget_title', $instance[ 'title' ] ) . wp_kses_post($args[ 'after_title' ]);
        }

        if ( !empty( $instance[ 'number_of_posts' ] ) ) {
            $no_of_post = $instance[ 'number_of_posts' ];
        } else {
            $no_of_post = 3;
        }


        $query = array(
            'post_type'		 => array( 'post' ),
            'post_status'	 => array( 'publish' ),
            'orderby'		 => 'date',
            'order'			 => 'DESC',
            'posts_per_page' => $no_of_post
        );

        $loop = new WP_Query( $query );
        ?>
        <div class="widget-posts">
            <?php
            if ( $loop->have_posts() ):
                while ( $loop->have_posts() ):
                    $loop->the_post();
                    ?>
                    <div class="widget-post media">
                        <div class="media-body">

                            <h4 class="entry-title">
                                <a href="<?php echo get_the_permalink(); ?>" ><?php echo get_the_title();?></a>
                            </h4>
                            <span class="post-date">
							<a href="<?php echo get_the_permalink(); ?>" > <i class="fa fa-clock"></i>	<?php echo get_the_time( 'd M, Y' ); ?> </a>
							</span>

                        </div>
                    </div>

                <?php endwhile; ?>
            <?php else: ?>
                <div class="nopost_message">
                    <p><?php echo esc_html__( 'No post avainable', 'BLO-essential' ) ?></p>';
                </div>
            <?php endif; ?>
        </div>
        <?php
        wp_reset_postdata();
        echo wp_kses_post($args[ 'after_widget' ]);
    }

    function update( $new_instance, $old_instance ) {

        $old_instance[ 'title' ]			 = strip_tags( $new_instance[ 'title' ] );
        $old_instance[ 'number_of_posts' ] = $new_instance[ 'number_of_posts' ];

        return $old_instance;
    }

    function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        } else {
            $title = esc_html__( 'Latest Updates', 'BLO-essential' );
        }
        if ( isset( $instance[ 'number_of_posts' ] ) ) {
            $no_of_post = $instance[ 'number_of_posts' ];
        } else {
            $no_of_post = 4;
        }
        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'BLO-essential' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'number_of_posts' ) ); ?>"><?php esc_html_e( 'Number of posts:', 'BLO-essential' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'number_of_posts' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'number_of_posts' ) ); ?>" type="text" value="<?php echo esc_attr( $no_of_post ); ?>" />
        </p>
        <?php
    }

}
