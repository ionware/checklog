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

mix.sass('resources/assets/sass/app.scss', 'public/css/app.css')
    .sass('resources/assets/sass/pages/login.scss', 'public/css/login.css')
    .sass('resources/assets/sass/pages/dashboard.scss', 'public/css/dashboard.css')
    //.react('resources/assets/react/pages/login/index.js', 'public/js/login.js')
    .react('resources/assets/react/index.js', 'public/js/app.js');
