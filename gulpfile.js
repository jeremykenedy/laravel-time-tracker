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
    mix.sass('app.scss');
	mix.copy('vendor/bower_dl/angular/angular.min.js', 'public/js/vendor/angular.min.js');
	mix.copy('vendor/bower_dl/angular-bootstrap/ui-bootstrap-tpls.min.js', 'public/js/vendor/ui-bootstrap-tpls.min.js');
	mix.copy('vendor/bower_dl/angular-resource/angular-resource.min.js', 'public/js/vendor/angular-resource.min.js');
	mix.copy('vendor/bower_dl/moment/moment.js', 'public/js/vendor/moment.js');
});