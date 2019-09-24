<?php

namespace asmoday74\ckeditor5;

use yii\helpers\Html;

class EditorClassic extends CKEditor5
{
    /**
     * @var string
     */
    public $editorType = 'Classic';

    /**
     * @inheritdoc
     */
    protected function printEditorTag()
    {
        if ($this->hasModel()) {
            print Html::activeTextarea($this->model, $this->attribute, $this->options);
        } else {
            print Html::textarea($this->name, $this->value, $this->options);
        }
    }

}
