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

mix.js('resources/js/common.js', 'public/js')
   .js('resources/js/user.js', 'public/js');
   // .sass('resources/sass/index.scss', 'public/css');

mix.browserSync({
  server: 'public',
  proxy: false,
  open: false,
  files: [
    'public/js/*.js',
    'public/css/*.css',
  ]
})

if (mix.inProduction()) {
   mix.sourceMaps(false).version();
}
