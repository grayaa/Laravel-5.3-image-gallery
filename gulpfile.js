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

elixir(function(mix) {
    //mix.sass('app.scss');

    mix.styles([
        "bootstrap.min.css",
        "ripples.css",
        "bootstrap-material-design.css",
        "style.css"
    ]);

    mix.scripts([
        "jquery.js",
        "bootstrap.min.js",
        "ripples.min.js",
        "material.min.js",
        "app.js"
    ]);


    //Generate a version (under public/build) to be able to change it (beacause browsers cache versions)
    mix.version(["css/all.css", "js/all.js"]);
});
