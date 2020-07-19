let mix  = require('laravel-mix');
let path = require('path');

mix.setPublicPath('public_html');

mix.autoload({
   'jquery': ['$', 'window.jQuery', 'jQuery']
});

mix.webpackConfig({
    resolve: {
        alias: {
         	'__root':    		path.resolve(__dirname, 'resources/assets/js'),
         	'__node_modules': 	path.resolve(__dirname, 'node_modules')
  		}
    }
});

mix
 	.js([
        'resources/assets/js/app.js'
	], 'js/')
    .sass('resources/assets/sass/app.scss', 'css/');

if(!mix.inProduction()) mix.sourceMaps();
if(mix.inProduction())  mix.version(); 