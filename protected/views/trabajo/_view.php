<?php
/* @var $this TrabajoController */
/* @var $data Trabajo */
?>

<div class="view">

	<table class="table table-bordered table-striped">

		<tr>
			<td> <strong><font color="#336699">Proceso</font></strong></td>
			<td><strong><font color="#336699">Zona</font></strong></td>
			<td><strong><font color="#336699">Actividad</font></strong></td>
			<td><strong><font color="#336699">Tarea</font></strong></td>
			<td><strong><font color="#336699">Rutinaria</font></strong></td>
		</tr>
		<?php $mipecrs=$this->listaMipecr; ?>
		<?php foreach ($mipecrs as $mipecr)	: ?>

			<tr>			
				<td> <?php  echo CHtml::link($mipecr->proceso, array('trabajo/view&id='.$mipecr->Id)) ?></td>
				<td> <?php  echo $mipecr->zona ?></td>
				<td> <?php  echo $mipecr->actividad ?></td>
				<td> <?php  echo $mipecr->tarea ?></td>
				<td> <?php  echo $mipecr->cambiarRutinaria ?></td>
			</tr>

		<?php  endforeach; ?>
		
	</table>	
	
	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proceso')); ?>:</b>
	<?php echo CHtml::encode($data->proceso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zona')); ?>:</b>
	<?php echo CHtml::encode($data->zona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actividad')); ?>:</b>
	<?php echo CHtml::encode($data->actividad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tarea')); ?>:</b>
	<?php echo CHtml::encode($data->tarea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rutinaria')); ?>:</b>
	<?php echo CHtml::encode($data->rutinaria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peligro_descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->peligro_descripcion); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('peligro_clasificacion')); ?>:</b>
	<?php echo CHtml::encode($data->peligro_clasificacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peligro__efectosPosibles')); ?>:</b>
	<?php echo CHtml::encode($data->peligro__efectosPosibles); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('control_existente_fuente')); ?>:</b>
	<?php echo CHtml::encode($data->control_existente_fuente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('control_existente_medio')); ?>:</b>
	<?php echo CHtml::encode($data->control_existente_medio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('control_existente_persona')); ?>:</b>
	<?php echo CHtml::encode($data->control_existente_persona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('evaluacion_riesgo_nivel_deficiencia')); ?>:</b>
	<?php echo CHtml::encode($data->evaluacion_riesgo_nivel_deficiencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('evaluacion_riesgo_nivel_exposicion')); ?>:</b>
	<?php echo CHtml::encode($data->evaluacion_riesgo_nivel_exposicion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('evaluacion_riesgo_nivel_probabilidad')); ?>:</b>
	<?php echo CHtml::encode($data->evaluacion_riesgo_nivel_probabilidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('evaluacion_riesgo_interpretacion_nivel_probabilidad')); ?>:</b>
	<?php echo CHtml::encode($data->evaluacion_riesgo_interpretacion_nivel_probabilidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('evaluacion_riesgo_nivel_consecuencia')); ?>:</b>
	<?php echo CHtml::encode($data->evaluacion_riesgo_nivel_consecuencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('evaluacion_riesgo_nivel_riesgo_intervencion')); ?>:</b>
	<?php echo CHtml::encode($data->evaluacion_riesgo_nivel_riesgo_intervencion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('evaluacion_riesgo_interpretacion_nivel_riesgo')); ?>:</b>
	<?php echo CHtml::encode($data->evaluacion_riesgo_interpretacion_nivel_riesgo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valoracion_riesgo')); ?>:</b>
	<?php echo CHtml::encode($data->valoracion_riesgo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('criterio_peor_consecuencia')); ?>:</b>
	<?php echo CHtml::encode($data->criterio_peor_consecuencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('criterio_requisito_legal')); ?>:</b>
	<?php echo CHtml::encode($data->criterio_requisito_legal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('intervencion_eliminacion')); ?>:</b>
	<?php echo CHtml::encode($data->intervencion_eliminacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('intervencion_sustituacion')); ?>:</b>
	<?php echo CHtml::encode($data->intervencion_sustituacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('intervencion_control_ingenieria')); ?>:</b>
	<?php echo CHtml::encode($data->intervencion_control_ingenieria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('intervencion_control_administrativo')); ?>:</b>
	<?php echo CHtml::encode($data->intervencion_control_administrativo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('intervencion_elementos_proteccion_personal')); ?>:</b>
	<?php echo CHtml::encode($data->intervencion_elementos_proteccion_personal); ?>
	<br />

	*/ ?> -->

</div>