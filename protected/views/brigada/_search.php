<?php
/* @var $this BrigadaController */
/* @var $model Brigada */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IdBrigada'); ?>
		<?php echo $form->textField($model,'IdBrigada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Funcion'); ?>
		<?php echo $form->textField($model,'Funcion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Descripcion_funcion'); ?>
		<?php echo $form->textField($model,'Descripcion_funcion',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IdPlanEmergencias'); ?>
		<?php echo $form->textField($model,'IdPlanEmergencias'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->