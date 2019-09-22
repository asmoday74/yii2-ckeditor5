<?php

namespace asmoday74\ckeditor5;

use yii\helpers\Html;

class EditorBalloon extends CKEditor5
{
    /**
     * @var string
     */
    public $editorType = 'Balloon';

    /**
     * @inheritdoc
     */
    protected function registerAssets($view)
    {
        BalloonAssets::register($view);
    }

    /**
     * @inheritdoc
     */
    protected function printEditorTag()
    {
        print Html::tag('div', '', $this->options);
    }

}
