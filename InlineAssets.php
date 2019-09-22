<?php

namespace asmoday74\ckeditor5;

use yii\web\AssetBundle;

class InlineAssets extends AssetBundle
{

    public $sourcePath = '@vendor/asmoday74/yii2-ckeditor5/ckeditor5/inline/';
    public $css = [
    ];

    public $js = [
        'ckeditor.js',
    ];

    public $depends = [
    ];
}