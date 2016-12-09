const elixir = require('laravel-elixir');

require( 'elixir-jshint' );

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
var vendorCssFile = 'public/css/vendor.css';

elixir((mix) => {

    mix.jshint();

    mix.styles([
        bowerPath + 'bootstrap/dist/css/bootstrap.css',
        'app.css'
    ], vendorCssFile);

    mix.scripts([
        bowerPath + 'jquery/dist/jquery.js',
        bowerPath + 'bootstrap/dist/js/bootstrap.js',
        'app.js'
    ], vendorJsFile);

    mix.styles(['component/signin.css', 'login.css'], 'public/css/login.css')
    .styles(['component/navbar-fixed-top.css', 'home.css'], 'public/css/home.css')
    .styles(['register.css'], 'public/css/register.css')
    .styles(['component/navbar-fixed-top.css', 'dashboard.css'], 'public/css/dashboard.css');



    mix.scripts(['login.js'], 'public/js/login.js')
    mix.scripts(['home.js'], 'public/js/home.js')
    .scripts(['register.js'], 'public/js/register.js')
    .scripts(['dashboard.js'], 'public/js/dashboard.js');

    mix.version([
        'css/vendor.css',
        'css/login.css',
        'css/register.css',
        'css/dashboard.css',
        'js/vendor.js',
        'js/login.js',
        'js/register.js',
        'js/dashboard.js',
    ]);
});
