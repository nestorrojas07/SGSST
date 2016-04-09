<?php
/* @var $this TrabajoController */
/* @var $model Trabajo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'trabajo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Id'); ?>
		<?php echo $form->textField($model,'Id'); ?>
		<?php echo $form->error($model,'Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'proceso'); ?>
		<?php echo $form->textField($model,'proceso',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'proceso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zona'); ?>
		<?php echo $form->textField($model,'zona',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'zona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'actividad'); ?>
		<?php echo $form->textField($model,'actividad',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'actividad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tarea'); ?>
		<?php echo $form->textField($model,'tarea',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tarea'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rutinaria'); ?>
		<?php echo $form->textField($model,'rutinaria'); ?>
		<?php echo $form->error($model,'rutinaria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'peligro_descripcion'); ?>
		<?php echo $form->textField($model,'peligro_descripcion',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'peligro_descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'peligro_clasificacion'); ?>
		<?php echo $form->textField($model,'peligro_clasificacion',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'peligro_clasificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'peligro__efectosPosibles'); ?>
		<?php echo $form->textField($model,'peligro__efectosPosibles',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'peligro__efectosPosibles'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'control_existente_fuente'); ?>
		<?php echo $form->textField($model,'control_existente_fuente',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'control_existente_fuente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'control_existente_medio'); ?>
		<?php echo $form->textField($model,'control_existente_medio',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'control_existente_medio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'control_existente_persona'); ?>
		<?php echo $form->textField($model,'control_existente_persona',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'control_existente_persona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'evaluacion_riesgo_nivel_deficiencia'); ?>
		<?php echo $form->textField($model,'evaluacion_riesgo_nivel_deficiencia'); ?>
		<?php echo $form->error($model,'evaluacion_riesgo_nivel_deficiencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'evaluacion_riesgo_nivel_exposicion'); ?>
		<?php echo $form->textField($model,'evaluacion_riesgo_nivel_exposicion'); ?>
		<?php echo $form->error($model,'evaluacion_riesgo_nivel_exposicion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'evaluacion_riesgo_nivel_probabilidad'); ?>
		<?php echo $form->textField($model,'evaluacion_riesgo_nivel_probabilidad'); ?>
		<?php echo $form->error($model,'evaluacion_riesgo_nivel_probabilidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'evaluacion_riesgo_interpretacion_nivel_probabilidad'); ?>
		<?php echo $form->textField($model,'evaluacion_riesgo_interpretacion_nivel_probabilidad',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'evaluacion_riesgo_interpretacion_nivel_probabilidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'evaluacion_riesgo_nivel_consecuencia'); ?>
		<?php echo $form->textField($model,'evaluacion_riesgo_nivel_consecuencia'); ?>
		<?php echo $form->error($model,'evaluacion_riesgo_nivel_consecuencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'evaluacion_riesgo_nivel_riesgo_intervencion'); ?>
		<?php echo $form->textField($model,'evaluacion_riesgo_nivel_riesgo_intervencion'); ?>
		<?php echo $form->error($model,'evaluacion_riesgo_nivel_riesgo_intervencion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'evaluacion_riesgo_interpretacion_nivel_riesgo'); ?>
		<?php echo $form->textField($model,'evaluacion_riesgo_interpretacion_nivel_riesgo',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'evaluacion_riesgo_interpretacion_nivel_riesgo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valoracion_riesgo'); ?>
		<?php echo $form->textField($model,'valoracion_riesgo',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'valoracion_riesgo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'criterio_numero_expuestos'); ?>
		<?php echo $form->textField($model,'criterio_numero_expuestos'); ?>
		<?php echo $form->error($model,'criterio_numero_expuestos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'criterio_peor_consecuencia'); ?>
		<?php echo $form->textField($model,'criterio_peor_consecuencia',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'criterio_peor_consecuencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'criterio_requisito_legal'); ?>
		<?php echo $form->textField($model,'criterio_requisito_legal'); ?>
		<?php echo $form->error($model,'criterio_requisito_legal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'intervencion_eliminacion'); ?>
		<?php echo $form->textField($model,'intervencion_eliminacion',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'intervencion_eliminacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'intervencion_sustituacion'); ?>
		<?php echo $form->textField($model,'intervencion_sustituacion',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'intervencion_sustituacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'intervencion_control_ingenieria'); ?>
		<?php echo $form->textField($model,'intervencion_control_ingenieria',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'intervencion_control_ingenieria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'intervencion_control_administrativo'); ?>
		<?php echo $form->textField($model,'intervencion_control_administrativo',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'intervencion_control_administrativo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'intervencion_elementos_proteccion_personal'); ?>
		<?php echo $form->textField($model,'intervencion_elementos_proteccion_personal',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'intervencion_elementos_proteccion_personal'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->