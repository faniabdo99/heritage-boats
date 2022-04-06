const mix = require('laravel-mix');
mix.options({
  postCss: [
    require('autoprefixer')
  ],
  processCssUrls: false
});
mix.sass('resources/scss/admin/app.scss' , 'public/admin/css')
    .browserSync('http://localhost/heritage-boats');
