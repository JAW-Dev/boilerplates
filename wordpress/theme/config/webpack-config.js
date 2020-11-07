/* global __basedir */

// Import Modules.
const path = require('path');

module.exports = {
	entry: {
		index: [path.resolve(__basedir, 'assets/js/index.js')],
		style: [path.resolve(__basedir, 'assets/css/style.scss')],
		admin: [path.resolve(__basedir, 'assets/js/admin.js')],
		'admin-style': [path.resolve(__basedir, 'assets/css/admin.scss')],
		'editor-style': [path.resolve(__basedir, 'assets/css/editor-style.scss')]
	},
	process: {
		js: true,
		css: true,
		images: true,
		fonts: true,
		typescript: false
	},
	plugins: {
		BrowserSyncPlugin: false,
		MiniCssExtractPlugin: true,
		FileManagerPlugin: true,
		ImageminPlugin: true,
		CleanWebpackPlugin: true,
		BundleAnalyzerPlugin: false
	}
};
