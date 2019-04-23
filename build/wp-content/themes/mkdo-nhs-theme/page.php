<?php
/**
* The template for displaying all pages (that is, 'page' post type posts).

* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package My Project
*/

get_header();
?>

<nav class="nhsuk-breadcrumb" aria-label="Breadcrumb">
  <div class="nhsuk-width-container">
    <ol class="nhsuk-breadcrumb__list">
      <li class="nhsuk-breadcrumb__item"><a class="nhsuk-breadcrumb__link" href="/level-one">Level one</a></li>
      <li class="nhsuk-breadcrumb__item"><a class="nhsuk-breadcrumb__link" href="/level-one/level-two">Level two</a></li>
      <li class="nhsuk-breadcrumb__item"><a class="nhsuk-breadcrumb__link" href="/level-one/level-two/level-three">Level three</a></li>
    </ol>
    <p class="nhsuk-breadcrumb__back"><a class="nhsuk-breadcrumb__backlink" href="/level-one/level-two/level-three">Back to Level three</a></p>
  </div>
</nav>

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
