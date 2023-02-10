<?php

namespace backend\assets;

use yii\web\AssetBundle;

class FontAwesomeAsset extends AssetBundle
{
    // The files are not web directory accessible, therefore we need
    // to specify the sourcePath property. Notice the @vendor alias used.
    public $basePath = '@webroot';
    public $baseUrl = '@web';

 public $css = [
     'css/font-awesome.css',
     '@vendor/fortawesome/font-awesome',
 ];
}