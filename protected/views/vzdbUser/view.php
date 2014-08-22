<?php
/* @var $this VzdbUserController */
/* @var $model VzdbUser */

$this->breadcrumbs=array(
	'Vzdb Users'=>array('index'),
	$model->ID_user,
);

$this->menu=array(
	array('label'=>'List VzdbUser', 'url'=>array('index')),
	array('label'=>'Create VzdbUser', 'url'=>array('create')),
	array('label'=>'Update VzdbUser', 'url'=>array('update', 'id'=>$model->ID_user)),
	array('label'=>'Delete VzdbUser', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_user),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage VzdbUser', 'url'=>array('admin')),
);
?>

<h1>View VzdbUser #<?php echo $model->ID_user; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_user',
		'username',
		'password',
		'e_mail',
		'email_ver',
		'tel_num',
		'tel_ver',
		'point',
		'money',
		'regtime',
		'regip',
		'logintime',
		'loginip',
		'loginaddress',
	),
)); ?>
