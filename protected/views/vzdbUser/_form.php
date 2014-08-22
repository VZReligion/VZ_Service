<?php
/* @var $this VzdbUserController */
/* @var $model VzdbUser */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vzdb-user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'e_mail'); ?>
		<?php echo $form->textField($model,'e_mail',array('size'=>55,'maxlength'=>55)); ?>
		<?php echo $form->error($model,'e_mail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_ver'); ?>
		<?php echo $form->textField($model,'email_ver'); ?>
		<?php echo $form->error($model,'email_ver'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel_num'); ?>
		<?php echo $form->textField($model,'tel_num'); ?>
		<?php echo $form->error($model,'tel_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel_ver'); ?>
		<?php echo $form->textField($model,'tel_ver'); ?>
		<?php echo $form->error($model,'tel_ver'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'point'); ?>
		<?php echo $form->textField($model,'point'); ?>
		<?php echo $form->error($model,'point'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'money'); ?>
		<?php echo $form->textField($model,'money'); ?>
		<?php echo $form->error($model,'money'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'regtime'); ?>
		<?php echo $form->textField($model,'regtime'); ?>
		<?php echo $form->error($model,'regtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'regip'); ?>
		<?php echo $form->textField($model,'regip',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'regip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'logintime'); ?>
		<?php echo $form->textField($model,'logintime'); ?>
		<?php echo $form->error($model,'logintime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'loginip'); ?>
		<?php echo $form->textField($model,'loginip',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'loginip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'loginaddress'); ?>
		<?php echo $form->textField($model,'loginaddress',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'loginaddress'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->