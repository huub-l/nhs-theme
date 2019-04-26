<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">

				<div class="nhsuk-grid-row">
					<div class="nhsuk-grid-column-two-thirds">
						<div class="nhsuk-page-heading nhsuk-reading-width">
							<header class="nhsuk-page-heading nhsuk-reading-width">
								<?php the_title( '<h1>', '</h1>' ); ?>
								<p class="nhsuk-page-heading-subtitle"><?php kapow_entry_info(); ?></p>
							</header>
						</div>
					</div>
				</div>

				<div class="nhsuk-grid-row">
					<div class="nhsuk-grid-column-two-thirds">

						<div class="nhsuk-page-content">
							<?php
							do_action( 'kapow_before_post_content' );

							the_content();

							do_action( 'kapow_after_post_content' );

							the_post_navigation();

							// If comments are open or we have at least one comment,
							// load up the comment template.
							if ( comments_open() || get_comments_number() ) {
								comments_template();
							}

							kapow_entry_meta();
							?>
						</div>

					</div>
					<aside class="nhsuk-grid-column-one-third">
						<?php get_sidebar(); ?>
					</aside>
				</div>
			</article>
			<?php
		}
		do_action( 'kapow_after_main_content' );
		?>
	</main>
	<?php do_action( 'kapow_after_main' ); ?>
</div>
<?php
get_footer();
