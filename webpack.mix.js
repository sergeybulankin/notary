const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .vue({
        extractStyles: true,
        globalStyles: false
    })

mix.sass('resources/assets/sass/app.sass', 'public/css')
