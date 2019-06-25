const BundleAnalyzerPlugin = require('webpack-bundle-analyzer').BundleAnalyzerPlugin;
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');
const ConcatPlugin = require('webpack-concat-plugin');
const CleanWebpackPlugin = require('clean-webpack-plugin');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");

const env = process.env.NODE_ENV;

const config = {
	context: __dirname,
	entry: {
		'app': './local/templates/sanatorium/assets/src/app.js',
	},
	mode: env,
	devtool: false,
	output: {
		path: __dirname+'/local/templates/sanatorium/assets/build',
		filename: '[name].js',
		publicPath: '/',
		chunkFilename: '[name].js'
	},
	optimization: {
	    minimize: env === 'production',
		minimizer: [
			new UglifyJsPlugin({
				uglifyOptions: {
					output: {
						comments: false
					}
				}
			}),
			new OptimizeCSSAssetsPlugin({})
		],
		runtimeChunk: false,
		splitChunks: {
			minChunks: 2,
			cacheGroups: {
				default: false,
				commons: {
					test: /node_modules\/(.*)\.js/,
					name: "vendor",
					chunks: "initial",
					enforce: true,
				}
			}
		}
	},
	performance: {
		hints: false
	},
	module: {
		rules: [{
			test: /\.js$/,
			exclude: /node_modules/,
			loader: 'babel-loader'
		}, {
			test: /\.sass/,
			use: [{
				loader: MiniCssExtractPlugin.loader,
				options: {
					publicPath: '../'
				}
			}, {
				loader: "css-loader",
				options: {
					minimize: env === 'production',
					url: false
				}
			},   {
				loader: "resolve-url-loader",
				options: {
					keepQuery: true
				}
			}, {
				loader: 'sass-loader',
				options: {
					sourceMap: true
				}
			}]
		}, {
			test: /\.(less|css)/,
			use: [{
					loader: MiniCssExtractPlugin.loader,
					options: {
						publicPath: '../'
					}
				}, {
					loader: "css-loader",
					options: {
						minimize: env === 'production',
						url: false
					}
				}, {
					loader: 'postcss-loader',
					options: {
						config: {
							path: 'postcss.config.js'
						}
					}
				}, {
					loader: "resolve-url-loader",
					options: {
						keepQuery: true
					}
				}, {
					loader: 'less-loader',
					options: {
						sourceMap: true
					}
				}]
		}]
	},
	plugins: [
		new MiniCssExtractPlugin({
		  	filename: '[name].css'
		}),
		new ConcatPlugin({
		    uglify: env === 'production',
		    sourceMap: false,
		    name: 'global',
		    outputPath: '',
		    fileName: '[name].js',
		    filesToConcat: [
		    	'jquery',
			],
		    attributes: {
		        async: true
		    }
		}),
		/*new CleanWebpackPlugin(['build/*.*'], {
			root: __dirname+'/local/templates/main/assets',
			verbose: true
		}),*/
		/*new BundleAnalyzerPlugin({
			analyzerPort: 1234
		})*/
	],
	resolve: {
		alias: {
			'jquery': 'jquery/dist/jquery.js'
		}
	},
	stats: {
		colors: true,
		modules: false,
		children: false,
		chunks: false,
		chunkModules: false
	}
}

module.exports = config;