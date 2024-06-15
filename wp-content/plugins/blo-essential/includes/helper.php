<?php
//  Social Share
function blo_social_share(){
    ?>
    <strong> <?php esc_html__('Share:', 'blo') ?></strong>
    <span>

            <a class="facebook" href="http://www.facebook.com/share.php?u=<?php esc_url(the_permalink());?>title=<?php esc_url(the_title());?>"><i class="fa fa-facebook"></i></a>
            <a class="twitter" href="http://twitter.com/intent/tweet?status=<?php esc_url(the_title());?>+<?php esc_url(the_permalink());?>"><i class="fa fa-twitter"></i></a>
            <a class="linkedin" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php esc_url(the_permalink());?>&amp;title=<?php esc_url(the_title());?>&amp;source=<?php echo esc_url(home_url('/'));?>"><i class="fa fa-linkedin"></i></a>
            <a class="vimeo" href="http://pinterest.com/pin/create/bookmarklet/?url=<?php esc_url(the_permalink());?>&amp;is_video=false&amp;description=<?php esc_url(the_title());?>"><i class="fa fa-pinterest-p"></i></a>

        </span>
    <?php
}