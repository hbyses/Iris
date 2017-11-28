let mix = require('laravel-mix');

//CSS/SCSS/SASS Files
mix.styles('resources/assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css', 'public/css/menu_cornerbox.css');
mix.styles('resources/assets/css/meteor.css', 'public/css/meteor.css');
mix.styles('resources/assets/css/style.css', 'public/css/style.css');

//JS Files
mix.js('resources/assets/plugins/3d-bold-navigation/js/modernizr.js', 'public/js/3d-canvas');
mix.js('resources/assets/plugins/3d-bold-navigation/js/main.js', 'public/js/3d-canvas');
mix.js('resources/assets/plugins/offcanvasmenueffects/js/classie.js', 'public/js');
mix.js('resources/assets/js/meteor.js', 'public/js');
//mix.js('resources/assets/js/pages/table-data.js', 'public/js/datatable-defs.js');
//mix.scripts('resources/assets/js/pages/*.js', 'public/js/resources.js');