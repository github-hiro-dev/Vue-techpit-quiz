let mix = require('laravel-mix');

mix.js('resources/js/home.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css', {
        implementation: require('node-sass')
    });

mix.browserSync({
    files: [
        "public/**/*.*"
    ],
    proxy: "http://127.0.0.1:8000"
});
