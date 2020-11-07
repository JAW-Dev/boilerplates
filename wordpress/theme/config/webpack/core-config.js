/* global __basedir */

// Import Modules.
const path = require('path');
require('dotenv').config({
	path: path.resolve(__dirname, './../../../../.env')
});

const devMode = process.env.NODE_ENV !== 'production';
const destinationPath = `${__basedir}/src`;
const siteName = process.env.SITE_NAME;
const userName = process.env.USER_ACCOUNT;

module.exports = {
	mode: devMode ? 'development' : 'production',
	target: 'web',
	context: path.resolve(__basedir, 'assets'),
	output: {
		path: path.resolve(__dirname, destinationPath),
		publicPath: './../',
		filename: '[name].js',
		sourceMapFilename: '[file].map'
	},
	destinationPath,
	watch: !!devMode,
	watchOptions: {
		poll: true,
		ignored: /node_modules/
	},
	externals: {
		jquery: 'jQuery',
	},
	resolve: {
		extensions: ['.ts', '.tsx', '.js']
	},
	images: {
		outputPath: './',
		publicPath: 'src'
	},
	fonts: {
		outputPath: './',
		publicPath: './'
	},
	sourcemaps: {
		js: true,
		css: true
	},
	minimize: {
		js: !devMode,
		css: !devMode
	},
	BrowserSyncPlugin: {
		proxy: `https://${siteName}.test`,
		host: `${siteName}.test`,
		open: 'external',
		port: 8000,
		https: {
			key: `/Users/${userName}/.config/valet/Certificates/${siteName}.test.key`,
			cert: `/Users/${userName}/.config/valet/Certificates/${siteName}.test.crt`
		},
		files: ['**/*.php'],
		injectCss: true
	},
	MiniCssExtractPlugin: {
		filename: '[name].css'
	},
	ImageminPlugin: {
		bail: false,
		cache: true,
		name: '[path][name].[ext]',
		imageminOptions: {
			plugins: [
				['mozjpeg', { progressive: true, quality: 75 }],
				['optipng', { optimizationLevel: 3 }],
				['gifsicle', { interlaced: false }],
				[
					'svgo',
					{
						plugins: [
							{ cleanupAttrs: true },
							{ cleanupEnableBackground: true },
							{ cleanupIDs: true },
							{ cleanupNumericValues: { floatPrecision: 3 } },
							{ collapseGroups: true },
							{ convertColors: true },
							{ convertPathData: true },
							{ convertShapeToPath: true },
							{ convertStyleToAttrs: true },
							{ convertTransform: true },
							{ inlineStyles: true },
							{ mergePaths: true },
							{ minifyStyles: false },
							{ moveElemsAttrsToGroup: true },
							{ moveGroupAttrsToElems: true },
							{ removeComments: true },
							{ removeAttrs: true },
							{ removeDesc: true },
							{ removeDoctype: true },
							{ removeEditorsNSData: true },
							{ removeElementsByAttr: true },
							{ removeEmptyAttrs: true },
							{ removeEmptyContainers: true },
							{ removeEmptyText: true },
							{ removeHiddenElems: true },
							{ removeMetadata: true },
							{ removeNonInheritableGroupAttrs: true },
							{ removeTitle: true },
							{ removeUnknownsAndDefaults: true },
							{ removeUnusedNS: true },
							{ removeUselessDefs: true },
							{ removeUselessStrokeAndFill: true },
							{ removeXMLProcInst: true },
							{ transformsWithOnePath: true },
							{ addAttributesToSVGElement: false },
							{ addClassesToSVGElement: false },
							{ cleanupListOfValues: false },
							{ removeDimensions: true },
							{ removeStyleElement: false },
							{ removeViewBox: false },
							{ removeXMLNS: false },
							{ sortAttrs: false }
						]
					}
				]
			]
		}
	},
	FileManagerPluginDev: {
		silent: true,
		onEnd: {
			mkdir: [`${destinationPath}/styles`, `${destinationPath}/scripts`],
			move: [
				{ source: `${destinationPath}/style.css`, destination: `${__basedir}/style.css` },
				{ source: `${destinationPath}/style.css.map`, destination: `${__basedir}/style.css.map` },
				{ source: `${destinationPath}/editor-style.css`, destination: `${destinationPath}/styles/editor-style.css` },
				{ source: `${destinationPath}/editor-style.css.map`, destination: `${destinationPath}/styles/editor-style.css.map` },
				{ source: `${destinationPath}/admin-style.css`, destination: `${destinationPath}/styles/admin-style.css` },
				{ source: `${destinationPath}/admin-style.css.map`, destination: `${destinationPath}/styles/admin-style.css.map` },
				{ source: `${destinationPath}/index.js`, destination: `${destinationPath}/scripts/index.js` },
				{ source: `${destinationPath}/index.js.map`, destination: `${destinationPath}/scripts/index.js.map` },
				{ source: `${destinationPath}/admin.js`, destination: `${destinationPath}/scripts/admin.js` },
				{ source: `${destinationPath}/admin.js.map`, destination: `${destinationPath}/scripts/admin.js.map` }
			],
			delete: [
				`${destinationPath}/style.js`,
				`${destinationPath}/style.js.map`,
				`${destinationPath}/admin-style.js`,
				`${destinationPath}/admin-style.js.map`,
				`${destinationPath}/editor-style.js`,
				`${destinationPath}/editor-style.js.map`,
			]
		}
	},
	FileManagerPluginProduction: {
		onEnd: {
			mkdir: [`${destinationPath}/styles`, `${destinationPath}/scripts`],
			move: [
				{ source: `${destinationPath}/style.css`, destination: `${__basedir}/style.css` },
				{ source: `${destinationPath}/editor-style.css`, destination: `${destinationPath}/styles/editor-style.css` },
				{ source: `${destinationPath}/admin-style.css`, destination: `${destinationPath}/styles/admin-style.css` },
				{ source: `${destinationPath}/index.js`, destination: `${destinationPath}/scripts/index.js` },
				{ source: `${destinationPath}/index.js.map`, destination: `${destinationPath}/scripts/index.js.map` },
				{ source: `${destinationPath}/admin.js`, destination: `${destinationPath}/scripts/admin.js` },
				{ source: `${destinationPath}/admin.js.map`, destination: `${destinationPath}/scripts/admin.js.map` }
			],
			delete: [
				`${destinationPath}/style.js`,
				`${destinationPath}/style.js.map`,
				`${destinationPath}/style.css.map`,
				`${destinationPath}/admin-style.js`,
				`${destinationPath}/admin-style.js.map`,
				`${destinationPath}/admin-style.css.map`,
				`${destinationPath}/editor-style.js`,
				`${destinationPath}/editor-style.css.map`,
				`${destinationPath}/editor-style.js.map`,
			]
		}
	},
	CleanWebpackPlugin: {
		cleanStaleWebpackAssets: false
	},
	FixStyleOnlyEntriesPlugin: {
		silent: true
	},
	BundleAnalyzerPlugin: {
		analyzerMode: 'static'
	}
};
