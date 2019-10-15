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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
    .sass('resources/sass/app-dark.scss', 'public/css');
    .sass('resources/sass/icons.scss', 'public/css');
    .sass('resources/sass/app-green.scss', 'public/css');
    .sass('resources/sass/vendor/_bootstrap-datepicker.min.scss', 'public/css/vendor');
    .sass('resources/sass/vendor/_bootstrap-timepicker.min.scss', 'public/css/vendor');
    .sass('resources/sass/vendor/_daterangepicker.scss', 'public/css/vendor');
    .sass('resources/sass/vendor/_jquery.toast.min.scss', 'public/css/vendor');
    .sass('resources/sass/vendor/_select2.min.scss', 'public/css/vendor');
    .sass('resources/sass/config/default/_custom-variables.scss', 'public/css/config/default');
    .sass('resources/sass/config/default/_variables.scss', 'public/css/config/default');
    .sass('resources/sass/custom/structure/_footer.scss', 'public/css/custom/structure');
    .sass('resources/sass/custom/structure/_general.scss', 'public/css/custom/structure');
    .sass('resources/sass/custom/structure/_horizontal-nav.scss', 'public/css/custom/structure');
    .sass('resources/sass/custom/structure/_left-menu.scss', 'public/css/custom/structure');
    .sass('resources/sass/custom/structure/_page-head.scss', 'public/css/custom/structure');
    .sass('resources/sass/custom/structure/_right-sidebar.scss', 'public/css/custom/structure');
    .sass('resources/sass/custom/structure/_topbar.scss', 'public/css/custom/structure');
    .sass('resources/sass/custom/plugins/_bootstrap-timepicker.scss', 'public/css/custom/plugins');
    .sass('resources/sass/custom/plugins/_bootstrap-touchspin.scss', 'public/css/custom/plugins');
    .sass('resources/sass/custom/plugins/_britechart.scss', 'public/css/custom/plugins');
    .sass('resources/sass/custom/plugins/_calendar.scss', 'public/css/custom/plugins');
    .sass('resources/sass/custom/plugins/_chartjs.scss', 'public/css/custom/plugins');
    .sass('resources/sass/custom/plugins/_datatable.scss', 'public/css/custom/plugins');
    .sass('resources/sass/custom/plugins/_datepicker.scss', 'public/css/custom/plugins');
    .sass('resources/sass/custom/plugins/_daterange.scss', 'public/css/custom/plugins');
    .sass('resources/sass/custom/plugins/_dragula.scss', 'public/css/custom/plugins');
    .sass('resources/sass/custom/plugins/_dropzone.scss', 'public/css/custom/plugins');
    .sass('resources/sass/custom/plugins/_form-wizard.scss', 'public/css/custom/plugins');
    .sass('resources/sass/custom/plugins/_icons.scss', 'public/css/custom/plugins');
    .sass('resources/sass/custom/plugins/_maps.scss', 'public/css/custom/plugins');
    .sass('resources/sass/custom/plugins/_metis-menu.scss', 'public/css/custom/plugins');
    .sass('resources/sass/custom/plugins/_select2.scss', 'public/css/custom/plugins');
    .sass('resources/sass/custom/plugins/_simplemde.scss', 'public/css/custom/plugins');
    .sass('resources/sass/custom/plugins/_slimscroll.scss', 'public/css/custom/plugins');
    .sass('resources/sass/custom/plugins/_sparklines.scss', 'public/css/custom/plugins');
    .sass('resources/sass/custom/plugins/_summernote.scss', 'public/css/custom/plugins');
    .sass('resources/sass/custom/plugins/_toaster.scss', 'public/css/custom/plugins');
    .sass('resources/sass/custom/plugins/_typehead.scss', 'public/css/custom/plugins');
    .sass('resources/sass/custom/plugins/icons/_dripicons.scss', 'public/css/custom/plugins/icons');
    .sass('resources/sass/custom/plugins/icons/_materialdesignicons.scss', 'public/css/custom/plugins/icons');
    .sass('resources/sass/custom/pages/_authentication.scss', 'public/css/custom/pages');
    .sass('resources/sass/custom/pages/_buttons-demo.scss', 'public/css/custom/pages');
    .sass('resources/sass/custom/pages/_email.scss', 'public/css/custom/pages');
    .sass('resources/sass/custom/pages/_error.scss', 'public/css/custom/pages');
    .sass('resources/sass/custom/pages/_faq.scss', 'public/css/custom/pages');
    .sass('resources/sass/custom/pages/_grid-demo.scss', 'public/css/custom/pages');
    .sass('resources/sass/custom/pages/_icons-demo.scss', 'public/css/custom/pages');
    .sass('resources/sass/custom/pages/_maintenance.scss', 'public/css/custom/pages');
    .sass('resources/sass/custom/pages/_tasks.scss', 'public/css/custom/pages');
    .sass('resources/sass/custom/fonts/_nunito.scss', 'public/css/custom/fonts');
