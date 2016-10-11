<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

        'assets/css/toastr.css',

        'assets/css/animate.css',
        'assets/css/font-awesome.min.css',
        'assets/css/style.min.css',
        'assets/css/site.css',

    ];
    public $js = [


        'assets/js/jquery.min.js',
        'assets/js/scripts.min.js',
        'assets/js/wow.min.js',
        'assets/js/waves.js',
        'assets/js/footer.js',
        'assets/js/frontend.js',

        'assets/js/validator.js',
        'assets/js/toastr.min.js',
        'assets/js/maska.js',
        'assets/js/main.js',
    ];
    public $depends = [

    ];
}
