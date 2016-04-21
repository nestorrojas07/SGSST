<?php
/* @var $this AfiliacionesController */
/* @var $model Afiliaciones */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'afiliaciones-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<!--<?php echo $form->errorSummary($model); ?>-->

	<div >
		<?php echo $form->labelEx($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Nombre'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'Descripcion'); ?>
		<?php echo $form->textField($model,'Descripcion',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'Descripcion'); ?>
	</div>
	<!--
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
	</div>-->

	<div >
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array("class"=>"btn btn-inverse btn-medium")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->