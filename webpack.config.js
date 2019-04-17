const path                 = require('path');
const webpack              = require('webpack');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const LiveReloadPlugin     = require('webpack-livereload-plugin');
const FriendlyErrorsPlugin = require('friendly-errors-webpack-plugin');
const CleanWebpackPlugin   = require('clean-webpack-plugin');
const CopyWebpackPlugin    = require('copy-webpack-plugin');
const ImageminPlugin       = require('imagemin-webpack-plugin').default;
const TerserPlugin         = require('terser-webpack-plugin');
const globImporter         = require('node-sass-glob-importer');
const devMode              = process.env.NODE_ENV === 'development';

module.exports = {
	mode: process.env.NODE_ENV,
	entry: {
		'themes/mkdo-nhs-theme/assets/js/header' : './assets/js/header.js',
		'themes/mkdo-nhs-theme/assets/js/footer' : './assets/js/footer.js'
	},
	output: {
		path: path.resolve(__dirname, `build/wp-content/`),
		filename: '[name].js'
	},
	devtool: devMode ? 'cheap-eval-source-map' : 'source-map',
	performance: {
		maxAssetSize : 1000000
	},
	optimization: {
		minimizer: [new TerserPlugin()],
	},
	stats: {
		assets       : !devMode,
		builtAt      : !devMode,
		children     : false,
		chunks       : false,
		colors       : true,
		entrypoints  : !devMode,
		env          : false,
		errors       : !devMode,
		errorDetails : false,
		hash         : false,
		maxModules   : 20,
		modules      : false,
		performance  : !devMode,
		publicPath   : false,
		reasons      : false,
		source       : false,
		timings      : !devMode,
		version      : false,
		warnings     : !devMode
	},
	module: {
		rules: [
			{
				test: /\.js$/,
				exclude: /(node_modules|bower_components)/,
				use: [
					{
						loader: 'babel-loader'
					},
				],
			},
			{
				test: /\.s?css$/,
				use: [
					MiniCssExtractPlugin.loader,
					{
						loader: 'css-loader',
						options: {
							sourceMap: true
						}
					},
					{
						loader: 'postcss-loader',
						options: {
							sourceMap: true
						}
					},
					{
						loader: 'sass-loader',
						options: {
							sourceMap: true,
							importer: globImporter()
						}
					}
				],
			},
			{
				test: /\.(png|jpg|gif)$/,
				use: [
				{
					loader: 'file-loader',
					options: {
						outputPath: 'themes/mkdo-nhs-theme/assets/images',
						name: '[name].[ext]',
					}
				},
				],
			},
			{
				test: /\.(woff(2)?|ttf|eot)$/,
				use: [{
				loader: 'file-loader',
					options: {
						outputPath: 'themes/mkdo-nhs-theme/assets/fonts',
						name: '[name].[ext]',
					}
				}]
			},
			{
				test: /\.(svg)$/,
				use: [{
					loader: 'file-loader',
					options: {
						outputPath: 'themes/mkdo-nhs-theme/assets/svgs',
						name: '[name].[ext]'
					}
				},
				{
					loader: 'svgo-loader',
					options: {
						plugins: [
							{removeTitle: true},
							{convertColors: {shorthex: false}},
							{convertPathData: false}
						]
					}
				}]
			}
		]
	},
	plugins: [
		devMode && new FriendlyErrorsPlugin({
			clearConsole: false,
		}),
		!devMode && new CleanWebpackPlugin([
			'assets',
			'style.css',
			'style.css.map'
		],{
			root: path.resolve(__dirname, `build/wp-content/themes/mkdo-nhs-theme`),
			verbose: !devMode,
		}),
		new MiniCssExtractPlugin({
			filename: 'themes/mkdo-nhs-theme/style.css'
		}),
		new webpack.ProvidePlugin({
			$: 'jquery',
			jQuery: 'jquery'
		}),
		// new CopyWebpackPlugin([
		// 	{ from: 'assets/fonts/**/*' },
		// 	{ from: 'assets/images/**/*' }
		// ]),
		!devMode && new ImageminPlugin({
			test: /\.(jpe?g|png|gif)$/i,
			cacheFolder: './imgcache',
		}),
		devMode && new LiveReloadPlugin(),
	].filter(Boolean),
};
