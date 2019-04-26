<?php
/**
* The template for displaying 404 pages (not found).
*
* @link https://developer.wordpress.org/themes/functionality/404-pages/
*
* @package My Project
*/

get_header(); ?>

<div id="content" class="nhsuk-width-container">
	<?php do_action( 'kapow_before_main' ); ?>
	<main id="maincontent" class="nhsuk-main-wrapper">
		<?php do_action( 'kapow_before_main_content' ); ?>
		<div class="nhsuk-grid-row">
			<div class="nhsuk-grid-column-two-thirds">
				<div class="nhsuk-page-heading nhsuk-reading-width">
					<div class="nhsuk-page-heading nhsuk-reading-width">
						<h1 id="not-found-heading">
							<?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'mkdo-nhs-theme' ); ?>
						</h1>
					</div>
				</div>
			</div>
		</div>

		<div class="nhsuk-grid-row">
			<div class="nhsuk-grid-column-two-thirds">
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'nhsuk-page-content' ); ?> role="article">
					<?php
					do_action( 'kapow_before_post_content' ); ?>

					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'mkdo-nhs-theme' ); ?></p>

				</article>
			</div>
			<div class="nhsuk-grid-column-one-third">
				<?php get_sidebar(); ?>
			</div>
		</div>
		<?php do_action( 'kapow_after_main_content' ); ?>
	</main>
	<?php do_action( 'kapow_after_main' ); ?>
</div>

<?php
get_footer();
