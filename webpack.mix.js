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

    mix.styles([
        'public/css/vendor/fullcalendar/dist/fullcalendar.min.css',
        'public/css/vendor/sweetalert2/dist/sweetalert2.min.css',
        'public/telkomsel/css/datatable.css',
        'public/telkomsel/vendor/fullcalendar/main.css',
        'public/assets/vendor/quill/dist/quill.snow.css',
        'public/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.css',
        'public/vendor/tagify/css/tagify.css',
        'public/vendor/flatpickr/flatpickr.min.css',
        ], 'public/css/all.css');

    mix.scripts([
        // 'public/assets/vendor/jquery/dist/jquery.min.js',
        // 'public/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js',
        'public/assets/vendor/js-cookie/js.cookie.js',
        'public/vendor/tagify/dist/tagify.polyfills.min.js',
        'public/vendor/tagify/js/tagify.min.js',
        'public/assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
        'public/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js',
        'public/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js',
        'public/assets/vendor/datatables.net/js/jquery.dataTables.min.js',
        'public/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js',
        'public/assets/vendor/moment/min/moment.min.js',
        'public/assets/vendor/fullcalendar/dist/fullcalendar.min.js',
        'public/assets/vendor/sweetalert2/dist/sweetalert2.min.js',
        'public/assets/vendor/dropzone/dist/min/dropzone.min.js',
        'public/assets/vendor/quill/dist/quill.min.js',
        'public/vendor/sortable/sortable.min.js',
        'public/vendor/jsvalidation/js/jsvalidation.js',
        'public/vendor/flatpickr/flatpickr.min.js',
        'public/template/js/bootstrap.min.js',	
    ],
    'public/js/all.js');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();
