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
    mix
        .sass('app.scss')
        .scripts(
            [
                'node_modules/angular/angular.js',
                'node_modules/angular-animate/angular-animate.js',
                'node_modules/angular-touch/angular-touch.js',
                'node_modules/angular-aria/angular-aria.js',
                'node_modules/angular-material/angular-material.js'
            ],
            'public/js/libs.js',
            './'
        )
        .styles(
            [
                'node_modules/angular-material/angular-material.css'
            ],
            'public/css/libs.css',
            './'
        );
});