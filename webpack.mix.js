const mix = require('laravel-mix');

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

mix
    .styles([
        'resources/vendor/fontawesome-free-5.15.1-web/css/all.min.css',
        'resources/css/adminlte.css',
    ], 'public/css/app.css')

    .js('resources/js/app.js', 'public/js')

    .scripts([
        'resources/vendor/jquery/jquery.min.js',
        'resources/vendor/bootstrap/js/bootstrap.bundle.min.js'
    ], 'public/js/vendor.js')


    //.sass('resources/sass/app.scss', 'public/css')

    //requiere dos parametros un archivo origen y un archivo destino
    .copy('resources/vendor/fontawesome-free-5.15.1-web/webfonts', 'public/webfonts')
    .copy('resources/img', 'public/img') //parametros de copy('carpeta origen','carpeta destino')

    //limpiar o actualizar la cache del navegador en base a lo que se tenga en el servidor
    .version() //los cambios se reflejan en el archivo public/mix-manifest.json
    ;
