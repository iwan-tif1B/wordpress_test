<?php
/**
 * Title: Header
 * Slug: taza/header
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"position":{"type":""},"border":{"radius":"20px","width":"1px"}},"borderColor":"secondary","backgroundColor":"foreground","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group has-border-color has-secondary-border-color has-foreground-background-color has-background" style="border-width:1px;border-radius:20px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:navigation {"overlayMenu":"always","layout":{"type":"flex","justifyContent":"right"}} -->
<!-- wp:navigation-link {"label":"Home","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Portfolio","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Contact","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:site-logo /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:site-title /-->

<!-- wp:site-tagline /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:separator {"align":"full","backgroundColor":"secondary","className":"is-style-wide"} -->
<hr class="wp-block-separator alignfull has-text-color has-secondary-color has-alpha-channel-opacity has-secondary-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'About', 'taza' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'An experienced team working together, crafting exceptional experiences, and growing stronger.', 'taza' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:separator {"align":"full","backgroundColor":"secondary","className":"is-style-wide"} -->
<hr class="wp-block-separator alignfull has-text-color has-secondary-color has-alpha-channel-opacity has-secondary-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:social-links {"iconColor":"base","iconColorValue":"#424345","openInNewTab":true,"size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|xx-small"}}},"className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"github"} /-->

<!-- wp:social-link {"url":"#","service":"wordpress"} /-->

<!-- wp:social-link {"url":"#","service":"behance"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
