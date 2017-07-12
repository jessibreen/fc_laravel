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


//AdminLTE whatnot
mix.less('vendor/almasaeed2010/adminlte/build/less/AdminLTE.less', 'public/adminLTE/adminLTE.css');
mix.less('vendor/almasaeed2010/adminlte/build/less/skins/_all-skins.less', 'public/adminLTE/skins.css');

mix.scripts('vendor/almasaeed2010/adminlte/bootstrap/js/bootstrap.min.js', 'public/adminLTE/js/bootstrap.min.js');
mix.scripts('vendor/almasaeed2010/adminlte/plugins/jQuery/jquery-2.2.3.min.js', 'public/adminLTE/js/jquery-2.2.3.min.js');


