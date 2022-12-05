/**
 * External Dependencies
 */
 const path = require( 'path' );
 const FixStyleOnlyEntriesPlugin = require( 'webpack-fix-style-only-entries' );
 const MiniCssExtractPlugin = require( 'mini-css-extract-plugin' );
 
 /**
  * WordPress Dependencies
  */
 const defaultConfig = require( '@wordpress/scripts/config/webpack.config.js' );
 
 module.exports = {
	 ...defaultConfig,
	 ...{
		 entry: {
			 main: path.resolve( process.cwd(), 'src/scss', 'main.scss' ),
			 app: path.resolve( process.cwd(), 'src/js', 'app.js' ),
		 },
	 },
	 plugins: [ new FixStyleOnlyEntriesPlugin(), new MiniCssExtractPlugin() ],
 };
 