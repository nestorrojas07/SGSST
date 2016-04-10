<?php
/* @var $this BrigadaController */
/* @var $model Brigada */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'brigada-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Funcion'); ?>
		<?php echo $form->textField($model,'Funcion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Funcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Descripcion_funcion'); ?>
		<?php echo $form->textField($model,'Descripcion_funcion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Descripcion_funcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IdPlanEmergencias'); ?>
		<?php echo $form->textField($model,'IdPlanEmergencias'); ?>
		<?php echo $form->error($model,'IdPlanEmergencias'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->