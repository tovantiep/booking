const mix = require('laravel-mix');

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
mix.js('resources/js/datatables-simple-demo.js', 'public/admin/js')
    .js('resources/js/scripts.js', 'public/admin/js')
    .js('resources/js/chart-area-demo.js', 'public/admin/assets/demo')
    .js('resources/js/chart-bar-demo.js', 'public/admin/assets/demo')
    .js('resources/js/chart-pie-demo.js', 'public/admin/assets/demo')
    .js('resources/js/datatables-demo.js', 'public/admin/assets/demo')
    .sass('resources/sass/styles.scss', 'public/admin/css');
mix.copyDirectory('resources/user', 'public/user');