let mix = require('laravel-mix');

//CSS/SCSS/SASS Files
mix.styles('resources/assets/css/meteor.css', 'public/css/meteor.css');
mix.styles('resources/assets/css/style.css', 'public/css/style.css');

//JS Files
mix.js('resources/assets/js/meteor.js', 'public/js');
mix.js('resources/assets/js/pages/table-data.js', 'public/js/datatable-defs.js');