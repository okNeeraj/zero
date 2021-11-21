const mix = require('laravel-mix');

/*
    |--------------------------------------------------------------------------
    | Frontend React App Compiler Settings
    |--------------------------------------------------------------------------
    | This line of code compile all backend CSS/JS and other resources.
    |
    */

// mix.js(
//     'resources/Frontend/react/app.js',
//     'public/Frontend/react')
//     .react()
//     .sass(
//         'resources/Frontend/react/assets/sass/app.scss',
//         'public/Frontend/react/css');


/*
    |--------------------------------------------------------------------------
    | Backend Compiler Settings
    |--------------------------------------------------------------------------
    | This line of code compile all backend CSS/JS and other resources.
    |
    */

mix.sass(
    'resources/Backend/sass/app.scss',
    'public/Backend/css')
    .options({
        processCssUrls: false
    })
    .sourceMaps(true, 'source-map');


if (mix.inProduction()) {
    mix.version();
}

mix.browserSync('http://127.0.0.1:8000/');