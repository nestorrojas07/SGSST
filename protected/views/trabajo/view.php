<?php
/* @var $this TrabajoController */
/* @var $model Trabajo */

$this->breadcrumbs=array(
	'Trabajos'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List Trabajo', 'url'=>array('index')),
	array('label'=>'Create Trabajo', 'url'=>array('create')),
	array('label'=>'Update Trabajo', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Trabajo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Trabajo', 'url'=>array('admin')),
);
?>

<h1>View Trabajo #<?php echo $model->Id; ?></h1>

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
		'criterio_numero_expuestos',
		'criterio_peor_consecuencia',
		'criterio_requisito_legal',
		'intervencion_eliminacion',
		'intervencion_sustituacion',
		'intervencion_control_ingenieria',
		'intervencion_control_administrativo',
		'intervencion_elementos_proteccion_personal',
	),
)); ?>
