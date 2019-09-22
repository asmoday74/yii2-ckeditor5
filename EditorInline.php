<?php

namespace asmoday74\ckeditor5;

use yii\helpers\Html;

class EditorInline extends CKEditor5
{
    /**
     * @var string
     */
    public $editorType = 'Inline';

    /**
     * @inheritdoc
     */
    protected function registerAssets($view)
    {
        InlineAssets::register($view);
    }

    /**
     * @inheritdoc
     */
    protected function printEditorTag()
    {
        print Html::tag('div', 'qweaasd', $this->options);
    }

}
