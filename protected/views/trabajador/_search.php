<?php
/* @var $this TrabajadorController */
/* @var $model Trabajador */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Cedula'); ?>
		<?php echo $form->textField($model,'Cedula',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Telefono'); ?>
		<?php echo $form->textField($model,'Telefono',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Correo'); ?>
		<?php echo $form->textField($model,'Correo',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Trabajador_Afiliaciones'); ?>
		<?php echo $form->textField($model,'Trabajador_Afiliaciones'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Trabajador_HistoriaClinica'); ?>
		<?php echo $form->textField($model,'Trabajador_HistoriaClinica'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->