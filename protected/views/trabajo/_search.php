<?php
/* @var $this TrabajoController */
/* @var $model Trabajo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Id'); ?>
		<?php echo $form->textField($model,'Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'proceso'); ?>
		<?php echo $form->textField($model,'proceso',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zona'); ?>
		<?php echo $form->textField($model,'zona',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'actividad'); ?>
		<?php echo $form->textField($model,'actividad',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tarea'); ?>
		<?php echo $form->textField($model,'tarea',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rutinaria'); ?>
		<?php echo $form->textField($model,'rutinaria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'peligro_descripcion'); ?>
		<?php echo $form->textField($model,'peligro_descripcion',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'peligro_clasificacion'); ?>
		<?php echo $form->textField($model,'peligro_clasificacion',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'peligro__efectosPosibles'); ?>
		<?php echo $form->textField($model,'peligro__efectosPosibles',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'control_existente_fuente'); ?>
		<?php echo $form->textField($model,'control_existente_fuente',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'control_existente_medio'); ?>
		<?php echo $form->textField($model,'control_existente_medio',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'control_existente_persona'); ?>
		<?php echo $form->textField($model,'control_existente_persona',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'evaluacion_riesgo_nivel_deficiencia'); ?>
		<?php echo $form->textField($model,'evaluacion_riesgo_nivel_deficiencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'evaluacion_riesgo_nivel_exposicion'); ?>
		<?php echo $form->textField($model,'evaluacion_riesgo_nivel_exposicion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'evaluacion_riesgo_nivel_probabilidad'); ?>
		<?php echo $form->textField($model,'evaluacion_riesgo_nivel_probabilidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'evaluacion_riesgo_interpretacion_nivel_probabilidad'); ?>
		<?php echo $form->textField($model,'evaluacion_riesgo_interpretacion_nivel_probabilidad',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'evaluacion_riesgo_nivel_consecuencia'); ?>
		<?php echo $form->textField($model,'evaluacion_riesgo_nivel_consecuencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'evaluacion_riesgo_nivel_riesgo_intervencion'); ?>
		<?php echo $form->textField($model,'evaluacion_riesgo_nivel_riesgo_intervencion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'evaluacion_riesgo_interpretacion_nivel_riesgo'); ?>
		<?php echo $form->textField($model,'evaluacion_riesgo_interpretacion_nivel_riesgo',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valoracion_riesgo'); ?>
		<?php echo $form->textField($model,'valoracion_riesgo',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'criterio_peor_consecuencia'); ?>
		<?php echo $form->textField($model,'criterio_peor_consecuencia',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'criterio_requisito_legal'); ?>
		<?php echo $form->textField($model,'criterio_requisito_legal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'intervencion_eliminacion'); ?>
		<?php echo $form->textField($model,'intervencion_eliminacion',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'intervencion_sustituacion'); ?>
		<?php echo $form->textField($model,'intervencion_sustituacion',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'intervencion_control_ingenieria'); ?>
		<?php echo $form->textField($model,'intervencion_control_ingenieria',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'intervencion_control_administrativo'); ?>
		<?php echo $form->textField($model,'intervencion_control_administrativo',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'intervencion_elementos_proteccion_personal'); ?>
		<?php echo $form->textField($model,'intervencion_elementos_proteccion_personal',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->