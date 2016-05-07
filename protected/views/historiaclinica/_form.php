<?php
/* @var $this HistoriaclinicaController */
/* @var $model Historiaclinica */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'historiaclinica-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<div >
		<?php echo $form->labelEx($model,'Descripcion'); ?>
		<?php echo $form->textArea($model,'Descripcion',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'Descripcion'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'Nombre del trabajador'); ?>
		<?php echo $form->dropDownList($model,'Cedula_trabajador',$model->getMenuTrabajadores(),array("empty"=>"Seleccione un trabajador")); ?>
		<?php echo $form->error($model,'Cedula_trabajador'); ?>
	</div>

	<div >
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array("class"=>"btn btn-inverse btn-medium")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->