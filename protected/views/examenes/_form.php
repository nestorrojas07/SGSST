<?php
/* @var $this ExamenesController */
/* @var $model Examenes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'examenes-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<!--<?php echo $form->errorSummary($model); ?>-->

	<div >
		<?php echo $form->labelEx($model,'Tipo'); ?>
		<?php echo $form->textField($model,'Tipo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Tipo'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'Fecha'); ?>
		<?php 

			$this->widget("zii.widgets.jui.CJuiDatePicker", array(
			"attribute"=>"Fecha",
			"model"=>$model,
			"language"=>"es",
			"options"=>array(
				"dateFormat"=>"yy-mm-dd",
				'showButtonPanel'=>true,
				'changeYear'=>true,
				'changeYear'=>true,
				'yearRange'=>'0:+5',
				'minDate'=>'0Y',
				'maxDate'=>'+5Y',
				)))
		?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'Descripcion'); ?>
		<?php echo $form->textArea($model,'Descripcion',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Descripcion'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'Diagnostico'); ?>
		<?php echo $form->textArea($model,'Diagnostico',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'Diagnostico'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'Seleccione la historia clinica'); ?>
		<?php echo $form->dropDownList($model,'IdHistoriaClinica',$model->getMenuHistoriaClinica(),array("empty"=>"Seleccione un trabajador - Historia clinica")); ?>
		<?php echo $form->error($model,'IdHistoriaClinica'); ?>
	</div>

	<div >
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array("class"=>"btn btn-primary btn-medium")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->