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
    public function init()
    {
        parent::init();
		ob_start();
    }
	
    /**
     * @inheritdoc
     */
    protected function printEditorTag()
    {
		$value = ob_get_clean();
		print Html::tag('div', $value, $this->options);
    }

}
