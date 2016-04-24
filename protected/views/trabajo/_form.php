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

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<!--<?php echo $form->errorSummary($model); ?>-->

	<div >
		<?php echo $form->labelEx($model,'proceso'); ?>
		<?php echo $form->textField($model,'proceso',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'proceso'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'zona'); ?>
		<?php echo $form->textField($model,'zona',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'zona'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'actividad'); ?>
		<?php echo $form->textArea($model,'actividad',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'actividad'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'tarea'); ?>
		<?php echo $form->textArea($model,'tarea',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tarea'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'rutinaria'); ?>
		<?php echo $form->dropDownList($model,'rutinaria',$model->getSiONo()); ?>
		<?php echo $form->error($model,'rutinaria'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'peligro_descripcion'); ?>
		<?php echo $form->textArea($model,'peligro_descripcion',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'peligro_descripcion'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'peligro_clasificacion'); ?>
		<?php echo $form->dropDownList($model,'peligro_clasificacion',$model->getPeligroClasificacion()); ?>
		<?php echo $form->error($model,'peligro_clasificacion'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'peligro__efectosPosibles'); ?>
		<?php echo $form->textArea($model,'peligro__efectosPosibles',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'peligro__efectosPosibles'); ?>
	</div>
	
	<div >
		<?php echo $form->labelEx($model,'control_existente_fuente'); ?>
		<?php echo $form->textField($model,'control_existente_fuente',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'control_existente_fuente'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'control_existente_medio'); ?>
		<?php echo $form->textField($model,'control_existente_medio',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'control_existente_medio'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'control_existente_persona'); ?>
		<?php echo $form->textArea($model,'control_existente_persona',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'control_existente_persona'); ?>
	</div>
	
	<div >
		<?php echo $form->labelEx($model,'evaluacion_riesgo_nivel_deficiencia'); ?>
		<?php echo $form->dropDownList($model,'evaluacion_riesgo_nivel_deficiencia',$model->getNivelesDeficiencia()); ?>
		<?php echo $form->error($model,'evaluacion_riesgo_nivel_deficiencia'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'evaluacion_riesgo_nivel_exposicion'); ?>
		<?php echo $form->dropDownList($model,'evaluacion_riesgo_nivel_exposicion',$model->getNivelesExposicion()); ?>
		<?php echo $form->error($model,'evaluacion_riesgo_nivel_exposicion'); ?>
	</div>
	<!--
	<div >
		<?php echo $form->labelEx($model,'evaluacion_riesgo_nivel_probabilidad'); ?>
		<?php echo $form->textField($model,'evaluacion_riesgo_nivel_probabilidad'); ?>
		<?php echo $form->error($model,'evaluacion_riesgo_nivel_probabilidad'); ?>
	</div>
	
	<div >
		<?php echo $form->labelEx($model,'evaluacion_riesgo_interpretacion_nivel_probabilidad'); ?>
		<?php echo $form->textField($model,'evaluacion_riesgo_interpretacion_nivel_probabilidad',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'evaluacion_riesgo_interpretacion_nivel_probabilidad'); ?>
	</div>

	-->

	<div >
		<?php echo $form->labelEx($model,'evaluacion_riesgo_nivel_consecuencia'); ?>
		<?php echo $form->dropDownList($model,'evaluacion_riesgo_nivel_consecuencia',$model->getNivelConsecuencia()); ?>
		<?php echo $form->error($model,'evaluacion_riesgo_nivel_consecuencia'); ?>
	</div>
	<!--
	<div >
		<?php echo $form->labelEx($model,'evaluacion_riesgo_nivel_riesgo_intervencion'); ?>
		<?php echo $form->textField($model,'evaluacion_riesgo_nivel_riesgo_intervencion'); ?>
		<?php echo $form->error($model,'evaluacion_riesgo_nivel_riesgo_intervencion'); ?>
	</div>



	<div >
		<?php echo $form->labelEx($model,'evaluacion_riesgo_interpretacion_nivel_riesgo'); ?>
		<?php echo $form->textField($model,'evaluacion_riesgo_interpretacion_nivel_riesgo',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'evaluacion_riesgo_interpretacion_nivel_riesgo'); ?>
	</div>
	-->

	<div >
		<?php echo $form->labelEx($model,'valoracion_riesgo'); ?>
		<?php echo $form->textField($model,'valoracion_riesgo',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'valoracion_riesgo'); ?>
	</div>
	<!--
	<div >
		<?php echo $form->labelEx($model,'criterio_numero_expuestos'); ?>
		<?php echo $form->textField($model,'criterio_numero_expuestos',array('size'=>20,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'criterio_numero_expuestos'); ?>
	</div>
	-->

	<div >
		<?php echo $form->labelEx($model,'criterio_peor_consecuencia'); ?>
		<?php echo $form->textArea($model,'criterio_peor_consecuencia',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'criterio_peor_consecuencia'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'criterio_requisito_legal'); ?>
		<?php echo $form->dropDownList($model,'criterio_requisito_legal',$model->getSiONo()); ?>
		<?php echo $form->error($model,'criterio_requisito_legal'); ?>
	</div>
	
	<div >
		<?php echo $form->labelEx($model,'intervencion_eliminacion'); ?>
		<?php echo $form->textArea($model,'intervencion_eliminacion',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'intervencion_eliminacion'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'intervencion_sustituacion'); ?>
		<?php echo $form->textArea($model,'intervencion_sustituacion',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'intervencion_sustituacion'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'intervencion_control_ingenieria'); ?>
		<?php echo $form->textArea($model,'intervencion_control_ingenieria',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'intervencion_control_ingenieria'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'intervencion_control_administrativo'); ?>
		<?php echo $form->textArea($model,'intervencion_control_administrativo',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'intervencion_control_administrativo'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'intervencion_elementos_proteccion_personal'); ?>
		<?php echo $form->textArea($model,'intervencion_elementos_proteccion_personal',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'intervencion_elementos_proteccion_personal'); ?>
	</div>
	

	<div >
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array("class"=>"btn btn-inverse")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->