<?php
/**
* The template for displaying the front page.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package My Project
*/

get_header();

do_action( 'kapow_front_page_intro' );
?>
<?php do_action( 'kapow_before_main' ); ?>
<div class="nhsuk-homepage">
	<main id="maincontent">

		<?php get_template_part( 'template-parts/nhsuk-hero' ); ?>

		<section class="nhsuk-section">
			<div class="nhsuk-width-container">
				<?php
				do_action( 'kapow_before_main_content' );
				while ( have_posts() ) {

					the_post();

					do_action( 'kapow_before_post_content' );

					the_content();

					do_action( 'kapow_after_post_content' );

				}
				do_action( 'kapow_after_main_content' );
				?>
			</div>
		</section>

	</main>
</div>
<?php do_action( 'kapow_after_main' ); ?>
<?php
get_footer();
