<?php

namespace asmoday74\ckeditor5;

use yii\web\AssetBundle;

class CKEditorAssets extends AssetBundle
{

    public $sourcePath = '@vendor/asmoday74/yii2-ckeditor5/assets/';
    public $css = [
    ];

    public $js = [
        'ckeditor-file-upload.js',
    ];

    public $depends = [
    ];
}