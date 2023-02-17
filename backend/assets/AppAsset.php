<?php

namespace backend\assets;

use yii\bootstrap4\BootstrapAsset;
use yii\bootstrap4\BootstrapPluginAsset;
use yii\web\AssetBundle;
use yii\web\JqueryAsset;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'vendor/fontawesome-free/css/all.min.css',
        'https://unpkg.com/leaflet@1.9.3/dist/leaflet.css',
        'https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i',
        'css/sb-admin-2.min.css',
        'css/loader.css',
        'css/style.css'
    ];
    public $js = [
        'js/jquery-easing/jquery.easing.min.js',
        'https://unpkg.com/leaflet@1.9.3/dist/leaflet.js',
        'js/sb-admin-2.js',
        'js/sb-admin-2.min.js',
        'js/main.js',
        'js/loader.js',
        'js/echarts.js',
        'js/popper.js',
        'js/bootstrap.min.js',
        'js/main_side.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        JqueryAsset::class,
        BootstrapPluginAsset::class,
    ];
}
