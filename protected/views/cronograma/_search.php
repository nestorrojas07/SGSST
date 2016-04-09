<?php
/* @var $this CronogramaController */
/* @var $model Cronograma */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div >
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div >
		<?php echo $form->label($model,'Descripcion'); ?>
		<?php echo $form->textField($model,'Descripcion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div >
		<?php echo $form->label($model,'Fecha'); ?>
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
	<!--
	<div >
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
	</div>
	-->
	<div >
		<?php echo CHtml::submitButton('Search',array("class"=>"btn btn-primary btn-medium")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->