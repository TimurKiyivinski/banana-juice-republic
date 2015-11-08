var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

var paths = {
	'jquery': './node_modules/jquery/',
	'bootstrap': './node_modules/bootstrap-sass/assets/',
    'masonry': './node_modules/masonry-layout/',
    'imagesloaded': './node_modules/imagesloaded/',
    'summernote': './node_modules/summernote/',
    'fontawesome': './node_modules/font-awesome/',
    'datepicker': './node_modules/bootstrap-datepicker/'
}

elixir(function(mix) {
    mix.sass("app.scss", 'public/css/', {includePaths: [paths.bootstrap + 'stylesheets/']});
    mix.copy(paths.bootstrap + 'fonts/**', 'public/fonts');
    mix.copy(paths.fontawesome + 'fonts/**', 'public/fonts');
    mix.copy(paths.fontawesome + 'css/**', 'public/css');
    mix.copy(paths.summernote + "dist/summernote-bs3.css", 'public/css');
    mix.scripts([
        paths.jquery + "dist/jquery.js",
        paths.bootstrap + "javascripts/bootstrap.js",
        paths.masonry + "dist/masonry.pkgd.js",
        paths.imagesloaded + "imagesloaded.js",
        paths.summernote + "dist/summernote.js",
        paths.datepicker + "dist/js/bootstrap-datepicker.js"
    ], './public/js/app.js');
});
