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
/* This is the version that puts everything in one file but its not very good for debugging. If you are debugging or changing styles use the one below. 
mix
    .styles(
        [   
            'resources/assets/plugins/pace-master/themes/blue/pace-theme-flash.css',
            'resources/assets/plugins/uniform/css/default.css',
            'vendor/components/bootstrap/css/bootstrap.css',
            'vendor/fontawesome/font-awesome/css/font-awesome.css', //composer
            'resources/assets/plugins/line-icons/simple-line-icons.css',
            'resources/assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css',
            'resources/assets/plugins/wave/waves.css',
            'resources/assets/plugins/switchery/switchery.css',
            'resources/assets/css/meteor.css',
            'resources/assets/css/style.css'
        ],
        'public/css/style.css');
*/

/* This is the version that puts Each css into its own asset css file in the public folder. Use this for debugging and identifiying where stles come from. For production use the above. */
mix
    .styles('resources/assets/plugins/pace-master/themes/blue/pace-theme-flash.css', 'public/css/pace.css')
    .styles('resources/assets/plugins/uniform/css/default.css', 'public/css/uniform.css')
    .styles('vendor/components/bootstrap/css/bootstrap.css', 'public/css/bootstrap.css') //composer - changes wont be reflected after composer update commands
    .styles('vendor/fontawesome/font-awesome/css/font-awesome.css', 'public/css/font-awesome.css') //composer - changes wont be reflected after composer update commands
    .styles('resources/assets/plugins/line-icons/simple-line-icons.css', 'public/css/line-icons.css')
    .styles('resources/assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css', 'public/css/menu_cornerbox.css')
    .styles('resources/assets/plugins/wave/waves.css', 'public/css/waves.css')
    .styles('resources/assets/plugins/switchery/switchery.css', 'public/css/switchery.css')
    .styles('resources/assets/css/meteor.css', 'public/css/meteor.css')
    .styles('resources/assets/css/style.css', 'public/css/style.css');


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