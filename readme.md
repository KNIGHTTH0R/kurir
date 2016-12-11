# Fronted Web for Kurir Site

Frontend Web for kurir frontend website

## Express Installation
Pre-requirement : install [virtualbox](https://www.virtualbox.org/) & [vagrant](https://www.vagrantup.com/) 

This will automatically build your front & api, include migrate the database too.

1.  `git clone -b kurir --single-branch https://github.com/harryosmar/trusty64-lamp.git`
2.  `cd trusty64-lamp && vagrant up --provision`
3.  configure your `hosts`, add this line `192.168.33.106 kurir.dev api.kurir.dev`
4.  open <http://kurir.dev> in your browser
5.  done, you are ready to go

## Manual Installation
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
