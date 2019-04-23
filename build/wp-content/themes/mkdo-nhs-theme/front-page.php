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

        <section class="nhsuk-hero nhsuk-hero--image nhsuk-hero--image-description" style="background-image: url('https://www.nhs.uk/static/nhsuk_shared/img/homepage/hero-2.jpg');">
            <div class="nhsuk-hero__overlay">
                <div class="nhsuk-width-container nhsuk-hero--border">
                    <div class="nhsuk-grid-row">
                        <div class="nhsuk-grid-column-two-thirds">
                            <div class="nhsuk-hero-content">
                                <h1 class="nhsuk-u-margin-bottom-3">We’re here for you</h1>
                                <p class="nhsuk-body-l nhsuk-u-margin-bottom-0">Helping you take control of your health and wellbeing.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="nhsuk-section">
            <div class="nhsuk-width-container">
                <div class="nhsuk-grid-row">
                    <div class="nhsuk-grid-column-one-half">
                        <h2 class="nhsuk-u-margin-bottom-3">Health A-Z</h2>
                        <p>Your complete guide to conditions, symptoms and treatments, including what to do and when to get help.</p>
                        <div class="nhsuk-action-link">
                          <a class="nhsuk-action-link__link" href="https://www.nhs.uk/service-search/minor-injuries-unit/locationsearch/551">
                            <svg class="nhsuk-icon nhsuk-icon__arrow-right-circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                              <path d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M12 2a10 10 0 0 0-9.95 9h11.64L9.74 7.05a1 1 0 0 1 1.41-1.41l5.66 5.65a1 1 0 0 1 0 1.42l-5.66 5.65a1 1 0 0 1-1.41 0 1 1 0 0 1 0-1.41L13.69 13H2.05A10 10 0 1 0 12 2z"></path>
                            </svg>
                            <span class="nhsuk-action-link__text">Go to the Health A-Z</span>
                          </a>
                        </div>
                    </div>
                    <div class="nhsuk-grid-column-one-half">
                        <h2 class="nhsuk-u-margin-bottom-3">Medicines A-Z</h2>
                        <p>Find out how your medicine works, how and when to take it, possible side effects and answers to your common questions.</p>
                        <div class="nhsuk-action-link">
                          <a class="nhsuk-action-link__link" href="https://www.nhs.uk/service-search/minor-injuries-unit/locationsearch/551">
                            <svg class="nhsuk-icon nhsuk-icon__arrow-right-circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                              <path d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M12 2a10 10 0 0 0-9.95 9h11.64L9.74 7.05a1 1 0 0 1 1.41-1.41l5.66 5.65a1 1 0 0 1 0 1.42l-5.66 5.65a1 1 0 0 1-1.41 0 1 1 0 0 1 0-1.41L13.69 13H2.05A10 10 0 1 0 12 2z"></path>
                            </svg>
                            <span class="nhsuk-action-link__text">Go to the Medicines A-Z</span>
                          </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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

        <section class="nhsuk-section">
            <div class="nhsuk-width-container">
                <div class="nhsuk-do-dont-list">
                  <h3 class="nhsuk-do-dont-list__label">Do</h3>
                  <ul class="nhsuk-list nhsuk-list--tick">
                    <li>
                      <svg class="nhsuk-icon nhsuk-icon__tick" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path stroke-width="4" stroke-linecap="round" d="M18.4 7.8l-8.5 8.4L5.6 12"></path>
                      </svg>
                      cover blisters that are likely to burst with a soft plaster or dressing
                    </li>
                    <li>
                      <svg class="nhsuk-icon nhsuk-icon__tick" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path stroke-width="4" stroke-linecap="round" d="M18.4 7.8l-8.5 8.4L5.6 12"></path>
                      </svg>
                      wash your hands before touching a burst blister
                    </li>
                    <li>
                      <svg class="nhsuk-icon nhsuk-icon__tick" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path stroke-width="4" stroke-linecap="round" d="M18.4 7.8l-8.5 8.4L5.6 12"></path>
                      </svg>
                      allow the fluid in a burst blister to drain before covering it with a plaster or dressing
                    </li>
                  </ul>
                </div>
                <div class="nhsuk-do-dont-list">
                  <h3 class="nhsuk-do-dont-list__label">Don't</h3>
                  <ul class="nhsuk-list nhsuk-list--cross">
                    <li>
                      <svg class="nhsuk-icon nhsuk-icon__cross" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M17 18.5c-.4 0-.8-.1-1.1-.4l-10-10c-.6-.6-.6-1.6 0-2.1.6-.6 1.5-.6 2.1 0l10 10c.6.6.6 1.5 0 2.1-.3.3-.6.4-1 .4z"></path>
                        <path d="M7 18.5c-.4 0-.8-.1-1.1-.4-.6-.6-.6-1.5 0-2.1l10-10c.6-.6 1.5-.6 2.1 0 .6.6.6 1.5 0 2.1l-10 10c-.3.3-.6.4-1 .4z"></path>
                      </svg>
                      do not burst a blister yourself
                    </li>
                    <li>
                      <svg class="nhsuk-icon nhsuk-icon__cross" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M17 18.5c-.4 0-.8-.1-1.1-.4l-10-10c-.6-.6-.6-1.6 0-2.1.6-.6 1.5-.6 2.1 0l10 10c.6.6.6 1.5 0 2.1-.3.3-.6.4-1 .4z"></path>
                        <path d="M7 18.5c-.4 0-.8-.1-1.1-.4-.6-.6-.6-1.5 0-2.1l10-10c.6-.6 1.5-.6 2.1 0 .6.6.6 1.5 0 2.1l-10 10c-.3.3-.6.4-1 .4z"></path>
                      </svg>
                      do not peel the skin off a burst blister
                    </li>
                    <li>
                      <svg class="nhsuk-icon nhsuk-icon__cross" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M17 18.5c-.4 0-.8-.1-1.1-.4l-10-10c-.6-.6-.6-1.6 0-2.1.6-.6 1.5-.6 2.1 0l10 10c.6.6.6 1.5 0 2.1-.3.3-.6.4-1 .4z"></path>
                        <path d="M7 18.5c-.4 0-.8-.1-1.1-.4-.6-.6-.6-1.5 0-2.1l10-10c.6-.6 1.5-.6 2.1 0 .6.6.6 1.5 0 2.1l-10 10c-.3.3-.6.4-1 .4z"></path>
                      </svg>
                      do not pick at the edges of the remaining skin
                    </li>
                    <li>
                      <svg class="nhsuk-icon nhsuk-icon__cross" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M17 18.5c-.4 0-.8-.1-1.1-.4l-10-10c-.6-.6-.6-1.6 0-2.1.6-.6 1.5-.6 2.1 0l10 10c.6.6.6 1.5 0 2.1-.3.3-.6.4-1 .4z"></path>
                        <path d="M7 18.5c-.4 0-.8-.1-1.1-.4-.6-.6-.6-1.5 0-2.1l10-10c.6-.6 1.5-.6 2.1 0 .6.6.6 1.5 0 2.1l-10 10c-.3.3-.6.4-1 .4z"></path>
                      </svg>
                      do not wear the shoes or use the equipment that caused your blister until it heals
                    </li>
                  </ul>
                </div>
            </div>
        </section>

    </main>
</div>
<?php do_action( 'kapow_after_main' ); ?>
<?php
get_footer();
