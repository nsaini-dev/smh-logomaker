let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js').extract([
    'lodash','popper.js', 'jquery', 'bootstrap', 'axios'
]);

mix.copy('node_modules/spectrum-colorpicker/spectrum.css' ,'public/css');
mix.sass('resources/assets/sass/app.scss', 'public/css');
