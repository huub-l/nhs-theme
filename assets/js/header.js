nunjucks.configure({ autoescape: true });
nunjucks.renderString('Hello {{ username }}', { username: 'James' });

nunjucks.configure('views', { autoescape: true });
nunjucks.render('index.html', { foo: 'bar' });

// NHSUK Front end
import '../../node_modules/nhsuk-frontend/packages/nhsuk.scss';

// requireAll(
// 	require.context(
// 		'../../node_modules/nhsuk-frontend/packages/assets/icons/',
// 		true,
// 		/\.(svg)$/,
// 	),
// );
// requireAll(
// 	require.context(
// 		'../../node_modules/nhsuk-frontend/packages/assets/logos/',
// 		true,
// 		/\.(svg)$/,
// 	),
// );

// Styles
import '../scss/style.scss';

// Images, svgs and fonts.
function requireAll(r) {
	r.keys().forEach(r);
}
requireAll(require.context('../images/', true, /\.(png|jpg|gif)$/));
requireAll(require.context('../svgs/', true, /\.(svg)$/));
requireAll(require.context('../fonts/', true, /\.(woff(2)?|ttf|eot)$/));

// Adds User Agent and Operating System
// details to the <html> tag.
// -------------------------------------
var b = document.documentElement;

b.setAttribute('data-useragent', navigator.userAgent);
b.setAttribute('data-platform', navigator.platform);
b.className +=
	!!('ontouchstart' in window) || !!('onmsgesturechange' in window)
		? ' touch'
		: '';

console.log(`Header js is running.`);
