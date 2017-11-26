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

//JS Files
mix
    .js('resources/assets/plugins/jquery/jquery-3.1.0.min.js', 'public/js/jquery.js')
    .js('resources/assets/js/meteor.js', 'public/js')
    .scripts('resources/assets/js/pages/*.js', 'public/js/resources.js')
    .scripts( // For bottom loading
        [
            'resources/assets/plugins/jquery-ui/jquery-ui.js',
            'resources/assets/plugins/pace-master/pace.js',
            'resources/assets/plugins/jquery-blockui/jquery.blockui.js',
            'resources/assets/plugins/bootstrap/js/bootstrap.js',
            'resources/assets/plugins/jquery-slimscroll/jquery.slimscroll.js',
            'resources/assets/plugins/switchery/switchery.js',
            'resources/assets/plugins/uniform/js/jquery.uniform.standalone.js',
            'resources/assets/plugins/offcanvasmenueffects/js/classie.js',
            'resources/assets/plugins/waves/waves.js'
        ], 'public/js/extra-body.js'
    )
    .scripts( // For top loading
        [
            'resources/assets/plugins/offcanvasmenueffects/js/snap.svg-min.js'
        ], 'public/js/extra-head.js'
    );


//CSS/SCSS/SASS Files
mix
    .styles('resources/assets/css/meteor.css', 'public/css/meteor.css')
    .styles(
        [
            'resources/assets/plugins/pace-master/themes/blue/pace-theme-flash.css',
            'resources/assets/plugins/uniform/css/default.css',
            'resources/assets/plugins/bootstrap/css/boostrap.css',
            'resources/assets/plugins/fontawesome/css/font-awesome.css',
            'resources/assets/plugins/line-icons/simple-line-icons.css',
            'resources/assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css',
            'resources/assets/plugins/wave/waves.css',
            'resources/assets/plugins/switchery/switchery.css',
        ],
        'public/css/extra.css');