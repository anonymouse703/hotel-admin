const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ])
    .alias({
        '@': 'resources/js',
    });

if (mix.inProduction()) {
    mix.version();
}

mix.styles([
    'resources/admin/assets/css/bootstrap.min.css',
    'resources/admin/assets/css/nifty.min.css',
    ], 'public/css/main.css')
    .scripts([
    'resources/admin/assets/js/bootstrap.min.js',  
    'resources/admin/assets/js/nifty.min.js', 
    'resources/admin/assets/pages/dashboard-1.min.js',
    ], 'public/js/main.js');
