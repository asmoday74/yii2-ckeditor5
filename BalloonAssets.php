<?php

namespace asmoday74\ckeditor5;

use yii\web\AssetBundle;

class BalloonAssets extends AssetBundle
{

    public $sourcePath = '@vendor/asmoday74/yii2-ckeditor5/ckeditor5/balloon/';
    public $css = [
    ];

    public $js = [
        'ckeditor.js',
    ];

    public $depends = [
    ];
}