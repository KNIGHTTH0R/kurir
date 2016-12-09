const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

var bowerPath = './bower_components/';
var vendorJsFile = 'public/js/vendor.js';
var vendorCssFile = 'public/js/vendor.css';

elixir((mix) => {

    mix.styles([
        bowerPath + 'bootstrap/dist/css/bootstrap.css',
        'app.css'
    ], vendorCssFile);

    mix.styles(['./' + vendorCssFile, 'login.css'], 'public/css/login.css')
    .styles(['./' + vendorCssFile, 'register.css'], 'public/css/register.css')
    .styles(['./' + vendorCssFile, 'dashboard.css'], 'public/css/dashboard.css');

    mix.scripts([
        bowerPath + 'jquery/dist/jquery.js',
        bowerPath + 'bootstrap/dist/js/bootstrap.js',
        'app.js'
    ], vendorJsFile);

    mix.scripts(['./' + vendorJsFile, 'login.js'], 'public/js/login.js')
    .scripts(['./' + vendorJsFile, 'register.js'], 'public/js/register.js')
    .scripts(['./' + vendorJsFile, 'dashboard.js'], 'public/js/dashboard.js');

    mix.version([
        'css/login.css',
        'css/register.css',
        'css/dashboard.css',
        'js/login.js',
        'js/register.js',
        'js/dashboard.js',
    ]);
});
