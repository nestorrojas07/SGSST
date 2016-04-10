<?php
/* @var $this PlanemergenciasController */
/* @var $model Planemergencias */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'planemergencias-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
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

	<div class="row">
		<?php echo $form->labelEx($model,'Plan'); ?>
		<?php echo $form->textField($model,'Plan',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Plan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->