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

//CSS/SCSS/SASS Files
mix
    .styles(
        [
            'resources/assets/css/meteor.css', //static
            'resources/assets/css/colors.css', //static
            'resources/assets/plugins/pace-master/themes/blue/pace-theme-flash.css', //static
            'resources/assets/plugins/uniform/css/default.css', //static
            'vendor/components/bootstrap/css/bootstrap.css', //composer
            'vendor/fontawesome/font-awesome/css/font-awesome.css', //composer
            'resources/assets/plugins/line-icons/simple-line-icons.css', //static
            'resources/assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css', //static
            'resources/assets/plugins/wave/waves.css', //static
            'resources/assets/plugins/switchery/switchery.css', //static
        ],
        'public/css/style.css');

//JS Files
mix
    .scripts(
        [
            'resources/assets/js/app.js', //static
            'resources/assets/js/meteor.js', //static
            'vendor/components/jqueryui/jquery-ui.js', //composer
            'resources/assets/plugins/pace-master/pace.js', //static
            'resources/assets/plugins/jquery-blockui/jquery.blockui.js', //static
            'vendor/components/bootstrap/js/bootstrap.js', //composer
            'resources/assets/plugins/jquery-slimscroll/jquery.slimscroll.js', //static
            'resources/assets/plugins/switchery/switchery.js', //static
            'resources/assets/plugins/uniform/js/jquery.uniform.standalone.js', //static
            'resources/assets/plugins/offcanvasmenueffects/js/classie.js', //static
            'resources/assets/plugins/waves/waves.js', //static
            'resources/assets/plugins/offcanvasmenueffects/js/snap.svg-min.js', //static
            'resources/assets/js/pages/*.js'
        ], 'public/js/app.js'
    )