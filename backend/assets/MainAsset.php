<?php
namespace backend\assets;
use backend\assets\AppAsset;

class MainAsset extends AppAsset
{
	public $basePath = '@webroot';
    public $baseUrl = '@web/public';
    public $css = [
        // 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css',
        '//cdn.bootcss.com/font-awesome/4.5.0/css/font-awesome.min.css',
        'css/ionicons/ionicons.css',
        'plugins/select2/select2.min.css',
        'css/AdminLTE.min.css',
        'css/skins/_all-skins.min.css',
        'plugins/iCheck/flat/blue.css',
        'plugins/morris/morris.css',
        'plugins/iCheck/all.css',
        'plugins/jvectormap/jquery-jvectormap-1.2.2.css',
        'plugins/datepicker/datepicker3.css',
        'plugins/daterangepicker/daterangepicker-bs3.css',
        'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
        'css/main.css',
    ];
    public $js = [
    	'plugins/jquery-ui-1.11.4/jquery-ui.min.js',
    	'plugins/bootstrap/js/bootstrap.min.js',
    	'plugins/raphael/raphael.min.js',
    	'plugins/iCheck/icheck.min.js',
    	'plugins/sparkline/jquery.sparkline.min.js',
    	'plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
    	'plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
    	'plugins/knob/jquery.knob.js',
        'plugins/select2/select2.full.min.js',
    	'plugins/daterangepicker/moment.min.js',
    	'plugins/daterangepicker/daterangepicker.js',
    	'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
    	'plugins/slimScroll/jquery.slimscroll.min.js',
    	'plugins/fastclick/fastclick.js',
    	'js/app.min.js',
    	'js/demo.js',
    ];

}
?>