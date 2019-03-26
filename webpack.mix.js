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

mix.js('resources/js/app.js', 'public/js')
    .scripts([
        'resources/themes/jquery/jquery-3.2.1.min.js',
        'resources/themes/Cosy-2.1.0/static/js/jquery.magnific-popup.min-ver=2.1.0.js',
        'resources/themes/Cosy-2.1.0/static/js/lazysizes.min-ver=2.1.0.js',
        'resources/themes/Cosy-2.1.0/static/js/nicetheme-ver=2.1.0.js',
        'resources/themes/Cosy-2.1.0/static/js/owl.carousel.min-ver=2.1.0.js',
        'resources/themes/Cosy-2.1.0/static/js/plugins.min-ver=2.1.0.js',
        'resources/themes/Cosy-2.1.0/static/js/ResizeSensor.min-ver=2.1.0.js',
        'resources/themes/Cosy-2.1.0/static/js/theia-sticky-sidebar.min-ver=2.1.0.js',
        'resources/themes/Cosy-2.1.0/core/functions/ajax-comment/ajax-comment-ver=2.1.0.js',
        'resources/themes/Cosy-2.1.0/core/functions/emoji/emoji-ver=2.1.0.js'
    ], 'public/js/all.js')
    .styles([
        'resources/themes/Cosy-2.1.0/style-ver=2.1.0.css',
        'resources/themes/Cosy-2.1.0/static/css/magnific.min-ver=2.1.0.css',
        'resources/themes/Cosy-2.1.0/static/css/nicetheme.min-ver=2.1.0.css',
        'resources/themes/Cosy-2.1.0/static/css/owl.carousel.min-ver=2.1.0.css',
        'resources/themes/Cosy-2.1.0/static/css/reset-ver=2.1.0.css',
        'resources/themes/Cosy-2.1.0/static/font/fontawesome-pro/css/fontawesome-all.min-ver=2.1.0.css',
        'resources/themes/Cosy-2.1.0/static/font/simple-line-icons/css/simple-line-icons-ver=2.1.0.css'
    ], 'public/css/all.css')
    .sass('resources/sass/app.scss', 'public/css').version();
