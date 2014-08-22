<?php
/* @var $this VzdbUserController */
/* @var $data VzdbUser */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_user')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_user), array('view', 'id'=>$data->ID_user)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('e_mail')); ?>:</b>
	<?php echo CHtml::encode($data->e_mail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_ver')); ?>:</b>
	<?php echo CHtml::encode($data->email_ver); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel_num')); ?>:</b>
	<?php echo CHtml::encode($data->tel_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel_ver')); ?>:</b>
	<?php echo CHtml::encode($data->tel_ver); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('point')); ?>:</b>
	<?php echo CHtml::encode($data->point); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('money')); ?>:</b>
	<?php echo CHtml::encode($data->money); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('regtime')); ?>:</b>
	<?php echo CHtml::encode($data->regtime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('regip')); ?>:</b>
	<?php echo CHtml::encode($data->regip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('logintime')); ?>:</b>
	<?php echo CHtml::encode($data->logintime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('loginip')); ?>:</b>
	<?php echo CHtml::encode($data->loginip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('loginaddress')); ?>:</b>
	<?php echo CHtml::encode($data->loginaddress); ?>
	<br />

	*/ ?>

</div>