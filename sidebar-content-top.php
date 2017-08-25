<?php
/**
 * The template for the content top widget areas on posts and pages
 *
 * @package WordPress
 * @subpackage Furia_Gaming_Community
 * @since Furia Gaming Community 1.1
 */

if ( ! is_active_sidebar( 'sidebar-2' ) && ! is_active_sidebar( 'sidebar-3' ) ) {
	return;
}

// If we get this far, we have widgets. Let's do this.
?>
<aside id="content-top-widgets" class="content-top-widgets" role="complementary">
	<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
		<div class="widget-area">
			<?php dynamic_sidebar( 'sidebar-4' ); ?>
		</div><!-- .widget-area -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
		<div class="widget-area">
			<?php dynamic_sidebar( 'sidebar-5' ); ?>
		</div><!-- .widget-area -->
	<?php endif; ?>
</aside><!-- .content-top-widgets -->
