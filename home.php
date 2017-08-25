<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Furia_Gaming_Community
 * @since Furia Gaming Community 1.0
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();
			?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php furiagamingcommunity_post_thumbnail(); ?>

					<header class="entry-header">
						<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
							<span class="sticky-post"><?php _e( 'Featured', 'furiagamingcommunity' ); ?></span>
						<?php endif; ?>

						<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

						<div class="entry-meta">
							<?php furiagamingcommunity_entry_taxonomies_categories(); ?>

							<?php furiagamingcommunity_entry_author(); ?>

							<?php furiagamingcommunity_entry_date(); ?>
						</div><!-- .entry-meta -->
					</header><!-- .entry-header -->

					<div class="entry-summary">
						<?php the_excerpt(); ?>
					</div><!-- .entry-summary -->

					<footer class="entry-footer">
						<?php furiagamingcommunity_entry_taxonomies_tags(); ?>

						<?php
							edit_post_link(
								sprintf(
									/* translators: %s: Name of current post */
									__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'furiagamingcommunity' ),
									get_the_title()
								),
								'<span class="edit-link">',
								'</span>'
							);
						?>
					</footer><!-- .entry-footer -->
				</article><!-- #post-## -->

			<?php
			// End the loop.
			endwhile;

			// Page navigation.
			furiagamingcommunity_paging_nav();


		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
