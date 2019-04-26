<?php
/**
* The template for displaying all pages (that is, 'page' post type posts).

* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package My Project
*/

get_header();
?>

<div id="content" class="nhsuk-width-container">
	<?php do_action( 'kapow_before_main' ); ?>
	<main id="maincontent" class="nhsuk-main-wrapper">
		<?php
		do_action( 'kapow_before_main_content' );
		while ( have_posts() ) {
			the_post();
			?>
			<div class="nhsuk-grid-row">
				<div class="nhsuk-grid-column-two-thirds">
					<div class="nhsuk-page-heading nhsuk-reading-width">
						<div class="nhsuk-page-heading nhsuk-reading-width">
							<?php the_title( '<h1>', '</h1>' ); ?>
						</div>
					</div>
				</div>
			</div>

			<div class="nhsuk-grid-row">
				<div class="nhsuk-grid-column-two-thirds">
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'nhsuk-page-content' ); ?> role="article">
						<?php
						do_action( 'kapow_before_post_content' );

						the_content();

						do_action( 'kapow_after_post_content' );
						?>
					</article>
				</div>
				<div class="nhsuk-grid-column-one-third">
					<?php get_sidebar(); ?>
				</div>
			</div>
			<?php
		}
		do_action( 'kapow_after_main_content' );
		?>
	</main>
	<?php do_action( 'kapow_after_main' ); ?>
</div>
<?php
get_footer();
