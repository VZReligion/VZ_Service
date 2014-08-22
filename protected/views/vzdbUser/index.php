<?php
/* @var $this VzdbUserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vzdb Users',
);

$this->menu=array(
	array('label'=>'Create VzdbUser', 'url'=>array('create')),
	array('label'=>'Manage VzdbUser', 'url'=>array('admin')),
);
?>

<h1>Vzdb Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
