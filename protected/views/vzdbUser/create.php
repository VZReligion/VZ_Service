<?php
/* @var $this VzdbUserController */
/* @var $model VzdbUser */

$this->breadcrumbs=array(
	'Vzdb Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List VzdbUser', 'url'=>array('index')),
	array('label'=>'Manage VzdbUser', 'url'=>array('admin')),
);
?>

<h1>Create VzdbUser</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>