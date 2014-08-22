<?php
/* @var $this VzdbUserController */
/* @var $model VzdbUser */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_user'); ?>
		<?php echo $form->textField($model,'ID_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'e_mail'); ?>
		<?php echo $form->textField($model,'e_mail',array('size'=>55,'maxlength'=>55)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email_ver'); ?>
		<?php echo $form->textField($model,'email_ver'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tel_num'); ?>
		<?php echo $form->textField($model,'tel_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tel_ver'); ?>
		<?php echo $form->textField($model,'tel_ver'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'point'); ?>
		<?php echo $form->textField($model,'point'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'money'); ?>
		<?php echo $form->textField($model,'money'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'regtime'); ?>
		<?php echo $form->textField($model,'regtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'regip'); ?>
		<?php echo $form->textField($model,'regip',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'logintime'); ?>
		<?php echo $form->textField($model,'logintime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'loginip'); ?>
		<?php echo $form->textField($model,'loginip',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'loginaddress'); ?>
		<?php echo $form->textField($model,'loginaddress',array('size'=>60,'maxlength'=>120)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->