<?php
/**
 * The main template file.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package My Project
 */

get_header();
?>

<div id="content" class="nhsuk-width-container">
	<?php do_action( 'kapow_before_main' ); ?>
	<main id="maincontent" class="nhsuk-main-wrapper">
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
			<div class="nhsuk-grid-column-one-third">
				<?php get_sidebar(); ?>
			</div>
			<div class="nhsuk-grid-column-two-thirds">
				<div class="nhsuk-page-content">
					<ul class="nhsuk-list nhsuk-list--bullet">
						<?php
						do_action( 'kapow_before_main_content' );

						if ( have_posts() ) {

							while ( have_posts() ) {
								the_post();

								get_template_part( 'template-parts/content', get_post_format() );
							}

							the_posts_navigation();
						} else {

							get_template_part( 'template-parts/content', 'none' );
						}

						do_action( 'kapow_before_main_content' );
						?>
					</ul>
				</div>
			</div>
		</div>
	</main>
</div>

<?php
get_footer();
