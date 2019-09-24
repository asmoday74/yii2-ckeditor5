YII2 CKEditor 5
===============
CKEditor 5 WYSIWYG widget for Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require --prefer-dist asmoday74/yii2-ckeditor5 "*"
```

or add

```
"asmoday74/yii2-ckeditor5": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Examples of using:

```php
use asmoday74\ckeditor5\EditorClassic;
...
	<?= $form->field($model, 'content')->widget(EditorClassic::className(),[
			'clientOptions' => [
				'language' => 'en',
				'uploadUrl' => 'upload', 	//url for upload files
				'uploadField' => 'image',	//field name in the upload form
			]
	]); ?>
```

```php
use asmoday74\ckeditor5\EditorInline;	//..or EditorBalloon
...
	<?php EditorInline::begin(['name' => 'editor-inline','clientOptions' => ['language' => 'en','uploadUrl' => 'upload']]);?>
		<h1>The three greatest things you learn from traveling</h1>
		<p>
		Like all the great things on earth traveling teaches us by example. Here are some of the most precious lessons I’ve learned over the years of traveling.
		</p>
	<?php EditorInline::end();?>
```
