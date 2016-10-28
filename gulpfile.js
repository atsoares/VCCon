var elixir = require('laravel-elixir');

require('laravel-elixir-css-url-adjuster');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    mix.urlAdjuster('node_modules/font-awesome/css/font-awesome.css', {
        prepend: '../'
    }, 'app/Applications/App/resources/assets/css/modifiedUrlsCss');

    mix.urlAdjuster('node_modules/icheck/skins/polaris/polaris.css', {
        prepend: '../../images/iCheck/'
    }, 'app/Applications/App/resources/assets/css/modifiedUrlsCss');

    mix.copy('node_modules/font-awesome/fonts', 'public/fonts');
    mix.copy('node_modules/icheck/skins/polaris/polaris.png', 'public/images/iCheck');
    mix.copy('node_modules/icheck/skins/polaris/polaris@2x.png', 'public/images/iCheck');

    mix.styles([
        '/../../../node_modules/bootstrap/dist/css/bootstrap.css',        
        '/../../../node_modules/datatables.net-bs/css/dataTables.bootstrap.css',
        '/../../../node_modules/datatables.net-responsive-bs/css/responsive.bootstrap.css',
        '/../../../node_modules/daterangepicker/daterangepicker-bs3.css',
        '/../../../app/Applications/App/resources/assets/css/modifiedUrlsCss/font-awesome.css',
        '/../../../app/Applications/App/resources/assets/css/modifiedUrlsCss/polaris.css',
        '/../../../node_modules/select2/dist/css/select2.css',
        '/../../../node_modules/jquery-datetimepicker/jquery.datetimepicker.css',
        '/../../../node_modules/fullcalendar/dist/fullcalendar.css',
        '/../../../node_modules/sweetalert/dist/sweetalert.css',
        '/../../../node_modules/sweetalert/themes/google/google.css',
        '/../../../app/Applications/App/resources/assets/css/pace/pace-theme-flash.css',
        '/../../../app/Applications/App/resources/assets/css/AdminLTE/AdminLTE.css',
        '/../../../app/Applications/App/resources/assets/css/AdminLTE/skins/skin-blue-light.css',
        '/../../../app/Applications/App/resources/assets/css/master.css',
        '/../../../app/Applications/App/resources/assets/css/dataTables.fontAwesome.css'
    ],'public/css/vendor.css');

    mix.scripts([
        '/../../../node_modules/jquery/dist/jquery.js',
        '/../../../node_modules/bootstrap/dist/js/bootstrap.js',        
        '/../../../node_modules/bootstrap-maxlength/bootstrap-maxlength.js',
        '/../../../node_modules/datatables.net/js/jquery.dataTables.js',
        '/../../../node_modules/datatables.net-responsive/js/dataTables.responsive.js',
        '/../../../node_modules/datatables.net-bs/js/dataTables.bootstrap.js',
        '/../../../node_modules/datatables.net-responsive-bs/js/responsive.bootstrap.js',
        '/../../../node_modules/moment/moment.js',
        '/../../../node_modules/moment/locale/pt-br.js',
        '/../../../node_modules/daterangepicker/daterangepicker.js',
        '/../../../node_modules/jquery-datetimepicker/build/jquery.datetimepicker.full.js',
        '/../../../node_modules/fullcalendar/dist/fullcalendar.js',
        '/../../../node_modules/fullcalendar/dist/gcal.js',
        '/../../../node_modules/fullcalendar/dist/locale-all.js',
        '/../../../node_modules/icheck/icheck.js',
        '/../../../node_modules/jquery.inputmask/dist/jquery.inputmask.bundle.js',        
        '/../../../node_modules/jquery-mousewheel/jquery.mousewheel.js',
        '/../../../node_modules/select2/dist/js/select2.js',
        '/../../../node_modules/select2/dist/js/i18n/pt-BR.js',
        '/../../../node_modules/sweetalert/dist/sweetalert.min.js',
        '/../../../app/Applications/App/resources/assets/js/tableExport/tableExport.js',
        '/../../../app/Applications/App/resources/assets/js/tableExport/jquery.base64.js',
        '/../../../app/Applications/App/resources/assets/js/tableExport/html2canvas.js',
        '/../../../app/Applications/App/resources/assets/js/tableExport/jspdf/libs/sprintf.js',
        '/../../../app/Applications/App/resources/assets/js/tableExport/jspdf/jspdf.js',
        '/../../../app/Applications/App/resources/assets/js/tableExport/jspdf/libs/base64.js',
        '/../../../app/Applications/App/resources/assets/js/AdminLTE.js',
        '/../../../app/Applications/App/resources/assets/js/pace/pace.js'
    ],'public/js/vendor.js');

    mix.scripts([
        '/../../../app/Applications/App/resources/assets/js/app/'
    ],'public/js/app.js');

    mix.version(['css/vendor.css', 'js/vendor.js', 'js/app.js']);
    
});
