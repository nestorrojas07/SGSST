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

	<!--<?php echo $form->errorSummary($model); ?>-->

	<div >
		<?php echo $form->labelEx($model,'Cedula'); ?>
		<?php echo $form->textField($model,'Cedula',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Cedula'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Nombre'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'Telefono'); ?>
		<?php echo $form->textField($model,'Telefono',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Telefono'); ?>
	</div>
	<!--
	<div >
		<?php echo $form->labelEx($model,'Foto_Link'); ?>
		<?php echo $form->textField($model,'Foto_Link',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Foto_Link'); ?>
	</div> -->

	<div >
		<?php echo $form->labelEx($model,'Correo'); ?>
		<?php echo $form->textField($model,'Correo',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Correo'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'Titulo_academico'); ?>
		<?php echo $form->textField($model,'Titulo_academico',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Titulo_academico'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'experiencia'); ?>
		<?php echo $form->textField($model,'experiencia',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'experiencia'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'ausencias'); ?>
		<?php echo $form->textField($model,'ausencias'); ?>
		<?php echo $form->error($model,'ausencias'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'IdBrigada'); ?>
		<?php echo $form->dropDownList($model,'IdBrigada', $model->getMenuBrigada(),array("empty"=>"Seleccione una brigada")); ?>
		<?php echo $form->error($model,'IdBrigada'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'IdTrabajo'); ?>
		<?php echo $form->dropDownList($model,'IdTrabajo', $model-> getMenuTrabajo(), array("empty"=>"Seleccione una tarea")); ?>
		<?php echo $form->error($model,'IdTrabajo'); ?>
	</div>

	<div>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array("class"=>"btn btn-primary btn-medium")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->