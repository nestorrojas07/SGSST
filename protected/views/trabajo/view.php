<?php
/* @var $this TrabajoController */
/* @var $model Trabajo */

$this->breadcrumbs=array(
	'MIPECR'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'MIPECR', 'url'=>array('index')),
	#array('label'=>'Create Trabajo', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	#array('label'=>'Manage Trabajo', 'url'=>array('admin')),
);
?>

<h1><font color="#336699">Ver: </font><font color="black"><?php echo $model->Id; ?></font></h1>



<?php echo CHtml::submitButton('Peligro', array('submit'=>array('trabajo/peligro&id='.$model->Id),"class"=>"btn btn-inverse btn-medium")); ?> 
<?php echo CHtml::submitButton('Controles existentes', array('submit'=>array('trabajo/controlesExistentes&id='.$model->Id),"class"=>"btn btn-inverse btn-medium")); ?> 
<?php echo CHtml::submitButton('Evaluación del riesgo', array('submit'=>array('trabajo/evaluacionRiesgo&id='.$model->Id),"class"=>"btn btn-inverse btn-medium")); ?> 
<?php echo CHtml::submitButton('Criterios para establecer controles', array('submit'=>array('trabajo/criteriosControles&id='.$model->Id),"class"=>"btn btn-inverse btn-medium")); ?> 
<?php echo CHtml::submitButton('Medidas de intervencion', array('submit'=>array('trabajo/medidasIntervencion&id='.$model->Id),"class"=>"btn btn-inverse btn-medium")); ?> 
<br>
<br>
<!--
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'proceso',
		'zona',
		'actividad',
		'tarea',
		'rutinaria',
		'peligro_descripcion',
		'peligro_clasificacion',
		'peligro__efectosPosibles',
		'control_existente_fuente',
		'control_existente_medio',
		'control_existente_persona',
		'evaluacion_riesgo_nivel_deficiencia',
		'evaluacion_riesgo_nivel_exposicion',
		'evaluacion_riesgo_nivel_probabilidad',
		'evaluacion_riesgo_interpretacion_nivel_probabilidad',
		'evaluacion_riesgo_nivel_consecuencia',
		'evaluacion_riesgo_nivel_riesgo_intervencion',
		'evaluacion_riesgo_interpretacion_nivel_riesgo',
		'valoracion_riesgo',
		'criterio_peor_consecuencia',
		'criterio_requisito_legal',
		'intervencion_eliminacion',
		'intervencion_sustituacion',
		'intervencion_control_ingenieria',
		'intervencion_control_administrativo',
		'intervencion_elementos_proteccion_personal',
	),
)); ?>-->

<table class="table table-bordered table-striped">
	<tr>
		<td><strong><font color="#336699">Id</font></strong></td>
		<td><?php echo $model->Id ?></td>		
	</tr>
	<tr>
		<td><strong><font color="#336699">Proceso</font></strong></td>
		<td><?php echo $model->proceso ?></td>
		
	</tr>
	<tr>
		<td><strong><font color="#336699">Zona</font></strong></td>
		<td><?php echo $model->zona ?></td>
	</tr>
	<tr>
		<td><strong><font color="#336699">Actividad</font></strong></td>
		<td><?php echo $model->actividad ?></td>
	</tr>
	<tr>
		<td><strong><font color="#336699">Tarea</font></strong></td>
		<td><?php echo $model->tarea ?></td>
	</tr>
	<tr>
		<td><strong><font color="#336699">Rutinaria</font></strong></td>
		<td><?php echo $model->cambiarRutinaria ?></td>
	</tr>
</table>


