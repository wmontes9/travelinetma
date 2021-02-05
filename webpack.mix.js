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

mix.scripts([
	'resources/assets/template/admin/files/bower_components/jquery/dist/jquery.min.js',
    'resources/assets/template/admin/files/bower_components/jquery-ui/jquery-ui.min.js',
    'resources/assets/template/admin/files/bower_components/popper.js/dist/umd/popper.min.js',
    'resources/assets/template/admin/files/bower_components/bootstrap/dist/js/bootstrap.min.js',

    'resources/assets/template/admin/files/bower_components/jquery-slimscroll/jquery.slimscroll.js',
    'resources/assets/template/admin/files/bower_components/modernizr/modernizr.js',
    'resources/assets/template/admin/files/bower_components/modernizr/feature-detects/css-scrollbars.js',

    'resources/assets/template/admin/files/bower_components/datatables.net/js/jquery.dataTables.min.js',
    'resources/assets/template/admin/files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js',
    'resources/assets/template/admin/files/assets/pages/data-table/js/jszip.min.js',
    'resources/assets/template/admin/files/assets/pages/data-table/js/pdfmake.min.js',
    'resources/assets/template/admin/files/assets/pages/data-table/js/vfs_fonts.js',
    'resources/assets/template/admin/files/bower_components/datatables.net-buttons/js/buttons.print.min.js',
    'resources/assets/template/admin/files/bower_components/datatables.net-buttons/js/buttons.html5.min.js',
    'resources/assets/template/admin/files/assets/pages/data-table/js/dataTables.bootstrap4.min.js',
    'resources/assets/template/admin/files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js',
    'resources/assets/template/admin/files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js',
    'resources/assets/template/admin/files/bower_components/i18next/i18next.min.js',
    'resources/assets/template/admin/files/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js',
    'resources/assets/template/admin/files/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js',
    'resources/assets/template/admin/files/bower_components/jquery-i18next/jquery-i18next.min.js',
    'resources/assets/template/admin/files/assets/pages/data-table/js/data-table-custom.js',
    'resources/assets/template/admin/files/assets/js/pcoded.min.js',
    'resources/assets/template/admin/files/assets/js/vartical-layout.min.js',
    'resources/assets/template/admin/files/assets/js/jquery.mCustomScrollbar.concat.min.js',
    'resources/assets/template/admin/files/assets/js/script.js',
	], 'public/js/app.admin.js').scripts([
        'resources/js/components/app.js'
    ],'public/js/app.client.js')
    .styles([
    'resources/assets/template/admin/files/bower_components/bootstrap/dist/css/bootstrap.min.css',
		'resources/assets/template/admin/files/assets/icon/feather/css/feather.css',
		'resources/assets/template/admin/files/assets/pages/data-table/css/jquery.dataTables.min.css',
    'resources/assets/template/admin/files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css',
    'resources/assets/template/admin/files/assets/pages/data-table/css/buttons.dataTables.min.css',
	'resources/assets/template/admin/files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css',
    'resources/assets/template/admin/files/assets/css/style.css',
    'resources/assets/template/admin/files/assets/css/jquery.mCustomScrollbar.css',
    'resources/css/admin.css',
    ], 'public/css/app.admin.css').styles([
        'resources/css/app.client.css'
    ],'public/css/app.client.css');

    
 