// nhsuk-frontend

// Components
import nhsuk_feedbackBanner from '../../node_modules/nhsuk-frontend/packages/components/feedback-banner/feedback-banner';
import nhsuk_header from '../../node_modules/nhsuk-frontend/packages/components/header/header';
import nhsuk_skipLink from '../../node_modules/nhsuk-frontend/packages/components/skip-link/skip-link';
import autocomplete from '../../node_modules/nhsuk-frontend/packages/components/header/autocomplete';

// HTML5 polyfills
import '../../node_modules/nhsuk-frontend/packages/components/details/details.polyfill';

// Initialize components
document.addEventListener('DOMContentLoaded', function() {
	nhsuk_feedbackBanner(3000);
	nhsuk_header();
	nhsuk_skipLink();
	autocomplete();
});
