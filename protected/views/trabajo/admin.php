<?php
/* @var $this TrabajoController */
/* @var $model Trabajo */

$this->breadcrumbs=array(
	'Trabajos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Trabajo', 'url'=>array('index')),
	array('label'=>'Create Trabajo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#trabajo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Trabajos</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'trabajo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Id',
		'proceso',
		'zona',
		'actividad',
		'tarea',
		'rutinaria',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
