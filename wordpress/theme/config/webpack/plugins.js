// Import Packages.
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const FileManagerPlugin = require('filemanager-plus-webpack-plugin');
const ImageminPlugin = require('imagemin-webpack');
const { BundleAnalyzerPlugin } = require('webpack-bundle-analyzer');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

module.exports = (options, coreConfig, settings) => {
	// https://github.com/Va1/browser-sync-webpack-plugin
	if (options.plugins.BrowserSyncPlugin) {
		settings.plugins.push(new BrowserSyncPlugin(coreConfig.BrowserSyncPlugin));
	}

	// https://github.com/johnagan/clean-webpack-plugin
	if (options.plugins.CleanWebpackPlugin) {
		settings.plugins.push(new CleanWebpackPlugin(coreConfig.CleanWebpackPlugin));
	}

	// https://github.com/webpack-contrib/mini-css-extract-plugin
	if (options.plugins.MiniCssExtractPlugin) {
		settings.plugins.push(new MiniCssExtractPlugin(coreConfig.MiniCssExtractPlugin));
	}

	// https://github.com/gregnb/filemanager-webpack-plugin
	if (options.plugins.FileManagerPlugin) {
		if (coreConfig.mode === 'development') {
			settings.plugins.push(new FileManagerPlugin(coreConfig.FileManagerPluginDev));
		} else {
			settings.plugins.push(new FileManagerPlugin(coreConfig.FileManagerPluginProduction));
		}
	}

	// https://github.com/itgalaxy/imagemin-webpack
	if (options.plugins.ImageminPlugin) {
		settings.plugins.push(new ImageminPlugin(coreConfig.ImageminPlugin));
	}

	// https://github.com/webpack-contrib/webpack-bundle-analyzer
	if (options.plugins.BundleAnalyzerPlugin) {
		settings.plugins.push(new BundleAnalyzerPlugin(coreConfig.BundleAnalyzerPlugin));
	}
};
