<?php
/* @var $this VencimientosController */
/* @var $model Vencimientos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
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
		<?php echo $form->label($model,'Instrucciones'); ?>
		<?php echo $form->textField($model,'Instrucciones',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cedula_Trabajador'); ?>
		<?php echo $form->textField($model,'Cedula_Trabajador',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->