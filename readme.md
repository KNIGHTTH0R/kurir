# Fronted Web for Kurir Site

Frontend Web for kurir frontend website

## Installation

### Requirements
- php version > 5.6
- redis-server, <http://redis.io/>
- composer, <https://getcomposer.org/>
- nodeJs <https://nodejs.org/en/>, npm, Grunt <http://gruntjs.com/>
- bower <http://bower.io/>
- Gulp <http://gulpjs.com/>

### How to start
1. Install all the requirements
2. `$ git clone git@github.com:harryosmar/kurir.git front`
3. `$ cd front`
4. `$ composer install`
5. `$ cp env.example .env`
make sure all composer packages dependencies is sucessfully installed
```
Generating autoload files
> Illuminate\Foundation\ComposerScripts::postInstall
> php artisan optimize
Generating optimized class loader
```
Then start your web server
```
$ php artisan serve
Laravel development server started on http://localhost:8000/
```

### Note
Because the asset management is handled by Gulp, you can activate the grunt watch, after installing `npm` package
```
$ bower install
$ npm install
```
running the task runner
```
$ gulp watch
```

## About

### Submitting bugs and feature requests
Harry Osmar Sitohang - <harryosmarsitohang@gmail.com> - <https://github.com/harryosmar><br />
See also the list of [contributors](https://github.com/onolinus/ApiSurveyOnline/contributors) which participated in this project
