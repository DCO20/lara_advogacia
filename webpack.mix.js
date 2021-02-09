const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ])
    .styles('resources/views/assets/lib/animate/animate.min.css', 'public/assets/css/animate.min.css')
    .styles('resources/views/assets/lib/owlcarousel/assets/owl.carousel.min.css', 'public/assets/css/owl.carousel.min.css')
    .styles('resources/views/assets/css/style.css', 'public/assets/css/style.css')

    .scripts('resources/views/assets/lib/easing/easing.min.js', 'public/assets/js/easing.min.js')
    .scripts('resources/views/assets/lib/owlcarousel/owl.carousel.min.js', 'public/assets/js/owl.carousel.min.js')
    .scripts('resources/views/assets/lib/isotope/isotope.pkgd.min.js', 'public/assets/js/isotope.pkgd.min.js')
    .scripts('resources/views/assets/js/main.js', 'public/assets/js/main.js')
    
    .copyDirectory('resources/views/assets/img', 'public/assets/img')

if (mix.inProduction()) {
    mix.version();
}
