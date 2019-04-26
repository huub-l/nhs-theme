<?php
/**
 * The Sidebar (containing the main widget area).
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My Project
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<?php do_action( 'kapow_before_sidebars' ); ?>

<nav class="nhsuk-contents-list" role="navigation" aria-label="Pages in this guide">
	<h2 class="nhsuk-u-visually-hidden">Introduction to care and support</h2>
	<ol class="nhsuk-contents-list__list">
		<li class="nhsuk-contents-list__item" aria-current="page">
			<!-- @TODO Wire up "current" page. -->
			<span class="nhsuk-contents-list__current" class="nhsuk-contents-list__link">Help from social services and charities</span>
		</li>
		<li class="nhsuk-contents-list__item">
			<a class="nhsuk-contents-list__link" href="/conditions/social-care-and-support-guide/care-services-equipment-and-care-homes/">Care services, equipment and care homes</a>
		</li>
		<li class="nhsuk-contents-list__item">
			<a class="nhsuk-contents-list__link" href="/conditions/social-care-and-support-guide/money-work-and-benefits/">Money, work and benefits</a>
		</li>
		<li class="nhsuk-contents-list__item">
			<a class="nhsuk-contents-list__link" href="/conditions/social-care-and-support-guide/care-after-a-hospital-stay/">Care after a hospital stay</a>
		</li>
		<li class="nhsuk-contents-list__item">
			<a class="nhsuk-contents-list__link" href="/conditions/social-care-and-support-guide/support-and-benefits-for-carers/">Support and benefits for carers</a>
		</li>
		<li class="nhsuk-contents-list__item">
			<a class="nhsuk-contents-list__link" href="/conditions/social-care-and-support-guide/practical-tips-if-you-care-for-someone/">Practical tips if you care for someone</a>
		</li>
		<li class="nhsuk-contents-list__item">
			<a class="nhsuk-contents-list__link" href="/conditions/social-care-and-support-guide/caring-for-children-and-young-people/">Caring for children and young people</a>
		</li>
		<li class="nhsuk-contents-list__item">
			<a class="nhsuk-contents-list__link" href="/conditions/social-care-and-support-guide/making-decisions-for-someone-else/">Making decisions for someone else</a>
		</li>
	</ol>
</nav>

<div class="sidebar widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>

<?php do_action( 'kapow_after_sidebars' ); ?>
