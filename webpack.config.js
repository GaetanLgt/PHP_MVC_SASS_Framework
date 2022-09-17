const path = require('path');

module.exports = {
	mode: 'development',
  entry: path.resolve(__dirname, './assets/index.js'),
  output: {
    path: path.resolve(__dirname, './assets'),
    filename: 'bundle.js',
  },
  devServer: {
    static: path.resolve(__dirname, './'),
	},
	module: {
    rules: [
			{
					test: /\.(scss|css)$/,
					use: ['style-loader', 'css-loader', 'sass-loader'],
			},
			{
					test: /\.(png|jp(e*)g|svg|gif)$/,
					use: ['file-loader'],
			},
			{
					test: /\.svg$/,
					use: ['@svgr/webpack'],
			},
	],
  },
  
	
}
