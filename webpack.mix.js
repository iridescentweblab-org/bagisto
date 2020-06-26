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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.copy('node_modules/spectrum-colorpicker2/dist/spectrum.js', 'public/vendor/webkul/admin/assets/js/spectrum_colorpicker2');
mix.copy('node_modules/spectrum-colorpicker2/dist/spectrum.css', 'public/vendor/webkul/admin/assets/css/spectrum_colorpicker2');
