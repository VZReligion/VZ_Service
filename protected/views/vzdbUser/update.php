<?php
/* @var $this VzdbUserController */
/* @var $model VzdbUser */

$this->breadcrumbs=array(
	'Vzdb Users'=>array('index'),
	$model->ID_user=>array('view','id'=>$model->ID_user),
	'Update',
);

$this->menu=array(
	array('label'=>'List VzdbUser', 'url'=>array('index')),
	array('label'=>'Create VzdbUser', 'url'=>array('create')),
	array('label'=>'View VzdbUser', 'url'=>array('view', 'id'=>$model->ID_user)),
	array('label'=>'Manage VzdbUser', 'url'=>array('admin')),
);
?>

<h1>Update VzdbUser <?php echo $model->ID_user; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>