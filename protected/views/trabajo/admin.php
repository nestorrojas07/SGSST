<?php
/* @var $this TrabajoController */
/* @var $model Trabajo */

$this->breadcrumbs=array(
	'MIPECR'=>array('index'),
	'Administrar MIPECR',
);

$this->menu=array(
	array('label'=>'MIPECR', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
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

<h1><font color="#336699">Administrar MIPECR</font></h1>

<p>
Usted puede ingresar operadores de comparación como (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>)  en busquedas que incluyan caracteres numericos al comienzo de cada una de sus busquedas, seguido del valor a buscar. (<b>Ejemplo:</b> <b>&lt;2</b>)
</p>

<!--
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'trabajo-grid',

	'itemsCssClass'=>"table table-striped",
	'pager'=>array("htmlOptions"=>array("class"=>"pagination")),
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Id',
		'proceso',
		'zona',
		'actividad',
		'tarea',
		#'rutinaria',
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
