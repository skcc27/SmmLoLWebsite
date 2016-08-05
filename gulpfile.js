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
    mix.sass('app.scss')
        .styles(['stylefront.css', 'parallax.css', 'lolform.css'])
        .browserify('app.js')
        .scripts(['bootstrap-notify.js', 'sc.js', 'script.js', 'parallax.js', 'collector.js']);
});
