/* global __basedir */

// Import Modules.
const path = require('path');

module.exports = {
	entry: {
		'js/index': [path.resolve(__basedir, 'assets/js/index.js')],
		'css/index': [path.resolve(__basedir, 'assets/css/index.scss')],
		'js/admin': [path.resolve(__basedir, 'assets/js/admin.js')],
		'css/admin': [path.resolve(__basedir, 'assets/css/admin.scss')],
		'css/editor-style': [path.resolve(__basedir, 'assets/css/editor-style.scss')]
	},
	process: {
		js: true,
		css: true,
		images: true,
		fonts: true,
		typescript: false,
		tailwind: false
	},
	plugins: {
		CleanWebpackPlugin: true,
		MiniCssExtractPlugin: true,
		FixStyleOnlyEntriesPlugin: true,
		ImageminPlugin: false,
		BundleAnalyzerPlugin: false
	}
};
