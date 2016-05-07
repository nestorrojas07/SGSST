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

	<div >
		<?php echo $form->labelEx($model,'Numero de personas que asistieron'); ?>
		<?php echo $form->textField($model,'PersonasAsistieron'); ?>
		<?php echo $form->error($model,'PersonasAsistieron'); ?>
	</div>
	
	<br>
	<div >
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array("class"=>"btn btn-inverse btn-medium")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->