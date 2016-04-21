<?php
/* @var $this CronogramaController */
/* @var $model Cronograma */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cronograma-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<!--<?php echo $form->errorSummary($model); ?>-->

	<div >
		<?php echo $form->labelEx($model,'Descripcion'); ?>
		<?php echo $form->textField($model,'Descripcion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Descripcion'); ?>
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
				'yearRange'=>'-5:+5',
				'minDate'=>'-5Y',
				'maxDate'=>'+5Y',
				)))
		?>
	</div>
	<!--
	<div >
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>-->

	<div >
		<?php echo $form->labelEx($model,'PersonasProgramadas'); ?>
		<?php echo $form->textField($model,'PersonasProgramadas'); ?>
		<?php echo $form->error($model,'PersonasProgramadas'); ?>
	</div>
	<!--
	<div >
		<?php echo $form->labelEx($model,'PersonasAsistieron'); ?>
		<?php echo $form->textField($model,'PersonasAsistieron'); ?>
		<?php echo $form->error($model,'PersonasAsistieron'); ?>
	</div>
	-->

	<div >
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array("class"=>"btn btn-inverse btn-medium")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->