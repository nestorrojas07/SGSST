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

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<!--<?php echo $form->errorSummary($model); ?>-->

	<div >
		<?php echo $form->labelEx($model,'Funcion'); ?>
		<?php echo $form->textField($model,'Funcion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Funcion'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'Responsabilidades'); ?>
		<?php echo $form->textArea($model,'Descripcion_funcion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Descripcion_funcion'); ?>
	</div>

	<div >
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array("class"=>"btn btn-inverse btn-medium")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->