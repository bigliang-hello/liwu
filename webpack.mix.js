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


//前端
mix.js('resources/js/app.js', 'public/js')
    .scripts([
        'resources/themes/Cosy-2.1.0/static/js/jquery-ver=1.12.4.js',
        'resources/themes/Cosy-2.1.0/static/js/jquery-migrate.min-ver=1.4.1.js',
        'resources/themes/Cosy-2.1.0/static/js/jquery.magnific-popup.min-ver=2.1.0.js',
        'resources/themes/Cosy-2.1.0/static/js/lazysizes.min-ver=2.1.0.js',
        'resources/themes/Cosy-2.1.0/static/js/nicetheme-ver=2.1.0.js',
        'resources/themes/Cosy-2.1.0/static/js/owl.carousel.min-ver=2.1.0.js',
        'resources/themes/Cosy-2.1.0/static/js/plugins.min-ver=2.1.0.js',
        'resources/themes/Cosy-2.1.0/static/js/ResizeSensor.min-ver=2.1.0.js',
        'resources/themes/Cosy-2.1.0/static/js/theia-sticky-sidebar.min-ver=2.1.0.js',
        'resources/themes/Cosy-2.1.0/core/functions/ajax-comment/ajax-comment-ver=2.1.0.js',
    ], 'public/js/all.js')
    .less('resources/less/app.less', 'public/css');

//登录页面
mix.scripts([
    'resources/themes/jquery/jquery-3.2.1.min.js',
    'resources/themes/login/js/bootstrap.min.js',
    'resources/themes/login/js/jquery.backstretch.min.js'
], 'public/js/login.js')
    .styles([
        'resources/themes/login/css/bootstrap.min.css',
        'resources/themes/login/css/form-elements.css',
        'resources/themes/login/css/style.css'
    ], 'public/css/login.css');

