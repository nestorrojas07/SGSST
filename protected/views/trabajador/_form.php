<?php
/* @var $this TrabajadorController */
/* @var $model Trabajador */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'trabajador-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Cedula'); ?>
		<?php echo $form->textField($model,'Cedula',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Cedula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Telefono'); ?>
		<?php echo $form->textField($model,'Telefono',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Correo'); ?>
		<?php echo $form->textField($model,'Correo',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Correo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Trabajador_Afiliaciones'); ?>
		<?php echo $form->textField($model,'Trabajador_Afiliaciones'); ?>
		<?php echo $form->error($model,'Trabajador_Afiliaciones'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Trabajador_HistoriaClinica'); ?>
		<?php echo $form->textField($model,'Trabajador_HistoriaClinica'); ?>
		<?php echo $form->error($model,'Trabajador_HistoriaClinica'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->