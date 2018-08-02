<?php

namespace kntodev\helpers;

use yii\web\AssetBundle;

class HelpersAsset extends AssetBundle
{
	public $sourcePath = __DIR__.'/assets'
//    public $basePath = '@kntodev/helpers/assets';
//    public $baseUrl = '@web';
    public $css = [
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}